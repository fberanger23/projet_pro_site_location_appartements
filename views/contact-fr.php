<?php require("../models/database.php"); ?>
<?php require("../controllers/contact-controller.php"); ?>

<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>

        <h1><i class="bi bi-envelope"></i> Contactez-nous</h1>
        <p class="text-center">Complétez le formulaire ci-dessous et nous reviendrons vers vous dans les plus brefs délais</p>
        <p class="text-center pb-3"><i class="fas fa-exclamation-triangle"></i> Agences s'abstenir</p>

        <div class="appartmentListing aptForm">
            <form method="POST">
                <div class="m-3">
                    <label for="lastname" class="form-label fw-bold">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" pattern="^[A-Za-z '-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$" maxlengh="25" placeholder="ex. Dupont" required>
                </div>
    
                <div class="m-3">
                    <label for="firstname" class="form-label fw-bold">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname" pattern="^[A-Za-z '-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$" maxlengh="25" placeholder="ex. Jean" required>
                </div>
    
                <div class="m-3">
                    <label for="phoneNumber" class="form-label fw-bold">Numéro de téléphone</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumber" maxlength="10" placeholder="ex. 0614XXXXXX">
                </div>
    
                <div class="m-3">
                    <label for="email" class="form-label fw-bold">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="email" placeholder="ex. mail@mail.fr" pattern="^[A-Za-z.]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" required>
                </div>
    
                    <div class="m-3">
                        <label for="textArea" class="form-label fw-bold">Votre message :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message"></textarea>
                    </div>
    
                <button type="submit" name="submitMessage" class="btn btn-primary ms-3 mt-3 mb-3">Envoyer</button>
                <button type="reset" class="btn btn-outline-danger" onclick="javascript:history.back()">Annuler</button>
            </form>
            </div>

        <p class="text-center">Pour prendre rendez-vous cliquez ici :</p>
        <div class="d-flex justify-content-center"><a class="btn btn-primary aptBtn" href="appointment-fr.php" role="button">Prendre rendez-vous</a></div>

<?php include("../includes/footer.php"); ?>
