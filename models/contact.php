<?php

class Contact extends Database
{
    /**
     * Add a new message
     *
     * @param string $lastname
     * @param string $firstname
     * @param string $phoneNumber
     * @param string $email
     * @param string $message
     * @return void
     */
    public function addMessage(string $lastname, string $firstname, string $phoneNumber, string $email, string $message): void
    {
        $bdd = $this->connectDatabase();
        $req = $bdd->prepare("INSERT INTO `contact`(`lastname`, `firstname`, `phoneNumber`, `email`, `message`) VALUES(:lastname, :firstname, :phoneNumber, :email, :message)");
        $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':message', $message, PDO::PARAM_STR);
        $req->execute();
    }

    /**
     * get five appointments from appointment table 
     *
     * @return array
     */
    public function getThreeMessages(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `contact` ORDER BY `id` DESC LIMIT 3";
        $queryThreeMessages = $bdd->query($query);
        $threeMessagesArray = $queryThreeMessages->fetchAll();
        return $threeMessagesArray;
    }

    /**
     * get all messages from contact table 
     *
     * @return array
     */
    public function getAllMessages(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `contact` ORDER BY `id` DESC";
        $queryAllMessages = $bdd->query($query);
        $allMessagesArray = $queryAllMessages->fetchAll();
        return $allMessagesArray;
    }

    public function deleteMessage($idMessage): void
    {
        $bdd = $this->connectDatabase();
        $query = 'DELETE FROM `contact` WHERE `id` = :idMessage';
        $queryOneMessage = $bdd->prepare($query);
        $queryOneMessage->bindValue(':idMessage', $idMessage, PDO::PARAM_STR);
        $queryOneMessage->execute();
    }
}
