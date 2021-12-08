<?php

class Apartments extends Database
{
    /**
     * Add new apartment in apartment table
     *
     * @param string $mainPhoto : main photo for the apartment ...
     * @param string $type
     * @param string $floor
     * @param string $neighborhood
     * @param string $squareFootage
     * @param string $heatSystem
     * @param string $monthlyRent
     * @param string $services
     * @param string $totalRent
     * @param string $vacant
     * @param string $apartmentLink
     * @return void
     */
    public function addApartment(string $mainPhoto, string $type, string $floor, string $neighborhood, string $squareFootage, string $heatSystem, string $monthlyRent, string $services, string $totalRent, string $vacant, string $apartmentLink): void
    {
        $bdd = $this->connectDatabase();
        $req = $bdd->prepare("INSERT INTO `apartment`(`mainPhoto`, `type`, `floor`, `neighborhood`, `squareFootage`, `heatSystem`, `monthlyRent`, `services`, `totalRent`, `vacant`, `apartmentLink`) VALUES(:mainPhoto, :type, :floor, :neighborhood, :squareFootage, :heatSystem, :monthlyRent, :services, :totalRent, :vacant, :apartmentLink)");
        $req->bindValue(':mainPhoto', $mainPhoto, PDO::PARAM_STR);
        $req->bindValue(':type', $type, PDO::PARAM_STR);
        $req->bindValue(':floor', $floor, PDO::PARAM_STR);
        $req->bindValue(':neighborhood', $neighborhood, PDO::PARAM_STR);
        $req->bindValue(':squareFootage', $squareFootage, PDO::PARAM_STR);
        $req->bindValue(':heatSystem', $heatSystem, PDO::PARAM_STR);
        $req->bindValue(':monthlyRent', $monthlyRent, PDO::PARAM_STR);
        $req->bindValue(':services', $services, PDO::PARAM_STR);
        $req->bindValue(':totalRent', $totalRent, PDO::PARAM_STR);
        $req->bindValue(':vacant', $vacant, PDO::PARAM_STR);
        $req->bindValue(':apartmentLink', $apartmentLink, PDO::PARAM_STR);
        $req->execute();
    }

    /**
     * get all apartments from apartment table 
     *
     * @return array
     */
    public function getAllApartments(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `apartment` ORDER BY `id` ASC";
        $queryAllApartments = $bdd->query($query);
        $allApartmentsArray = $queryAllApartments->fetchAll();
        return $allApartmentsArray;
    }


    //  /**
    //  * get all apartments from a certain neighorhood in apartment table 
    //  *
    //  * @return array
    //  */
    public function getAllApartmentsPerUniversityNeighborhood(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT `apartment`.id, `mainPhoto`, `type`, `floor`, `neighborhood`, `squareFootage`, `heatSystem`, `monthlyRent`, `services`, `totalRent`, `apartmentLink`, `altText` FROM `apartment` LEFT JOIN proProject.apartmentPhotos ON `apartment`.mainPhoto = `apartmentPhotos`.path WHERE `neighborhood` = 'Quartier Université'";
        $queryAllUniversityApartments = $bdd->query($query);
        $allUniversityApartmentsArray = $queryAllUniversityApartments->fetchAll();
        return $allUniversityApartmentsArray;
    }

    /**
     * get all apartments from a certain neighorhood in apartment table 
     *
     * @return array
     */
    public function getAllApartmentsPerCentreEstNeighborhood(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT `apartment`.id, `mainPhoto`, `type`, `floor`, `neighborhood`, `squareFootage`, `heatSystem`, `monthlyRent`, `services`, `totalRent`, `apartmentLink`, `altText` FROM `apartment` LEFT JOIN proProject.apartmentPhotos ON `apartment`.mainPhoto = `apartmentPhotos`.path WHERE `neighborhood` = 'Quartier Centre-Est'";
        $queryAllCentreEstApartments = $bdd->query($query);
        $allCentreEstApartmentsArray = $queryAllCentreEstApartments->fetchAll();
        return $allCentreEstApartmentsArray;
    }

    /**
     * get one apartment from apartment table 
     *
     * @return array
     */
    public function getOneApartment(string $idApartment): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `apartment` WHERE `id` = :idApartment";
        $queryOneApartment = $bdd->prepare($query);
        $queryOneApartment->bindValue(':idApartment', $idApartment, PDO::PARAM_STR);
        $queryOneApartment->execute();
        $oneApartmentArray = $queryOneApartment->fetch();
        return $oneApartmentArray;
    }
    /**
     * Modify one apartment in apartment table
     *
     * @param string $mainPhoto : main photo for the apartment ...
     * @param string $type
     * @param string $floor
     * @param string $neighborhood
     * @param string $squareFootage
     * @param string $heatSystem
     * @param string $monthlyRent
     * @param string $services
     * @param string $totalRent
     * @param string $vacant
     * @param string $apartmentLink
     * @param string $id
     * @return void
     */
    public function modifyApartment($mainPhoto, $type, $floor, $neighborhood, $squareFootage, $heatSystem, $monthlyRent, $services, $totalRent, $vacant, $apartmentLink, $id): void
    {
        $bdd = $this->connectDatabase();
        $req = $bdd->prepare("UPDATE `apartment` SET `mainPhoto` = :mainPhoto, `type` = :type, `floor` = :floor, `neighborhood` = :neighborhood, `squareFootage` = :squareFootage, `heatSystem` = :heatSystem, `monthlyRent` = :monthlyRent, `services` = :services, `totalRent` = :totalRent, `vacant` = :vacant, `apartmentLink` = :apartmentLink WHERE `id` = :idApartment");
        $req->bindValue(':mainPhoto', $mainPhoto, PDO::PARAM_STR);
        $req->bindValue(':type', $type, PDO::PARAM_STR);
        $req->bindValue(':floor', $floor, PDO::PARAM_STR);
        $req->bindValue(':neighborhood', $neighborhood, PDO::PARAM_STR);
        $req->bindValue(':squareFootage', $squareFootage, PDO::PARAM_STR);
        $req->bindValue(':heatSystem', $heatSystem, PDO::PARAM_STR);
        $req->bindValue(':monthlyRent', $monthlyRent, PDO::PARAM_STR);
        $req->bindValue(':services', $services, PDO::PARAM_STR);
        $req->bindValue(':totalRent', $totalRent, PDO::PARAM_STR);
        $req->bindValue(':vacant', $vacant, PDO::PARAM_STR);
        $req->bindValue(':apartmentLink', $apartmentLink, PDO::PARAM_STR);
        $req->bindValue(':idApartment', $id, PDO::PARAM_STR);
        $req->execute();
    }

    public function deleteApartment($idApartment): void
    {
        $bdd = $this->connectDatabase();
        $query = 'DELETE FROM `apartment` WHERE `id` = :idApartment';
        $queryOneApartment = $bdd->prepare($query);
        $queryOneApartment->bindValue(':idApartment', $idApartment, PDO::PARAM_STR);
        $queryOneApartment->execute();
    }

    /**
     * get rid of same information from apartment table 
     *
     * @return array
     */
    public function getDistinctInfo(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT DISTINCT `neighborhood`, `vacant` FROM `apartment`";
        $queryDistinctInfo = $bdd->query($query);
        $distinctInfoArray = $queryDistinctInfo->fetchAll();
        return $distinctInfoArray;
    }
}
