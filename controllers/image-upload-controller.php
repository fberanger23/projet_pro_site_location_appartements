<?php
require '../models/image-upload.php';

$errors = [];
$addPhotoSuccess = 0;
$deletePhotoSuccess = 0;



if (isset($_POST["uploadImg"]) && count($errors) == 0) {
    $name = $_FILES['fileToUpload']['name'];
    $path = '../assets/img/photosprincipales/';
    $idApartment = $_POST["id"];
    $altText = $_POST["altText"];


     // Count total files
 $countfiles = count($_FILES['fileToUpload']['name']);

  // Looping all files
  for($i=0;$i<$countfiles;$i++){
    $name = $_FILES['fileToUpload']['name'][$i];

       // Upload file
move_uploaded_file($_FILES['fileToUpload']['tmp_name'][$i], $path.$name);

    $imagesObj = new ApartmentPhotos();
    $imagesObj->addApartmentPhoto($name, $path.$name, $altText, $idApartment);
    $addPhotoSuccess = true;
}
} 

// get all the information from the add photo form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // delete an appointment when clicking on the submit button of the modal
   if (isset($_POST["deletePhoto"])) {
       $deletePhotoObj = new ApartmentPhotos();
       $deletePhotoObj->deletePhoto($_POST["deletePhoto"]);
       $deletePhotoSuccess = true;
   }

}

//get all photos
$newObj = new ApartmentPhotos();
$allPhotos = $newObj -> getAllPhotos();

//get all ground floor Downtown Apt
$newObj = new ApartmentPhotos();
$allDowntownGroundFloorPhotos = $newObj -> getDowntownGroundFloorApt();

//get all 1st floor Downtown Apt
$newObj = new ApartmentPhotos();
$allDowntownFirstFloorPhotos = $newObj -> getDowntownFirstFloorApt();

//get all 2nd floor Downtown Apt
$newObj = new ApartmentPhotos();
$allDowntownSecondFloorPhotos = $newObj -> getDowntownSecondFloorApt();

//get all 3rd floor Downtown Apt
$newObj = new ApartmentPhotos();
$allDowntownThirdFloorPhotos = $newObj -> getDowntownThirdFloorApt();

//get all 1st floor University Apt
$newObj = new ApartmentPhotos();
$allUniversityFirstFloorPhotos = $newObj -> getUniversityFirstFloorApt();