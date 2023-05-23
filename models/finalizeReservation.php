<?php

function finalizeReservation() {

    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    if (isset($_POST['envoiReservation'])) {
        $civilityReservation = htmlspecialchars($_SESSION['civility']);
        $nameReservation = htmlspecialchars($_SESSION['username']);
        $emailReservation = htmlspecialchars($_SESSION['email']);
        $telNumberReservation = $_SESSION['telNumber'];
        $guestNumberReservation = empty($_SESSION['guestNumber']) ? 1 : $_SESSION['guestNumber'];
        $allergiesReservation = htmlspecialchars($_SESSION['allergie']);
        $dateScheduleReservation = $_SESSION['dateSchedule'];
        $timeScheduleReservation = $_POST['timeSchedule'];

        $inscriptionReservation = $pdo->prepare('INSERT INTO Reservations (civility, name, email, telNumber, guestNumber, allergies, dateReservation, scheduleReservation)
                                                VALUES (:civility, :name, :email, :telNumber, :guestNumber, :allergies, :dateReservation, :timeReservation)');
        $inscriptionReservation->bindValue(':civility', $civilityReservation, PDO::PARAM_STR );
        $inscriptionReservation->bindValue(':name', $nameReservation, PDO::PARAM_STR );
        $inscriptionReservation->bindValue(':email', $emailReservation, PDO::PARAM_STR );
        $inscriptionReservation->bindValue(':telNumber', $telNumberReservation, PDO::PARAM_INT );
        $inscriptionReservation->bindValue(':guestNumber', $guestNumberReservation, PDO::PARAM_INT);
        $inscriptionReservation->bindValue(':allergies', $allergiesReservation, ($allergiesReservation !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL );
        $inscriptionReservation->bindValue(':dateReservation', $dateScheduleReservation, PDO::PARAM_STR);
        $inscriptionReservation->bindValue(':timeReservation', $timeScheduleReservation, PDO::PARAM_STR);
        $inscriptionReservation->execute ();
    }
}