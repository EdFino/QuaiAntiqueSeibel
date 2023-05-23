<?php

function deleteImage () {

    if (isset($_POST['name'])) {
        $pathdelete = 'view/images/' . $_POST['name'];
        if (!unlink($pathdelete)) {
            echo "Erreur lors de la suppression du fichier";
        } else {
        }
    }
}