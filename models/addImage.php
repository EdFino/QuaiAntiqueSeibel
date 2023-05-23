<?php

function addImage () {

    if (isset($_FILES['photo'])) {
        if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
            echo 'Erreur de téléchargement';
        }

        elseif ($_FILES['photo']['size'] > 3000000) {
            echo 'La photo est trop grosse.';

        } else {
            $filename = uniqid();
            $infos = pathinfo($_FILES['photo']['name']);
            move_uploaded_file($_FILES['photo']['tmp_name'], 'view/images/' . $filename . '.' . $infos['extension']);
        }
    }
}