<?php
session_start();

if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
    header('Location: login.php');
}

?>
<?php require("../models/database.php"); ?>
<?php require("../controllers/apartments-controller.php"); ?>
<?php require "../controllers/image-upload-controller.php"; ?>

<?php include "../includes/dashboard_header.php"; ?>
<?php include "../includes/dashboard_nav.php"; ?>


<div class="mainContent">

    <div class="row dashBoardmain d-flex justify-content-center">
        <div class="row d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center text-wrap mb-3">
                <a href="dashboard-apartments.php" class="btn btn-primary m-1">Retour à la liste d'appartements</a>
                <a href="apartment-photos.php" class="btn btn-primary m-1">Voir les photos</a>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mb-3">
        <div class="col-lg-5 col-sm-11 text-center text-wrap neumorphismBordercards mt-2 mb-3">
            <p class="taglineDashboard"><i class="fas fa-file-upload"></i> Téléverser la photo de l'appartement</p>
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="file" class="form-label">Veuillez choisir une image :</label>
                <img id="imgPreview">
                <div class="input-group">
                    <input type="file" class="form-control" id="fileToUpload" aria-describedby="fileToUpload" name="fileToUpload[]" aria-label="Upload" multiple>
                </div>
                <span class="form-text text-danger"><i class="bi bi-exclamation-triangle"></i> Attention taille limite de 9 Mo</span>
                <div class="m-3">
                    <label for="apartmentid" class="form-label fw-bold">Veuillez choisir un appartement</label>
                    <select name="id" class="form-select" aria-label="Default select example" required>
                        <option selected>Choix de l'appartement</option>
                        <?php foreach ($allApartments as $apartments) {
                        ?>
                            <option value="<?= $apartments['id'] ?>"><?= $apartments['neighborhood'] ?> - <?= $apartments['type'] ?> - <?= $apartments['floor'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="m-3">
                    <label for="altText" class="form-label fw-bold">Texte alternatif des images</label>
                    <input type="text" class="form-control" id="altText" name="altText" aria-describedby="altText" pattern="^[A-Za-z '-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$" placeholder="ex. Quartier Université 1er étage Cuisine" required>
                </div>
                <button class="btn btn-primary mb-3" type="submit" id="uploadImg" name="uploadImg"><i class="fas fa-upload"></i> UPLOAD</button>
            </form>
        </div>
    </div>

    <div class="col-12 d-flex justify-content-center text-wrap mt-3">
        <a href="dashboard.php" class="btn btn-primary">Accueil</a>
    </div>

</div>
<?php include "../includes/dashboard_footer.php"; ?>