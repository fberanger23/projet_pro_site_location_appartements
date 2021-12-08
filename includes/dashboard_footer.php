
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../assets/js/main.js"></script>
<script>
    if (<?= $addSuccess ?>) {
        Swal.fire({
            icon: 'success',
            title: 'Parfait !',
            text: "L'appartement a bien été rajouté !",
            confirmButtonColor: '#715a8c'
        }).then(function() {
            window.location = "dashboard-apartments.php";
        });
    };
</script>

<script>
    if (<?= $addPhotoSuccess ?>) {
        Swal.fire({
            icon: 'success',
            title: 'Parfait !',
            text: "La photo a bien été téléversée !",
            confirmButtonColor: '#715a8c'
        }).then(function() {
            window.location = "dashboard-apartments.php";
        });
    };
</script>

<script>
    if (<?= $modifySuccess ?>) {
        Swal.fire({
            icon: 'success',
            title: 'Bravo !',
            text: "L'appartement a bien été modifié !",
            confirmButtonColor: '#715a8c'
        }).then(function() {
            window.location = "dashboard-apartments.php";
        });
    };
</script>

<script>
    if (<?= $modifyAppointmentSuccess ?>) {
        Swal.fire({
            icon: 'success',
            title: 'Good !',
            text: "Le rendez-vous a bien été modifié !",
            confirmButtonColor: '#715a8c'
        }).then(function() {
            window.location = "dashboard-appointments.php";
        });
    };
</script>

<script>
     if (<?= $deleteSuccess ?>) {
         Swal.fire({
             icon: 'success',
             title: 'Fantastique !',
             text: "L'appartement a bien été supprimé !",
             confirmButtonColor: '#715a8c'
         }).then(function() {
             window.location = "dashboard-apartments.php";
         });
     };

    // mise en place d'un array regroupant tous les boutons de la classe .deletebtn
    const trashButtonsArray = document.querySelectorAll('[data-apartment-id]')
    // on ajoute un écouteur d'événement sur chaque bouton au click
    trashButtonsArray.forEach(element => {
        element.addEventListener('click', function() {
            // on recupere la valeur du data pour l'inserer dans la value du button correspondant
            document.getElementById('deleteApartment').value = this.dataset.apartmentId
        })
    });
</script>

<script>
     if (<?= $deleteAppointmentSuccess ?>) {
         Swal.fire({
             icon: 'success',
             title: 'Fantastique !',
             text: "Le rendez-vous a bien été supprimé !",
             confirmButtonColor: '#715a8c'
         }).then(function() {
             window.location = "dashboard-appointments.php";
         });
     };

    // mise en place d'un array regroupant tous les boutons de la classe .deletebtn
    const deleteButtonsArray = document.querySelectorAll('[data-appointment-id]')
    // on ajoute un écouteur d'événement sur chaque bouton au click
    deleteButtonsArray.forEach(element => {
        element.addEventListener('click', function() {
            // on recupere la valeur du data pour l'inserer dans la value du button correspondant
            document.getElementById('deleteAppointment').value = this.dataset.appointmentId
        })
    });
</script>

<script>
     if (<?= $deletePhotoSuccess ?>) {
         Swal.fire({
             icon: 'success',
             title: 'Bravo !',
             text: "La photo a bien été supprimée !",
             confirmButtonColor: '#715a8c'
         }).then(function() {
             window.location = "apartment-photos.php";
         });
     };

    // mise en place d'un array regroupant tous les boutons de la classe .deletebtn
    const delButtonsArray = document.querySelectorAll('[data-photo-id]')
    // on ajoute un écouteur d'événement sur chaque bouton au click
    delButtonsArray.forEach(element => {
        element.addEventListener('click', function() {
            // on recupere la valeur du data pour l'inserer dans la value du button correspondant
            document.getElementById('deletePhoto').value = this.dataset.photoId
        })
    });
</script>

<script>
     if (<?= $deleteMessageSuccess ?>) {
         Swal.fire({
             icon: 'success',
             title: 'Super !',
             text: "Le message a bien été supprimé !",
             confirmButtonColor: '#715a8c'
         }).then(function() {
             window.location = "dashboard-messages.php";
         });
     };

    // mise en place d'un array regroupant tous les boutons de la classe .deletebtn
    const binButtonsArray = document.querySelectorAll('[data-message-id]')
    // on ajoute un écouteur d'événement sur chaque bouton au click
    binButtonsArray.forEach(element => {
        element.addEventListener('click', function() {
            // on recupere la valeur du data pour l'inserer dans la value du button correspondant
            document.getElementById('deleteMessage').value = this.dataset.messageId
        })
    });
</script>
</body>

</html>