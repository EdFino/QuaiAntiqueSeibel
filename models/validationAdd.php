<?php

require_once 'models/schedules.php';

function addSchedule ($schedules) {
    if (isset($_POST['ajout']) && isset($_POST['horaireOuvert1']) && isset($_POST['horaireOuvert2']) && isset($_POST['horaireFerme1']) && isset($_POST['horaireFerme2'])){
        $schedules [$_POST['titre']] = [ [$_POST['horaireOuvert1'], $_POST['horaireFerme1']], [$_POST['horaireOuvert2'], $_POST['horaireFerme2']]];
    var_dump ($schedules); }
    elseif (isset($_POST['ajout']) && isset($_POST['horaireOuvert1']) && empty($_POST['horaireOuvert2']) && isset($_POST['horaireFerme1']) && empty($_POST['horaireFerme2'])) {
        $schedules [$_POST['titre']] = [ [$_POST['horaireOuvert1'], $_POST['horaireFerme1'] ] ]; }
    elseif (isset($_POST['ajout'])) {
        $schedules [$_POST['titre']] = NULL;
        var_dump($GLOBALS);
    } else {
        return false;
    }
}