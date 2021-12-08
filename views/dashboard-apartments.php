<?php
session_start();

if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
    header('Location: login.php');
}

?>
<?php require("../models/database.php"); ?>
<?php require("../controllers/apartments-controller.php"); ?>

<?php include '../includes/dashboard_header.php'; ?>
<?php include '../includes/dashboard_nav.php'; ?>


<div class="mainContent">

    <div class="row dashBoardmain d-flex justify-content-center mb-3">

        <div class="col-4 d-flex justify-content-center text-wrap mb-3">
            <a href="add-apartment.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Ajouter un appartement</a>
        </div>
        <div class="col-4 d-flex justify-content-center text-wrap mb-3">
            <a href="add-image.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Téléverser une photo</a>
        </div>
        <div class="col-4 d-flex justify-content-center text-wrap mb-3">
            <a href="apartment-photos.php" class="btn btn-primary"><i class="bi bi-image"></i> Voir les photos</a>
        </div>


        <div class="col-lg-11 col-xs-12 mt-2 mb-3">
            <h1 class="taglineDashboard mb-5"><i class="fs-3 far fa-building"></i> Vos appartements</h1>
            <div class="row m-3 d-flex justify-content-evenly">
                <?php
                foreach ($allApartments as $apartments) { ?>
                    <div class="col-lg-5 col-sm-12 dashboardAppartmentListing mb-4">
                        <img src="<?= $apartments['mainPhoto'] ?>" class="aptImg" alt="Photo RDC">
                        <div>
                            <p class="aptTitle text-center pt-4 pb-3">Appartement <?= $apartments['type'] ?> - <?= $apartments['floor'] ?></p>
                            <div class="row ms-2 me-2 pb-3">
                                <div class="aptDescription col-lg-12 col-sm-12">
                                    <p><span class="aptDescCat">Superficie : </span><?= $apartments['squareFootage'] ?>m²</p>
                                    <p><span class="aptDescCat">Chauffage : </span><?= $apartments['heatSystem'] ?></p>
                                    <p><span class="aptDescCat">Loyer mensuel : </span><?= $apartments['monthlyRent'] ?>€</p>
                                    <p><span class="aptDescCat">Charges : </span><?= $apartments['services'] ?>€ (eau chaude et froide, EDF, chauffage, entretien de
                                        la chaudière)</p>
                                    <p class="loyer"><?= $apartments['totalRent'] ?>€ TOUT COMPRIS</p>
                                    <a href="modify-apartment.php?idApartment=<?= $apartments['id'] ?>" class="btn btn-outline-success"><i class="far fa-edit"></i> Modifier</a>
                                    <div class="btn btn-outline-danger deletebtn" id="deletebtn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-apartment-id="<?= $apartments['id'] ?>"><i class="far fa-trash-alt"></i> Supprimer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
        <div class="modal fade" id="deleteModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="bi bi-exclamation-triangle-fill"></i> Suppression d'un appartement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p><b>Êtes-vous sûr de vouloir supprimer cet appartement ?</b></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn btn-outline-dark" data-bs-dismiss="modal">Annuler</button>
                        <form action="" method="POST">
                            <!-- <input type="hidden" id="apartmentId" name="apartmentId"> -->
                            <button id="deleteApartment" name="deleteApartment" type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-center text-wrap mt-3">
            <a href="dashboard.php" class="btn btn-primary">Accueil</a>
        </div>

    </div>
    <?php include "../includes/dashboard_footer.php"; ?>