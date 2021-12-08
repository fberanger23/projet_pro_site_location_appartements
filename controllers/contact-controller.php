<?php
require '../models/contact.php';

$errors = [];
$addAMessageSuccess = 0;
$deleteMessageSuccess = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // delete an appointment when clicking on the submit button of the modal
    if (isset($_POST["deleteMessage"])) {
        $deleteMessageObj = new Contact();
        $deleteMessageObj->deleteMessage($_POST["deleteMessage"]);
        $deleteMessageSuccess = true;
    }

    // Add a message when clicking on the submit button of the form
    // All the data is getting sanitized before being injected in the database
    if (isset($_POST["submitMessage"]) && count($errors) == 0) {

        function sanitize($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $lastname = sanitize($_POST["lastname"]);
        $firstname = sanitize($_POST["firstname"]);
        $phoneNumber = sanitize($_POST["phoneNumber"]);
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $message = sanitize($_POST["message"]);


        $messagesObj = new Contact();
        $messagesObj->addMessage($lastname, $firstname, $phoneNumber, $email, $message);
        $addMessageSuccess = true;
    }
}

//get three messages
$threeMessagesObj = new Contact();
$threeMessagesArray = $threeMessagesObj->getThreeMessages();

//get all messages
$newObj = new Contact();
$allMessages = $newObj->getAllMessages();
