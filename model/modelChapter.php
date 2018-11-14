<?php

require_once("./model/modelLogBDD.php");

class modelChapter
{
    private $BDD;

    public function __construct()
    {
      $this->BDD = new BDD();
    }

    public function getDisplayListChapter($stateChapter)
    {
        $donneesDisplayListChapter = $this->BDD->connexionBDD()->prepare('SELECT * FROM chapter WHERE stateChapter=:a ORDER BY publicationDate DESC');
        $donneesDisplayListChapter->execute(array('a'=>$stateChapter));
        return $donneesDisplayListChapter->fetchAll();
    }

    public function getDisplayOneChapter($idChapter)
    {
        $donneesDisplayOneChapter = $this->BDD->connexionBDD()->prepare('SELECT * FROM chapter WHERE id=:a');
        $donneesDisplayOneChapter->execute(array('a'=>$idChapter));
        $donneesDisplayOneChapter = $donneesDisplayOneChapter->fetch();
        return $donneesDisplayOneChapter;
    }

    public function sendNewChapter($numberChapter,$titleChapter,$contentChapter)
    {
        $nameBook = "Un billet simple pour l'Alaska";
        $donneesSendChapter = $this->BDD->connexionBDD()->prepare('INSERT INTO chapter( nameBook, numberChapter, titleChapter, chapter,stateChapter, publicationDate) VALUES(?,?,?,?,?,now())');
        $donneesSendChapter->execute(array($nameBook,$numberChapter,$titleChapter,$contentChapter,0));
        return true;
    }

    public function updateStateChapter($idChapter,$stateChapter)
    {
        $donneesUpdateChapter = $this->BDD->connexionBDD()->prepare('UPDATE chapter SET stateChapter=:a WHERE id=:b');
        $donneesUpdateChapter->execute(array('a'=>$stateChapter, 'b'=>$idChapter));
        return true;
    }

    public function deleteChapter($idChapter)
    {
        $donneesDeleteChapter = $this->BDD->connexionBDD()->prepare('DELETE FROM chapter WHERE id=:a');
        $donneesDeleteChapter->execute(array('a'=>$idChapter));
        return true;
    }

    public function updateChapter($idChapter,$titleChapter,$contentChapter)
    {
        $donneesUpdateChapter = $this->BDD->connexionBDD()->prepare('UPDATE chapter SET stateChapter=:a, titleChapter=:b, chapter=:c WHERE id=:d');
        $donneesUpdateChapter->execute(array('a'=>0,'b'=>$titleChapter,'c'=>$contentChapter,'d'=>$idChapter));
        return true;
    }

}
