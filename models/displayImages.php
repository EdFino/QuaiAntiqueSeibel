<?php

function displayImages () {

  $pathImages = 'view/images/';

  $images = glob($pathImages . '*');
  foreach ($images as $image) {
    if (is_file($image) && in_array(pathinfo($image, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
      echo '	<div class="imagePublic">
			<img src="' . $image . '" alt="' . basename($image) . '" />
		  </div>';
    }
  }
}

function DisplayImagesOffice () {

  $pathImages = 'view/images/';
  $i = 1;

  $images = glob($pathImages . '*');
  echo '  <div class="displayImagesOffice">';
  foreach ($images as $image) {
    if (is_file($image) && in_array(pathinfo($image, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
      $infoImage = pathinfo($image);
      echo '	<div class="itemOffice">
			<img src="' . $image . '" alt="' . basename($image) . '" /></br>

      <form id="deleteImage" action="deleteImage" method="POST">
      <fieldset>
        <button class="littleButton" name="name" value="' . $infoImage['basename'] . '">Supprimer l\'image</button></br>
          </fieldset>
        </form>

		  </div>';
      $i++;
    }
  }
  echo '</div>';
}
?>