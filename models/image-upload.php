<?php

class ApartmentPhotos extends Database {
    /**
     * Add new apartment in apartment table
     *
     * @param string $name : name of the photo ...
     * @param string $path
     * @param string $altText
     * @param string $idApartment
     * @return void
     */
    public function addApartmentPhoto(string $name, string $path, string $altText, string $idApartment): void
    {
        $bdd = $this->connectDatabase();
        $req = $bdd->prepare("INSERT INTO `apartmentPhotos`(`name`, `path`, `altText`, `id_apartment`) VALUES(:name, :path, :altText, :id_apartment)");
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':path', $path, PDO::PARAM_STR);
        $req->bindValue(':altText', $altText, PDO::PARAM_STR);
        $req->bindValue(':id_apartment', $idApartment, PDO::PARAM_STR);
        $req->execute();
    }

        /**
     * get all photos from apartmentPhotos table 
     *
     * @return array
     */
    public function getAllPhotos(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `apartmentPhotos` ORDER BY `id` ASC";
        $queryAllPhotos = $bdd->query($query);
        $allPhotosArray = $queryAllPhotos->fetchAll();
        return $allPhotosArray;
    }


        /**
     * delete one photo from apartment photos table 
     *
     * @return void
     */
    public function deletePhoto($idPhoto): void
    {
        $bdd = $this->connectDatabase();
        $query = 'DELETE FROM `apartmentPhotos` WHERE `id` = :idPhoto';
        $queryOnePhoto = $bdd->prepare($query);
        $queryOnePhoto->bindValue(':idPhoto', $idPhoto, PDO::PARAM_STR);
        $queryOnePhoto->execute();
    }

        /**
     * get all Ground Floor photos from apartmentPhotos table 
     *
     * @return array
     */
    public function getDowntownGroundFloorApt(): array 
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `apartmentPhotos` WHERE `id_apartment` = '1' ORDER BY `id` ASC";
        $queryAllDowntownGroundFloorAptPhotos = $bdd->query($query);
        $allDowntownGroundFloorAptPhotosArray = $queryAllDowntownGroundFloorAptPhotos->fetchAll();
        return $allDowntownGroundFloorAptPhotosArray;
    }

            /**
     * get all 1st Floor photos from apartmentPhotos table 
     *
     * @return array
     */
    public function getDowntownFirstFloorApt(): array 
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `apartmentPhotos` WHERE `id_apartment` = '2' ORDER BY `id` ASC";
        $queryAllDowntownFirstFloorAptPhotos = $bdd->query($query);
        $allDowntownFirstFloorAptPhotosArray = $queryAllDowntownFirstFloorAptPhotos->fetchAll();
        return $allDowntownFirstFloorAptPhotosArray;
    }

                /**
     * get all 2nd Floor photos from apartmentPhotos table 
     *
     * @return array
     */
    public function getDowntownSecondFloorApt(): array 
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `apartmentPhotos` WHERE `id_apartment` = '3' ORDER BY `id` ASC";
        $queryAllDowntownSecondFloorAptPhotos = $bdd->query($query);
        $allDowntownSecondFloorAptPhotosArray = $queryAllDowntownSecondFloorAptPhotos->fetchAll();
        return $allDowntownSecondFloorAptPhotosArray;
    }

                    /**
     * get all 3rd Floor photos from apartmentPhotos table 
     *
     * @return array
     */
    public function getDowntownThirdFloorApt(): array 
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `apartmentPhotos` WHERE `id_apartment` = '4' ORDER BY `id` ASC";
        $queryAllDowntownThirdFloorAptPhotos = $bdd->query($query);
        $allDowntownThirdFloorAptPhotosArray = $queryAllDowntownThirdFloorAptPhotos->fetchAll();
        return $allDowntownThirdFloorAptPhotosArray;
    }

                /**
     * get all 1st Floor photos from University apartmentPhotos table 
     *
     * @return array
     */
    public function getUniversityFirstFloorApt(): array 
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `apartmentPhotos` WHERE `id_apartment` = '5' ORDER BY `id` ASC";
        $queryAllUniversityFirstFloorAptPhotos = $bdd->query($query);
        $allUniversityFirstFloorAptArray = $queryAllUniversityFirstFloorAptPhotos->fetchAll();
        return $allUniversityFirstFloorAptArray;
    }
}