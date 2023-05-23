<?php
session_start();
require_once 'models/makeInscription.php';
ob_start();
makeInscription();

?>

<div class="conteneurParent">
    <div class="validation">
Votre inscription est finalisée.
Merci beaucoup pour nous avoir rejoints.</br>
<a href="connexion">Vous pouvez maintenant vous connecter !</a></br>
<a href="/">Ou revenir à la page principale.</a>
</div>
</div>

<?php 
$content = ob_get_clean();
require 'view/layout.php';