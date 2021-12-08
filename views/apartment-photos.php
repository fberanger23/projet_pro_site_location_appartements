<?php
session_start();

if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
    header('Location: login.php');
}

?>
<?php require("../models/database.php"); ?>
<?php require("../controllers/image-upload-controller.php"); ?>

<?php include '../includes/dashboard_header.php'; ?>
<?php include '../includes/dashboard_nav.php'; ?>


<div class="mainContent">

    <div class="row dashBoardmain d-flex justify-content-center mb-3">

        <div class="col-12 d-flex justify-content-center text-wrap mb-3">
            <a href="dashboard-apartments.php" class="btn btn-primary m-2">Retour à la liste d'appartements</a>
            <a href="add-image.php" class="btn btn-primary m-2"><i class="bi bi-plus-circle"></i> Ajouter une photo</a>
        </div>


        <div class="row d-flex justify-content-center pb-5 mt-2 mb-3" data-masonry='{"percentPosition": true }'>
            <div class="row d-flex justify-content-center">
                <?php
                foreach ($allPhotos as $photos) { ?>
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <img src="<?= $photos['path'] ?>" class="img-fluid appartmentPhotos" alt="<?= $photos['altText'] ?>">
                        <p class="text-center fw-bold">Nom de l'image :</p><p class="text-center"><?= $photos['name'] ?></p>
                        <div class="row pb-3 d-flex justify-content-center">
                            <div class="col-xl-12 col-lg-12 col-sm-12 d-flex justify-content-center">
                                <div class="btn btn-outline-danger deletebtn" id="deletebtn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-photo-id="<?= $photos['id'] ?>"><i class="far fa-trash-alt"></i> Supprimer</div>
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
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="bi bi-exclamation-triangle-fill"></i> Suppression d'une photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p><b>Êtes-vous sûr de vouloir supprimer cette photo ?</b></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn btn-outline-dark" data-bs-dismiss="modal">Annuler</button>
                        <form action="" method="POST">
                            <!-- <input type="hidden" id="photoId" name="photoId"> -->
                            <button id="deletePhoto" name="deletePhoto" type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-5 d-flex justify-content-center text-wrap mt-3">
            <a href="dashboard.php" class="btn btn-primary">Accueil</a>
        </div>

    </div>
    <?php include "../includes/dashboard_footer.php"; ?>