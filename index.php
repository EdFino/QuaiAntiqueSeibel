<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//require_once 'databaseCreation.php';
//require_once 'databaseInsert.php';
//require_once 'databaseCorrection.php';

$route = $_SERVER['REQUEST_URI'];
switch ($route) {

  case '/connexion':
  require 'models/verifconnexion.php';
  require_once 'view/formConnexion.php';
  break;

  case '/carte':
  require 'models/displayCard.php';
  require_once 'view/card.php';
  break;

  case '/reservation':
  require_once 'view/formReservation.php';
  break;

  case '/inscription':
  require_once 'view/formInscription.php';
  break;

  case '/office':
  require_once "view/backOffice.php";
  break;

  case '/deconnexion':
  require 'view/deconnexionView.php';
  break;

  case '/test':
  require 'view/testView.php';
  break;

  case '/validationView':
  require 'view/validationInscription.php';
  break;

  case '/validationSchedule':
  require_once 'view/validationAddSchedule.php';
  break;

  case '/deleteSchedule':
  require_once 'view/validationDeleteSchedule.php';
  break;

  case '/modificationSchedule':
  require_once 'view/validationModifySchedule.php';
  break;

  case '/addImage':
  require_once 'view/validationAddImage.php';
  break;

  case '/deleteImage':
  require_once 'view/validationDeleteImage.php';
  break;

  case '/reservationTime':
  require_once 'view/reservationTimeView.php';
  break;

  case '/reservationValidation':
  require_once 'view/validationReservation.php';
  break;

  default:
  require_once 'view/homepage.php';
  break;
}