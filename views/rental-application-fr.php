<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>
        <h1><i class="bi bi-folder"></i> Dossier de location</h1>
        <p class="tagline">Documents à fournir impérativement</p>
        <div class="d-flex row pt-5 pb-5 justify-content-evenly">
            <div class="col-lg-5 col-sm-12 appartmentListing">
                <div>
                    <p class="applicationTitle text-center pt-4 pb-3">Par le locataire</p>
                    <div class="row ms-2 me-2">
                        <div class="aptDescription">
                            <ul>
                                <li>Carte d'identité recto/verso (à défaut permis de conduire ou passeport), copie du
                                    livret de famille, copie recto/verso de la carte de séjour</li>
                                <li>Étudiant : Carte d'étudiant recto/verso</li>
                                <li>Salarié : trois derniers bulletins de salaire ou attestation employeur (si embauche
                                    récente) indiquant la qualité du contrat de travail (CDD indiquant la durée, CDI,
                                    etc.)</li>
                                <li>Commerçants/indépendants/professions libérales : 2 derniers avis d'imposition sur le
                                    revenu et un extrait KBIS ayant moins de trois mois</li>
                                <p>Si locataire : les trois dernières quittances de loyer ainsi que la première page du
                                    bail.</p>
                                <p>Si propriétaire : taxe foncière</p>
                                <li>Relevé d'identité bancaire</li>
                                <li>Attestation d'assurances du logement datée du jour de l'entrée dans les lieux</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-sm-12 appartmentListing">
                <div>
                    <p class="applicationTitle text-center pt-4 pb-3">Par le garant</p>
                    <div class="row ms-2 me-2">
                        <div class="aptDescription">
                            <ul>
                                <li>Carte d'identité recto/verso (à défaut permis de conduire ou passeport), copie du
                                    livret de famille, copie recto/verso de la carte de séjour</li>
                                <li>Salarié : trois derniers bulletins de salaire ou attestation employeur (si embauche
                                    récente) indiquant la qualité du contrat de travail (CDD indiquant la durée, CDI,
                                    etc.)</li>
                                <li>Commerçants/indépendants/professions libérales : 2 derniers avis d'imposition sur le
                                    revenu et un extrait KBIS ayant moins de trois mois</li>
                                <p>Si locataire : les trois dernières quittances de loyer ainsi que la première page du
                                    bail.</p>
                                <p>Si propriétaire : taxe foncière</p>
                                <li>Relevé d'identité bancaire</li>
                                <li>L'acte de caution solidaire rempli et signé</li>
                                <li>Le contract de location rempli et signé</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <p class="tagline">Téléversez vos justificatifs</p>

            <div class="col-lg-5 col-sm-12 module_border">
                <div>
                    <div class="row ms-2 me-2">
                        <form action="rental_application.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3 ps-3 pt-3">
                                <label for="file" class="form-label">Veuillez choisir un fichier :</label>
                                <img id="imgPreview">
                                <p><input type="file" name="fileToUpload" id="fileToUpload">
                                    <p>
                                        <button class="btn btn-primary uploadBtn" type="submit">
                                            <span><i class="fas fa-upload"></i></span> TÉLÉVERSER
                                        </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php include("../includes/footer.php"); ?>
