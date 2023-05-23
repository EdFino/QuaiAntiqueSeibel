<?php
session_start();
ob_start();

if (isset($_SESSION['role'])) {
  echo 'Vous êtes bien connectés.';
} else {
?>

<h3 class="titleformulaire">Formulaire d'inscription</h3>

<div class='formContainer'>
  <form method="POST" action="validationView">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email"><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password"><br>

    <label for ="civility">Civilité :</label>
    <select id="civility" name="civility">
      <option value="">Choisissez </option>
      <option value="M.">M.</option>
      <option value="Mme">Mme</option>
      <option value ="Mx">Mx</option>
    </select> <br/>

    <label for="name">Nom :</label>
    <input type="text" id="name" name="name"><br>

    <label for="firstname">Prénom :</label>
    <input type="text" id="firstname" name="firstname"><br>

    <label for="telNumber">Numéro de téléphone :</label>
    <input type="number" id="telNumber" name="telNumber"><br>

    <label for="guestNumber">Nombre de couverts :</label>
    <input type="number" id="guestNumber" name="guestNumber" min="1" max="9"><br>

    <label for="allergie[]">Vos allergies :</label>
    <div class="checkbox">

      <div class="allergieLine">
        <label for="Céleri">Céleri</label>
        <input type="checkbox" id="Céleri" name="allergie[]" value="Céleri">
      </div>

      <div class="allergieLine">
        <label for="Céréales">Céréales</label>
        <input type="checkbox" id="Céréales" name="allergie[]" value="Céréales">
      </div>

      <div class="allergieLine">
        <label for="Crustacé">Crustacé</label>
        <input type="checkbox" id="Crustacé" name="allergie[]" value="Crustacé">
      </div>

      <div class="allergieLine">
        <label for="Oeuf">Oeuf</label>
        <input type="checkbox" id="Oeuf" name="allergie[]" value="Oeuf">
      </div>

      <div class="allergieLine">
        <label for="Poisson">Poisson</label>
        <input type="checkbox" id="Poisson " name="allergie[]" value="Poisson">
      </div>

      <div class="allergieLine">
        <label for="Lupin">Lupin</label>
        <input type="checkbox" id="Lupin " name="allergie[]" value="Lupin">
      </div>

      <div class="allergieLine">
        <label for="Arachide">Arachide</label>
        <input type="checkbox" id="Arachide" name="allergie[]" value="Arachide">
      </div>

      <div class="allergieLine">
        <label for="Soja">Soja</label>
        <input type="checkbox" id="Soja" name="allergie[]" value="Soja">
      </div>

      <div class="allergieLine">
        <label for="Lait">Lait</label>
        <input type="checkbox" id="Lait" name="allergie[]" value="Lait">
      </div>

      <div class="allergieLine">
        <label for="Mollusque">Mollusque</label>
        <input type="checkbox" id="Mollusque" name="allergie[]" value="Mollusque">
      </div>

      <div class="allergieLine">
        <label for="Moutarde">Moutarde</label>
        <input type="checkbox" id="Moutarde" name="allergie[]" value="Moutarde">
      </div>

      <div class="allergieLine">
        <label for="Fruits à coque">Fruits à coque </label>
        <input type="checkbox" id="Fruits à coque" name="allergie[]" value="Fruits à coque">
      </div>

      <div class="allergieLine">
        <label for="Graines de sésame">Graines de sésame</label>
        <input type="checkbox" id="Graines de sésame" name="allergie[]" value="Graines de sésame">
      </div>

      <div class="allergieLine">
        <label for="Anhydride sulfureux et sulfites">Anhydride sulfureux et sulfites</label>
        <input type="checkbox" id="Anhydride sulfureux et sulfites" name="allergie[]" value="Anhydride sulfureux et sulfites">
      </div>
    </div>
    <input type="submit" value="Envoyer" name="envoiInscription">
  </form>
</div>

<?php
  }
  $content = ob_get_clean ();
  require 'view/layout.php';
?>