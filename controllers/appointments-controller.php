<?php
require '../models/appointments.php';

$errors = [];
$addAppointmentSuccess = 0;
$deleteAppointmentSuccess = 0;
$modifyAppointmentSuccess = 0;

//get all apartments
$newObj = new Apartments();
$allApartments = $newObj->getAllApartments();

// get all the information from the add appointment form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // delete an appointment when clicking on the submit button of the modal
    if (isset($_POST["deleteAppointment"])) {
        $deleteAppointmentObj = new Appointments();
        $deleteAppointmentObj->deleteAppointment($_POST["deleteAppointment"]);
        $deleteAppointmentSuccess = true;
    }

    // Add an appointment when clicking on the submit button of the form
    // All the data is getting sanitized before being injected in the database
    if (isset($_POST["submitAppointment"]) && count($errors) == 0) {

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
        $dateHour = $_POST["dateHour"] . " " . $_POST["time"] . ":00";
        $idApartment = $_POST["id"];


        $appointmentsObj = new Appointments();
        $appointmentsObj->addAppointment($lastname, $firstname, $email, $phoneNumber, $dateHour, $idApartment);
        $addAppointmentSuccess = true;
    }

    // modify an existing appointment when clicking on the submit button of the form
    if (isset($_POST["modifyAppointment"]) && count($errors) == 0) {
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
        $dateHour = $_POST["dateHour"] . " " . $_POST["time"] . ":00";
        $idApartment = $_POST["id_apartment"];
        $id = $_POST["id"];

        $modifyAppointmentObj = new Appointments();
        $modifyAppointmentObj->modifyAppointment($lastname, $firstname, $email, $phoneNumber, $dateHour, $idApartment, $id);
        $modifyAppointmentSuccess = true;

        $oneAppointmentArray = $modifyAppointmentObj->getOneAppointment($id);
    }
}

// get appointment id from the url
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET["idAppointment"])) {
        $oneAppointmentObj = new Appointments();
        $oneAppointmentArray = $oneAppointmentObj->getOneAppointment($_GET["idAppointment"]);
    }
}

//get all appointments
$allAppointmentsObj = new Appointments();
$allAppointments = $allAppointmentsObj->getAllAppointments();

//get four appointments
$fourAppointmentsObj = new Appointments();
$fourAppointmentsArray = $fourAppointmentsObj->getFourAppointments();