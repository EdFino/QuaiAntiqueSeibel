<?php
    session_start();
    require_once 'models/finalizeReservation.php';
    finalizeReservation();
?>

<div class="conteneurParent">
    <div class="validation">
        <p>Votre table est réservée.</br>
        Nous vous remercions et avons hâte de vous accueillir.</p>
    </div>
    <div class="conteneurLien">
        <div class="validationLink">
            <a href='/'>Voir la page principale du site</a>
        </div>
        <div class="validationLink">
            <a href='office'>Retourner au panneau d'administration</a>
        </div>
    </div>
</div>

<?php 
    $content = ob_get_clean();
    require 'view/layout.php';
?>