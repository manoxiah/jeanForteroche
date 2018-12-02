<?php

require_once("./view/model/modelLogBDD.php");

class modelMessage
{
    private $BDD;

    public function __construct()
    {
        $this->BDD = new BDD();
    }




    public function getDisplayListReplyMessage($idMessage)
    {
        $donneesDisplayListReplyMessage = $this->BDD->connexionBDD()->prepare('SELECT * FROM replyMessage WHERE idMessage=:a ORDER BY replyDate DESC');
        $donneesDisplayListReplyMessage->execute(array('a'=>$idMessage));
        return $donneesDisplayListReplyMessage->fetchAll();
    }

    public function getDisplayListLineMessageByStateMessage($stateMessage,$numberMessageForPage,$numberCurrentPage)
    {
        $donneesDisplayListLineMessageByStateMessage = $this->BDD->connexionBDD()->prepare('SELECT * FROM message WHERE stateMessage=:a ORDER BY publicationDate DESC LIMIT '. (($numberCurrentPage-1)*$numberMessageForPage) .','. $numberMessageForPage .'');
        $donneesDisplayListLineMessageByStateMessage->execute(array('a'=>$stateMessage));
        return $donneesDisplayListLineMessageByStateMessage->fetchAll();
    }

    public function countCommentByStateMessage($stateMessage)
    {
        $donneesCountCommentByStateMessage = $this->BDD->connexionBDD()->prepare('SELECT COUNT(*) as numberMessage FROM message WHERE stateMessage=:a');
        $donneesCountCommentByStateMessage->execute(array('a'=>$stateMessage));
        return $donneesCountCommentByStateMessage->fetch();
    }

    public function getDisplayOneMessage($idMessage)
    {
        $donneesDisplayOneMessage = $this->BDD->connexionBDD()->prepare('SELECT * FROM message WHERE id=:a');
        $donneesDisplayOneMessage->execute(array('a'=>$idMessage));
        $donneesDisplayOneMessage = $donneesDisplayOneMessage->fetch();
        return $donneesDisplayOneMessage;
    }

    public function getSendMessage($name,$email,$contentMessage)
    {
        $donneesSendMessage = $this->BDD->connexionBDD()->prepare('INSERT INTO message( name,email,contentMessage,stateMessage,publicationDate) VALUES(?,?,?,?,now())');
        $donneesSendMessage->execute(array($name,$email,$contentMessage,0));
        return true;
    }

    public function updateMessage($idMessage,$stateMessage)
    {
        $donneesSendMessage = $this->BDD->connexionBDD()->prepare('UPDATE message SET stateMessage=:a WHERE id=:b');
        $donneesSendMessage->execute(array('a'=>$stateMessage, 'b'=>$idMessage));
        return true;
    }

    public function replyMessage($idMessage,$email,$subject,$contentReplyMessage)
    {
        $to = ''.$email.'';

        $subject = ''.$subject.'';

        $msg = ''.$contentReplyMessage.'';

        $headers = 'From: Adrien Pellegrini <mail@server.com>'."\r\n";
        $headers .= 'Bcc: Moi <moi@server.com>; lui <lui@server2.com>'."\r\n";
        $headers .= "\r\n";

        mail($to, $subject, $msg, $headers);


        $donneesSendMessage = $this->BDD->connexionBDD()->prepare('INSERT INTO replyMessage ( idMessage, subject, contentReplyMessage,replyDate) VALUES(?,?,?,now())');
        $donneesSendMessage->execute(array($idMessage,$subject,$contentReplyMessage));
        return true;
    }

}
