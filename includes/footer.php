<hr>
    <footer>
        <div class="row pb-3 pt-3">
          <div class="d-flex justify-content-center pb-3"><img src="../assets/img/logo/newlogo.png" alt="" width="auto"
              height="50"></div>
        </div>
        <div class="row pb-3">
          <p class="text-center">Le site internet 2Fimmobilier est un site de location d'appartements meublés sur Le Havre d'un particulier.</p>
        </div>
        <div class="row pb-1">
          <div class="d-flex justify-content-center">
              <div class="col text-center">
                  <a href="index-fr.php#centre-est">Centre-Est</a>
              </div>
              <div class="col text-center">
                  <a href="index-fr.php#universite">Université</a>
              </div>
              <div class="col text-center">
                  <a href="rental-application-fr.php">Dossier de location</a>
              </div>
              <div class="col text-center">
                  <a href="appointment-fr.php">Prendre rdv</a>
              </div>
              <div class="col text-center">
                  <a href="contact-fr.php">Contact</a>
              </div>
          </div>
      </div>
        <hr>
        <div class="row pt-1">
          <p class="text-center">2Fimmobilier © 2021</p>
        </div>
        <div class="row">
          <p class="text-center"><a href="mentions-legales.php">Mentions légales</a> - tous droits réservés</p>
        </div>
        <div class="row pb-3">
          <p class="text-center">Réalisé par Franck Béranger</p>
        </div>
    </footer>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/main.js"></script>
    <script>
    if (<?= $addAppointmentSuccess ?>) {
        Swal.fire({
            icon: 'success',
            title: 'Merci !',
            text: "Le rendez-vous a bien été enregistré !",
            confirmButtonColor: '#715a8c'
        }).then(function() {
            window.location = "index-fr.php";
        });
    };
</script>

<script>
    if (<?= $addMessageSuccess ?>) {
        Swal.fire({
            icon: 'success',
            title: 'Merci !',
            text: "Le message a bien été envoyé !",
            confirmButtonColor: '#715a8c'
        }).then(function() {
            window.location = "index-fr.php";
        });
    };
</script>
</body>

</html>