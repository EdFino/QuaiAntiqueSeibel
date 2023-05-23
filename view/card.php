<?php
session_start();
ob_start();
?>

<h1>Le Quai Antique vous présente sa carte</h1>

<div id="restaurantMenu">

  <?php
    require_once 'models/displayCard.php';
      displayCard('Entrée');
      displayCard('Plat');
      displayCard('Dessert');
      displayCard('Boisson');
  ?>

</div>

<h2>... et ses Menus</h2>

<div id="menu">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Menu enfant "Savoie Bien"<br/><span class ="important">25€</span></h5>
      <p class="card-text">Mini-Tourtes</br>
      &</br>
      Croziflette</br>
      &</br>
      Yaute Cola</br></p>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Menu Michant<br/><span class ="important">40€</span></h5>
      <p class="card-text">Mini-Tourtes</br>
      &</br>
      Poêlée Savoyarde</br>
      &</br>
      Bouteille de Sublime Roussette</br>
      ou de Savoie-Chignin-Bergeron</br></p>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Menu Dégustation<br/><span class ="important">50€</span></h5>
      <p class="card-text">Matouille légère</br>
      &</br>
      Tartiflette Maison</br>
      &</br>
      Dessert au choix</br>
      &</br>
      Bouteille de Sublime Roussette</br>
      ou de Savoie-Chignin-Bergeron</br></p>
    </div>
  </div>
</div>

<div class="decoration">
  <img src="view/logo/ornementfooterdeux.png" alt="décoration du milieu">
</div>

<?php
  $content = ob_get_clean();
  require_once "view/layout.php";
  ?>