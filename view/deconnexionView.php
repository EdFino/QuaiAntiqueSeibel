<?php
session_start();
ob_start();
require 'models/deconnexion.php';
deconnect ();
?>

<div class="conteneurParent">
    <div class="conteneurLien">
        <a href='/'>
        <div class="validationLink">
            <p> Vous avez été bien déconnecté !</p>
            <p>Retour à la page d'accueil</p>
        </div>
        </a>
    </div>
</div>

<?php 
    $content = ob_get_clean();
    require 'view/layout.php';
?>