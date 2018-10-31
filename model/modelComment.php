<?php

require_once("model/modelLogBDD.php");

class comment extends BDD
{
    private $BDD;

    public function __construct()
    {
      $this->BDD = new BDD();
    }

    public function getListFullComment($numberChapter)
    {
      $req = $this->BDD->connexionBDD()->prepare('SELECT * FROM commentaire_chapitre WHERE id_chapitre=:a ORDER BY publicationDate DESC');
      $req->execute(array('a'=>$numberChapter));

      return $req;
    }

    public function getListCommentState0()
    {
        $req = $this->BDD->connexionBDD()->query('SELECT * FROM commentaire_chapitre WHERE signaler_valider_bloquer=0 ORDER BY publicationDate DESC');

        return $req;
    }
}
