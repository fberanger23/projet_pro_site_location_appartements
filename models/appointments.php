<?php


class Appointments extends Database
{
    /**
     * Add a new appointment
     *
     * @param string $lastname
     * @param string $firstname
     * @param string $email
     * @param string $phoneNumber
     * @param string $date
     * @param string $idApartment
     * @return void
     */
    public function addAppointment(string $lastname, string $firstname, string $email, string $phoneNumber, string $dateHour, string $idApartment): void
    {
        $bdd = $this->connectDatabase();
        $req = $bdd->prepare("INSERT INTO `appointment`(`lastname`, `firstname`, `email`, `phoneNumber`, `date`, `id_apartment`) 
        VALUES(:lastname, :firstname, :email, :phoneNumber, :dateHour, :id_apartment)");
        $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
        $req->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
        $req->bindValue(':id_apartment', $idApartment, PDO::PARAM_STR);
        $req->execute();
    }

    /**
     * get all appointments from appointment table 
     *
     * @return array
     */
    public function getAllAppointments(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT `lastname`,`firstname`, `email`, `phoneNumber`, `date`, `neighborhood`, `floor`, `appointment`.id FROM `appointment` INNER JOIN `apartment` ON `appointment`.id_apartment = `apartment`.id ORDER BY `date` ASC";
        $queryAllAppointments = $bdd->query($query);
        $allAppointmentsArray = $queryAllAppointments->fetchAll();
        return $allAppointmentsArray;
    }
    /**
     * get one appointment from appointment table 
     *
     * @return array
     */
    public function getOneAppointment(string $idAppointment): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `appointment` WHERE `id` = :idAppointment";
        $queryOneAppointment = $bdd->prepare($query);
        $queryOneAppointment->bindValue(':idAppointment', $idAppointment, PDO::PARAM_STR);
        $queryOneAppointment->execute();
        $oneAppointmentArray = $queryOneAppointment->fetch();
        return $oneAppointmentArray;
    }
    /**
     * Modify an appointment
     *
     * @param string $lastname
     * @param string $firstname
     * @param string $email
     * @param string $phoneNumber
     * @param string $date
     * @param string $idApartment
     * @return void
     */
    public function modifyAppointment($lastname, $firstname, $email, $phoneNumber, $dateHour, $idApartment, $id): void
    {
        $bdd = $this->connectDatabase();
        $req = $bdd->prepare("UPDATE `appointment` SET `lastname` = :lastname, `firstname` = :firstname, `email` = :email, 
        `phoneNumber` = :phoneNumber, `date` = :dateHour, `id_apartment` = :id_apartment WHERE `id` = :idAppointment");
        $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
        $req->bindValue(':dateHour', $dateHour, PDO::PARAM_STR);
        $req->bindValue(':id_apartment', $idApartment, PDO::PARAM_STR);
        $req->bindValue(':idAppointment', $id, PDO::PARAM_STR);
        $req->execute();
    }

    /**
     * delete one appointment from appointment table 
     *
     * @return void
     */
    public function deleteAppointment($idAppointment): void
    {
        $bdd = $this->connectDatabase();
        $query = 'DELETE FROM `appointment` WHERE `id` = :idAppointment';
        $queryOneAppointment = $bdd->prepare($query);
        $queryOneAppointment->bindValue(':idAppointment', $idAppointment, PDO::PARAM_STR);
        $queryOneAppointment->execute();
    }

        /**
     * get five appointments from appointment table 
     *
     * @return array
     */
    public function getFourAppointments(): array
    {
        $bdd = $this->connectDatabase();
        $query = "SELECT * FROM `appointment` INNER JOIN `apartment` ON `appointment`.id_apartment = `apartment`.id ORDER BY `date` ASC LIMIT 4";
        $queryFourAppointments = $bdd->query($query);
        $fourAppointmentsArray = $queryFourAppointments->fetchAll();
        return $fourAppointmentsArray;
    }
}
