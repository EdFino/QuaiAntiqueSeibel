<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Au Quai Antique</title>
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="view/logo/q.jpg">
    <link href="view/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  </head>

  <body>
    
    <header>
      <div id="presentation">
        <div class=images>
          <img id="headImage" src="view/logo/quaiantique.jpg" class="img-fluid" alt="presentation du restaurant">
        </div>
        <div id="navbar">
          <a href="/">
            <img id="logoQuai" src="view/logo/titre.png" alt="Titre Quai Antique">
          </a>
          <div id="liste">
            <ul class="nav">
              <li><a href="carte" class="link">CARTE<span class="and"> & MENUS</span></a></li>
              <li><a href="#footer" class="link">HORAIRES</a></li>
            </ul>
            <ul class="nav">

              <?php
                if (!isset($_SESSION['role'])) {
                  echo '<li><a href="connexion" class="link">CONNEXION</a></li>';
                  echo '<li><a href="inscription" class="link">INSCRIPTION</a></li>';
                } else {
                  echo '<li><a href="deconnexion" class="link">DECONNEXION</a></li>';
                }
              ?>

            </ul>
          </div>
        </div>
      </div>

      <div id="buttonReservation">
        <button id="Reservation" onclick="window.location.href = 'reservation' ">RESERVER UNE TABLE</button><br/>
      </div>

      <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
      ?>
      <div id="buttonGoToOffice">
        <button id="goToOffice" onclick="window.location.href = 'office' ">PANNEAU ADMINISTRATIF</button><br/>
      </div>
      <?php
        } else {}
      ?>
    </header>

    <article>
      <?php echo $content; ?>
    </article>

    <footer id="footer">
      <h3>HORAIRES<span class="and"> ET ADRESSE</span></h3>
      <div id="informations">
        <div>
          <ul class="horaires">

            <?php
              require_once 'models/viewSchedule.php';
              displaySchedule();
            ?>

        </div>
        <div id="contact">
          <div>
            <ul id="contactUl">
              <li>Mentions légales</li>
              <li>Politiques de cookie</li>
              <li>Quai antique | 2023</li>
            </ul>
          </div>
          <img id="logoFooter" src="view/logo/titre.png"/>
          <ul>
            <li>35 place Monge, Chambéry (73000)</li>
            <li>seibeledouard@yahoo.fr</li>
            <li>0643064969</li>
          </ul>
        </div>
      </div>
    </footer>

    <script src="view/script.js"></script>
    
  </body>
</html>