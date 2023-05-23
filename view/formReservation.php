<?php

  session_start();

  if (isset($_SESSION['role']) && $_SESSION['role'] === 'customer') {
    require_once 'models/reservationConnected.php';
    if (!isset($recupData['allergie'])) {
      $recupData['allergie'] = [];
  }
  }
  ob_start();  

?>

<h3 class="titleformulaire">Réservez votre moment</h3>

<div class="formContainer">
  <form method="POST" action="reservationTime">
    <fieldset>
      <label for ="civility">Civilité :</label>
      <select id="civility" name="civility">
          <option value="">Choisissez </option>
          <option value="M." <?php echo isset($recupData) && ($recupData['civility'] === 'M.') ? 'selected' : ''; ?>>M.</option>
          <option value="Mme" <?php echo isset($recupData) && ($recupData['civility'] === 'Mme') ? 'selected' : ''; ?>>Mme</option>
          <option value ="Mx" <?php echo isset($recupData) && ($recupData['civility'] === 'Mx') ? 'selected' : ''; ?>>Mx</option>
      </select> <br/>

      <label for="username">Nom :</label>
      <input type="text" id="username" name="username" value="<?php echo isset($recupData['name']) ? $recupData['name'] : ''; ?>"><br>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" value="<?php echo isset($recupData['email']) ? $recupData['email'] : ''; ?>"><br>

      <label for="telNumber">Numéro de téléphone :</label>
      <input type="number" id="telNumber" name="telNumber" value="<?php echo isset($recupData['telNumber']) ? $recupData['telNumber'] : ''; ?>"><br>

      <label for="guestNumber">Numéro d'invités :</label>
      <input type="number" id="guestNumber" name="guestNumber" min="1" max="9" value ="<?php echo isset($recupData['guestNumber']) ? $recupData['guestNumber'] : ''; ?>"><br>

      <label for="allergie[]">Vos allergies :</label>
      <div class="checkbox">
        <div class="allergieLine">
          <input type="checkbox" id="Céleri" name="allergie[]" value="Céleri"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Céleri', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Céleri">Céleri</label>
      </div>

        <div class="allergieLine">
          <input type="checkbox" id="Céréales" name="allergie[]" value="Céréales"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Céréales', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Céréales">Céréales</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Crustacé" name="allergie[]" value="Crustacé"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Crustacé', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Crustacé">Crustacé</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Oeuf" name="allergie[]" value="Oeuf"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Oeuf', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Oeuf">Oeuf</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Poisson " name="allergie[]" value="Poisson"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Poisson', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Poisson">Poisson</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Lupin " name="allergie[]" value="Lupin"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Lupin', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Lupin">Lupin</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Arachide" name="allergie[]" value="Arachide"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Arachide', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Arachide">Arachide</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Soja" name="allergie[]" value="Soja"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Soja', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Soja">Soja</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Lait" name="allergie[]" value="Lait"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Lait', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Lait">Lait</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Mollusque" name="allergie[]" value="Mollusque"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Mollusque', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Mollusque">Mollusque</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Moutarde" name="allergie[]" value="Moutarde"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Moutarde', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Moutarde">Moutarde</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Fruits à coque" name="allergie[]" value="Fruits à coque"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Fruits à coque', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Fruits à coque">Fruits à coque</label>
        </div>

        <div class="allergieLine">
          <input type="checkbox" id="Graines de sésame" name="allergie[]" value="Graines de sésame"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Graines de sésame', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Graines de sésame">Graines de sésame</label>
        </div>
        
        <div class="allergieLine">
          <input type="checkbox" id="Anhydride sulfureux et sulfites" name="allergie[]" value="Anhydride sulfureux et sulfites"
          <?php echo (isset($_SESSION['role']) && $_SESSION['role'] === 'customer' && in_array('Anhydride sulfureux et sulfites', $recupData['allergie'])) ? 'checked' : ''; ?>>
          <label for="Anhydride sulfureux et sulfites">Anhydride sulfureux et sulfites</label>
        </div>

    <div id="scheduleReservation">

      <?php
        $datenow = date('Y-m-d');
      ?>
      <label for="dateSchedule">Jour de la réservation :</label>
      <input type="date" id="dateSchedule" min="<?$datenow?>" name="dateSchedule"><br>

      <input type="submit" value="Envoyer" name="envoiReservation">
    </fieldset>
  </form>
</div>

<?php
  $content = ob_get_clean ();
  require 'view/layout.php';
?>