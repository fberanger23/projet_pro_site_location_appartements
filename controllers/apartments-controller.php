<?php
require '../models/apartments.php';

$errors = [];
$addSuccess = 0; // Value 0 corresponds to false for JS
$deleteSuccess = 0;
$modifySuccess = 0;

// get all the information from the add apartment form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // delete an apartment when clicking on the submit button of the modal
    if (isset($_POST["deleteApartment"])) {
        $deleteApartmentObj = new Apartments();
        $deleteApartmentObj->deleteApartment($_POST["deleteApartment"]);
        $deleteSuccess = true;
    }
    // Add an apartment when clicking on the submit button of the form
    if (isset($_POST["submitApartment"]) && count($errors) == 0) {

        $mainPhoto = strip_tags($_POST["mainPhoto"]);
        $type = strip_tags($_POST["type"]);
        $floor = strip_tags($_POST["floor"]);
        $neighborhood = strip_tags($_POST["neighborhood"]);
        $squareFootage = strip_tags($_POST["squareFootage"]);
        $heatSystem = strip_tags($_POST["heatSystem"]);
        $monthlyRent = strip_tags($_POST["monthlyRent"]);
        $services = strip_tags($_POST["services"]);
        $totalRent = strip_tags($_POST["totalRent"]);
        $vacant = strip_tags($_POST["vacant"]);
        $apartmentLink = strip_tags($_POST["apartmentLink"]);

        $apartmentObj = new Apartments();
        $apartmentObj->addApartment($mainPhoto, $type, $floor, $neighborhood, $squareFootage, $heatSystem, $monthlyRent, $services, $totalRent, $vacant, $apartmentLink);
        $addSuccess = true;
    }
    // modify an existing apartment when clicking on the submit button of the form
    if (isset($_POST["modifyApartment"]) && count($errors) == 0) {
        $mainPhoto = strip_tags($_POST["mainPhoto"]);
        $type = strip_tags($_POST["type"]);
        $floor = strip_tags($_POST["floor"]);
        $neighborhood = strip_tags($_POST["neighborhood"]);
        $squareFootage = strip_tags($_POST["squareFootage"]);
        $heatSystem = strip_tags($_POST["heatSystem"]);
        $monthlyRent = strip_tags($_POST["monthlyRent"]);
        $services = strip_tags($_POST["services"]);
        $totalRent = strip_tags($_POST["totalRent"]);
        $vacant = strip_tags($_POST["vacant"]);
        $apartmentLink = strip_tags($_POST["apartmentLink"]);
        $id = strip_tags($_POST["id"]);

        $modifyApartmentObj = new Apartments();
        $modifyApartmentObj->modifyApartment($mainPhoto, $type, $floor, $neighborhood, $squareFootage, $heatSystem, $monthlyRent, $services, $totalRent, $vacant, $apartmentLink, $id);
        $modifySuccess = true;

        $oneApartmentArray = $modifyApartmentObj->getOneApartment($id);
    }
}
// get apartment id from the url
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_GET["idApartment"])) {
        $oneApartmentObj = new Apartments();
        $oneApartmentArray = $oneApartmentObj->getOneApartment($_GET["idApartment"]);
    }
}

//get all apartments
$newObj = new Apartments();
$allApartments = $newObj -> getAllApartments();

// //get all apartments from Centre-Est neighborhood
$newObj = new Apartments();
$allCentreEstApartments = $newObj -> getAllApartmentsPerCentreEstNeighborhood();

// get all apartments from University neighborhood
$newObj = new Apartments();
$allUniversityApartments = $newObj -> getAllApartmentsPerUniversityNeighborhood();

// get distinct info from Apartment table
$newObj = new Apartments();
$distinctInfo = $newObj -> getDistinctInfo();
