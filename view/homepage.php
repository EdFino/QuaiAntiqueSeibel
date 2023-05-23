<?php
session_start();
ob_start();
?>

<div class="decoration">
  <img src="view/logo/ornementheader.png" alt="Décoration du haut" />
</div>

<h1>Bienvenue au Quai Antique </br>
<span id="savoyard">Restaurant Savoyard</span></h1>

<div id="espaceClient">
<?php
  require 'models/displayReservation.php';

    if (isset($_SESSION['role']) && $_SESSION['role'] === 'customer') {
        echo  '<h3>Bonjour ' . $_SESSION['civility'] . ' ' . $_SESSION['name'] . ', c\'est un plaisir de vous revoir !</h3>'; }
?>

<?php
  if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] === 'customer') {
      displayReservationCustomer(); } }?>
</div>

<div id="textePresentation">
  <p>Notre chef Arnaud Michant est revenu sur ses terres natales après une carrière splendide qui fait de lui un des chefs les plus côtés de notre époque. 
  Sa vision : faire renaître les recettes ancestrales de Savoie et Haute-Savoie à sa sauce, afin de faire profiter à tous de la diversité culinaire de sa région. 
  Le Quai Antique est la recréation de ces saveurs adorées, entre tradition et modernité, portées à leur plus-haute qualité. 
  Un service impeccable et une haute-cuisine gourmande rendront votre repas inoubliable.</p>

  <p>Dans un cadre agréable, situé dans le quartier le plus élégant de Chambéry, le Quai Antique est aussi un lieu de détente, une bulle reposante à la douce odeur de fromage.
  L'été, une terrasse est à votre disposition pour profiter de l'ambiance sereine de la ville et en hiver, vous pourrez vous resserer autour du fromage coulant.
  Nous disposons à l'intérieur d'une cinquantaine de places bien disposées qui savent aussi bien accueillir les petits comme les grands groupes.<p>

  <div class="decoration">
    <img src="view/logo/ornementarticle.png" alt="décoration du milieu">
  </div>

  <p class="citation">" Le Quai Antique est un lieu de cuisine et de haute-cuisine de la Savoie et de la Haute-Savoie.</br>
  Pour moi, la Savoie est la capitale culinaire de la France. Ceux qui ne sont pas d'accords n'aiment tout simplement pas le fromage. "</br>
  <span class="signature"> Arnaud Michant</span></p>
  <div class="decoration">
    <img src="view/logo/ornementarticle.png" alt="décoration du milieu">
  </div>
</div>

<div id="displayImages">
  <?php
    require_once 'models/displayImages.php';
    displayImages();
  ?>

</div>


<div id="buttonReservationSecond">
  <button id="Reservation" onclick="window.location.href = 'reservation' ">RESERVER UNE TABLE</button><br/>
</div>

<div class="decoration">
  <img src="view/logo/ornementfooterdeux.png" alt="décoration du milieu">
</div>


<?php
  $content = ob_get_clean();
  require_once "view/layout.php"; ?>