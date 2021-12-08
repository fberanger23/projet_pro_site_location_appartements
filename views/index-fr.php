<?php require("../models/database.php") ?>
<?php require("../controllers/apartments-controller.php"); ?>
<?php require("../controllers/appointments-controller.php"); ?>
<?php require("../controllers/contact-controller.php"); ?>
<?php require("../controllers/login-controller.php"); ?>

<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>
<p class="tagline">Location d'appartements meublés par un particulier - Le Havre</p>

<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/img/Caroussel LH/V2/plage.jpg" class="d-block w-100 rounded" alt="Plage">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/Caroussel LH/V2/cabanes.jpg" class="d-block w-100 rounded" alt="Cabanes">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/Caroussel LH/V2/containers.jpg" class="d-block w-100 rounded" alt="Containers">
    </div>
  </div>
</div>


<h1 id="centre-est"><i class="far fa-building"></i> Le Havre - Quartier Centre-Est</h1>
<div class="quartierPres text-wrap">
  <p class="pb-3">
    Particulier propose appartement meublé situé dans une petite copropriété calme. Stationnement
    gratuit. Appartement fibré.
    Idéal pour étudiant, déplacement professionnel (séjour minimum de 3 mois), ou stage.</p>
  <p class="pb-3">Proximité immédiate : </p>
  <ul>
    <li>Commerces (supermarché Champion, laverie, boulangerie, boucherie, etc.)</li>
    <li>Arrêt de bus : à 50 mètres la ligne 22 et dans la rue Aristide Briand la ligne 2</li>
    <li>À 5 minutes de l’école supérieure d’art et design Le Havre/Rouen(ESADHAR)</li>
    <li>À 15 minutes : Sciences Po, IUT (Quai Frissard), ISEL, ITIP, ENSM, Gare SNCF et gare routière,<br> Piscine
      municipale, Docks Océanes (salle de
      concert), Docks Vauban (centre commercial), Bowling, Cinéma</li>
    <li>À 20 minutes : Centre ville (Hôtel de ville)</li>
  </ul>
</div>

<div class="d-flex row pt-5 justify-content-evenly">
  <?php
  foreach ($allCentreEstApartments as $apartments) { ?>
    <div class="col-lg-5 col-sm-12 appartmentListing pb-4">
      <img src="<?= $apartments['mainPhoto'] ?>" class="aptImg" alt="<?= $apartments['altText'] ?>">
      <div>
        <p class="aptTitle text-center pt-4 pb-3">Appartement <?= $apartments['type'] ?> - <?= $apartments['floor'] ?></p>
        <div class="row ms-2 me-2">
          <div class="aptDescription col-lg-8 col-sm-12">
            <p><span class="aptDescCat">Superficie : </span><?= $apartments['squareFootage'] ?>m²</p>
            <p><span class="aptDescCat">Chauffage : </span><?= $apartments['heatSystem'] ?></p>
            <p><span class="aptDescCat">Loyer mensuel : </span><?= $apartments['monthlyRent'] ?>€</p>
            <p><span class="aptDescCat">Charges : </span><?= $apartments['services'] ?>€ (eau chaude et froide, EDF, chauffage, entretien de
              la chaudière)</p>
            <p class="loyer"><?= $apartments['totalRent'] ?>€ TOUT COMPRIS</p>
          </div>
          <div class="col-lg-4 col-sm-12 align-self-center text-center"><a href="<?= $apartments['apartmentLink'] ?>" class="infoBtn"><i class="fas fa-info-circle"></i></a>
            <p class="infos"><a href="<?= $apartments['apartmentLink'] ?>">+ d'infos</a></p>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

</div>

<h2 id="universite"><i class="far fa-building"></i> Le Havre - Quartier Université</h2>
<div class="d-flex row justify-content-evenly">
  <div class="col-lg-5 col-sm-12 text-wrap pb-5 align-self-center">
    <p class="pb-3">
      Particulier propose appartement meublé situé dans une petite copropriété calme. Appartement fibré.
      Idéal pour étudiant, déplacement professionnel (séjour minimum de 3 mois), ou stage.</p>
    <p class="pb-3">Proximité immédiate : </p>
    <ul>
      <li>À 5 minutes de l’école supérieure d’art et design Le Havre/Rouen(ESADHAR)</li>
      <li>À 10 minutes : Sciences Po, IUT (Quai Frissard), ISEL, ITIP, ENSM, Gare SNCF et gare routière,<br> Piscine
        municipale, Docks Océanes (salle de
        concert), Docks Vauban (centre commercial), Bowling, Cinéma</li>
      <li>À 10 minutes en tram : Centre ville (Hôtel de ville)</li>
      <li>À 15 minutes en tram : Plage du Havre</li>
    </ul>
  </div>

  <?php
  foreach ($allUniversityApartments as $apartments) { ?>
    <div class="col-lg-5 col-sm-12 appartmentListing pb-4">
      <img src="<?= $apartments['mainPhoto'] ?>" class="aptImg" alt="<?= $apartments['altText'] ?>">
      <div>
        <p class="aptTitle text-center pt-4 pb-3">Appartement <?= $apartments['type'] ?> - <?= $apartments['floor'] ?></p>
        <div class="row ms-2 me-2">
          <div class="aptDescription col-lg-8 col-sm-12">
            <p><span class="aptDescCat">Superficie : </span><?= $apartments['squareFootage'] ?>m²</p>
            <p><span class="aptDescCat">Chauffage : </span><?= $apartments['heatSystem'] ?></p>
            <p><span class="aptDescCat">Loyer mensuel : </span><?= $apartments['monthlyRent'] ?>€</p>
            <p><span class="aptDescCat">Charges : </span><?= $apartments['services'] ?>€ (taxe ordures ménagères, entretien parties
              communes, minuterie)</p>
            <p class="loyer"><?= $apartments['totalRent'] ?>€ CHARGES COMPRISES</p>
          </div>
          <div class="col-lg-4 col-sm-12 align-self-center text-center"><a href="<?= $apartments['apartmentLink'] ?>" class="infoBtn"><i class="fas fa-info-circle"></i></a>
            <p class="infos"><a href="<?= $apartments['apartmentLink'] ?>">+ d'infos</a></p>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

</div>

</div>
<?php include("../includes/footer.php"); ?>