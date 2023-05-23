<?php

session_start();
ob_start();

if (!isset($_SESSION['role']) || ($_SESSION['role'] !== 'admin')) {
    header('location:/');
} else {

  require_once 'models/viewSchedule.php';
  require_once 'models/displayReservation.php';

?>

<article>

  <h2>Panneau d'administration</h2>

  <button class="officeButton" id ="titleReservation"><h3> Les réservations de ce soir</h3></button>
  <div id ="tonightReservation" style="display:none;">
    <?php displayReservationOffice() ?>
  </div>

  <button class="officeButton" id ="titleFutureReservation"><h3>Les réservations à venir </h3></button>
  <div id ="futureReservation" style="display:none;">
    <?php displayReservationAfter () ?>
  </div>

  <button class="officeButton" id ="titleImage"><h3>Les images du site</h3></button>
  <div id ="imageQuai" style="display:none;">

    <button id="imageAddButton" class="littleButton">Rajouter une image</button>
    <?php require_once 'models/displayImages.php';
      DisplayImagesOffice();
    ?>

    <form method="POST" id="addImage" action="addImage" enctype="multipart/form-data" style="display:none;">
      <fieldset>
        Choisissez votre image : <input type="file" name="photo"></br>
        <input type="submit" value="Envoyer" name="image"></input>
      </fieldset>
    </form>

  </div>

  <button class="officeButton" id ="titleSchedule"><h3>Les horaires du Quai Antique</h3></button>
  <div id ="scheduleQuai" style="display:none;">

    <button id="add" class="littleButton">Ajouter</button> <button id="modify" class="littleButton">Modifier</button> <button id="delete" class="littleButton">Supprimer</button></h4>

    <form method="POST" id="addSchedule" action="validationSchedule" style="display:none;">
      <fieldset>
        <legend>Ajouter un horaire</legend>
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" placeholder="Obligatoire" required><br><br>

        <label for="horaireOuvert1">Premier horaire d'ouverture :</label>
        <input type="text" id="horaireOuvert1" name="horaireOuvert1" placeholder="HH:mm"><br><br>

        <label for="horaireFerme1">Premier horaire de fermeture :</label>
        <input type="text" id="horaireFerme1" name="horaireFerme1" placeholder="HH:mm"><br><br>

        <label for="horaireOuvert2">Second horaire d'ouverture :</label>
        <input type="text" id="horaireOuvert2" name="horaireOuvert2" placeholder="HH:mm"><br><br>

        <label for="horaireFerme2">Second horaire de fermeture :</label>
        <input type="text" id="horaireFerme2" name="horaireFerme2" placeholder="HH:mm"><br><br>

        <input type="submit" value="Ajouter" name="ajout">
      </fieldset>
    </form>

    <form method="POST" id="modifySchedule" action="modificationSchedule" style="display:none;">
      <fieldset>
        <label for="modifyForm">Choisissez un horaire à modifier :</label>
        <select id="modifySelect" name ="modifySelect">
        </select></br></br>
        <label for="horaireOuvert1M">Premier horaire d'ouverture :</label>
        <input type="text" id="horaireOuvert1M" name="horaireOuvert1M" placeholder="HH:mm"><br><br>

        <label for="horaireFerme1M">Premier horaire de fermeture :</label>
        <input type="text" id="horaireFerme1M" name="horaireFerme1M" placeholder="HH:mm"><br><br>

        <label for="horaireOuvert2M">Second horaire d'ouverture :</label>
        <input type="text" id="horaireOuvert2M" name="horaireOuvert2M" placeholder="HH:mm"><br><br>

        <label for="horaireFerme2M">Second horaire de fermeture :</label>
        <input type="text" id="horaireFerme2M" name="horaireFerme2M" placeholder="HH:mm"><br><br>
        <input type="submit" value="Modification de l'horaire" name="modify">
      </fieldset>
    </form>


    <form method="POST" id="deleteSchedule" action="deleteSchedule" style="display:none;">
      <fieldset>
        <label for="deleteForm">Choisissez un horaire à supprimer :</label>
        <select id="deleteSelect" name ="deleteSelect">
        </select>
        <input type="submit" value="Supression de l'horaire" name="delete">
      </fieldset>
    </form>
  </div>

</article>

<?php
  }
  $content = ob_get_clean();
  require_once 'view/layout.php';
?>