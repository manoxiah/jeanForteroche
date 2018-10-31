<?php

require_once("model/modelLogBDD.php");

class chapter extends BDD
{
    private $BDD;

    public function __construct()
    {
      $this->BDD = new BDD();
    }

    public function getListSmallChapter()
    {
      $req = $this->BDD->connexionBDD()->query('SELECT * FROM chapters WHERE idBook= 1 ORDER BY publicationDate DESC');

      return $req;
    }

    public function getchapter($numberChapter)
    {
      $req = $this->BDD->connexionBDD()->prepare('SELECT * FROM chapters WHERE idBook=:a and id=:b');
      $req->execute(array('a'=>1, 'b'=>$numberChapter));
      $donneesChapter = $req->fetch();

      return $donneesChapter;
    }
}
