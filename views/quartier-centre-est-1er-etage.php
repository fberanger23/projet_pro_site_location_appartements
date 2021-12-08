<?php require("../models/database.php") ?>
<?php require("../controllers/image-upload-controller.php"); ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>
<h1><i class="far fa-building"></i> Centre-Est</h1>
<p class="text-center">Appartement T1 meublé 24.62m² - 1er étage</p>
<div class="row pb-5" data-masonry='{"percentPosition": true }'>
    <?php
    foreach ($allDowntownFirstFloorPhotos as $photos) { ?>
        <div class="col-xl-3 col-lg-6 col-sm-12">
            <img src="<?= $photos['path'] ?>" class="img-fluid appartmentPhotos" alt="<?= $photos['altText'] ?>">
        </div>
    <?php } ?>
</div>

<p class="text-center aptTitle pb-2">Constitution de l'appartement :</p>
<div class="table-responsive pb-5">
    <table class="table text-center">
        <thead class="table-light">
            <tr>
                <th scope="col">Pièce principale</th>
                <th scope="col">Cuisine aménagée</th>
                <th scope="col">Salle de bain</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lumineuse (exposition ouest)</td>
                <td>Lumineuse (soleil le matin)</td>
                <td>Carrelée murs et sol</td>
            </tr>
            <tr>
                <td>Lit 120 X 190</td>
                <td>Hotte aspirante</td>
                <td>Lavabo</td>
            </tr>
            <tr>
                <td>Bureau avec chaise et lampe</td>
                <td>Plaques à induction</td>
                <td>Douche avec cabine</td>
            </tr>
            <tr>
                <td>Fauteuil</td>
                <td>Congélateur/réfrigérateur</td>
                <td>Toilettes</td>
            </tr>
            <tr>
                <td>TV</td>
                <td>Four micro-ondes</td>
                <td></td>
            </tr>
            <tr>
                <td>Placard</td>
                <td>Plan snack</td>
                <td></td>
            </tr>
            <tr>
                <td>Fenêtres PVC doubles vitrages</td>
                <td>Tabourets</td>
                <td></td>
            </tr>
            <tr>
                <td>Volets roulants</td>
                <td>Vaiselle, cafetière</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="about">
    <p><span class="aptDescCat">Chauffage :</span> collectif au gaz avec chaudière à condensation récente (contrat
        d’entretien inclus dans les charges).</p>
    <p><span class="aptDescCat">Loyer mensuel :</span> 400€</p>
    <p><span class="aptDescCat">Charges mensuelles :</span> 19 euros (provision taxe ordures ménagères, entretien parties
        communes)</p>
    <p><span class="aptDescCat">Avance sur consommation :</span> 66 euros (Eau chaude et froide, Edf, chauffage au gaz,
        contrat entretien de la chaudière gaz, minuterie) </p>
    <p><span class="aptDescCat">Dépôt de garantie :</span> 400 euros</p>
    <p><span class="aptDescCat">Caution ménage :</span> 150 euros</p>
    <p class="aptDescCat pb-3">Garant demandé</p>
    <p class="loyer">485€ CHARGES COMPRISE</p>
</div>
<div class="d-flex justify-content-center"><a class="btn btn-primary aptBtn" href="appointment-fr.php" role="button">Prendre rendez-vous</a></div>
<?php include("../includes/footer.php"); ?>