<?php 
session_start();
ob_start();
if (isset($_SESSION['role'])) {
  echo 'Vous êtes bien connectés.';
} else {
  verifConnexion ();
?>

<h3 class="titleformulaire">Connexion à votre espace client</h3>

<div class='formContainer'>
  <form method="POST">
    <h5 class="formulaire">Veuillez entrer votre identifiant et votre mot de passe</h5>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email"><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password"><br>

    <input type="submit" value="Envoyer" name="envoi">

    <p>Vous n'avez pas de compte ?</br>
    Souhaitez-vous vous <a href='inscription'>inscrire ?</a></p>
  </form>
</div>

<?php
}

  $content = ob_get_clean ();
  require 'view/layout.php';
?>