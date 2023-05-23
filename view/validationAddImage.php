<?php

session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('location:/');
} else {
    require_once 'models/addImage.php';
    addImage();
?>

<div class="conteneurParent">
    <div class="validation">
        <p>L'image a bien été intégrée dans la galerie.</p>
    </div>
    <div class="conteneurLien">
        <div class="validationLink">
            <p><a href='/'>Page principale</a></p>
        </div>
        <div class="validationLink">
            <p><a href='office'>Panneau d'administration</a></p>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require 'view/layout.php';
}
?>