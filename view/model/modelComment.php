<?php

require_once("./view/model/modelLogBDD.php");

class modelComment
{
    private $BDD;

    public function __construct()
    {
      $this->BDD = new BDD();
    }

    public function getDisplayListCommentForOneChapter($idChapter)
    {
        $donneesDisplayListCommentForOneChapter = $this->BDD->connexionBDD()->prepare('SELECT * FROM commentChapter WHERE idChapter=:a ORDER BY publicationDate DESC');
        $donneesDisplayListCommentForOneChapter->execute(array('a'=>$idChapter));
        return $donneesDisplayListCommentForOneChapter->fetchAll();
    }

    public function getDisplayListLineCommentByStateComment($stateComment,$numberCommentForPage,$numberCurrentPage)
    {
        $donneesDisplayListLineCommentByStateComment = $this->BDD->connexionBDD()->prepare('SELECT * FROM commentChapter WHERE stateComment=:a ORDER BY publicationDate DESC LIMIT '. (($numberCurrentPage-1)*$numberCommentForPage) .','. $numberCommentForPage .'');
        $donneesDisplayListLineCommentByStateComment->execute(array('a'=>$stateComment));
        return $donneesDisplayListLineCommentByStateComment->fetchAll();
    }

    public function countCommentByStateComment($stateComment)
    {
        $donneesCountCommentByStateComment = $this->BDD->connexionBDD()->prepare('SELECT COUNT(*) as numberComment FROM commentChapter WHERE stateComment=:a');
        $donneesCountCommentByStateComment->execute(array('a'=>$stateComment));
        return $donneesCountCommentByStateComment->fetch();
    }

    public function getDisplayOneComment($idComment)
    {
        $donneesDisplayOneComment = $this->BDD->connexionBDD()->prepare('SELECT * FROM commentChapter WHERE id=:a ');
        $donneesDisplayOneComment->execute(array('a'=>$idComment));
        $donneesDisplayOneComment = $donneesDisplayOneComment->fetch();
        return $donneesDisplayOneComment;
    }

    public function sendComment($idChapter,$contentComment,$pseudo)
    {
        $donneesSendCommentChapter = $this->BDD->connexionBDD()->prepare('INSERT INTO commentChapter( idChapter,contentComment,pseudo,stateComment,publicationDate) VALUES(?,?,?,?,now())');
        $donneesSendCommentChapter->execute(array($idChapter,$contentComment,$pseudo,0));
        return true;
    }

    public function updateComment($idComment,$stateComment)
    {
        $donneesReportCommentChapter = $this->BDD->connexionBDD()->prepare('UPDATE commentChapter SET stateComment=:a WHERE id=:b');
        $donneesReportCommentChapter->execute(array('a'=>$stateComment, 'b'=>$idComment));
        return true;
    }

    public function deleteCommentForOneChapter($idChapter)
    {
        $donneesMessage = $this->BDD->connexionBDD()->prepare('DELETE FROM commentChapter WHERE idChapter=:a');
        $donneesMessage->execute(array('a'=>$idChapter));
        return true;
    }
}

