<?php

function displayReservationOffice () {

    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    $dateNow = date('Y-m-d');
    $statement = $pdo->prepare('SELECT SUM(guestNumber) FROM Reservations WHERE dateReservation = :date ORDER BY scheduleReservation ASC');
    $statement->bindValue (':date', $dateNow, PDO::PARAM_STR);
    if ($statement->execute()) {
        while ($remainingPlaces = $statement->fetch(PDO::FETCH_NUM)) {
            echo '<h4>Il reste encore <strong>' . (50 - $remainingPlaces[0]) . '</strong> places.</h4>';
        }
    }
    $statement = $pdo->prepare('SELECT * FROM Reservations WHERE dateReservation = :date');
    $statement->bindValue (':date', $dateNow, PDO::PARAM_STR);

    if ($statement->execute()) {
        while ($scheduleReservation = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="reservationDisplay">Réservation pour ' . $scheduleReservation['guestNumber'] . ' aujourd\'hui à ' . $scheduleReservation['scheduleReservation'] . '</br>
                ' . $scheduleReservation['civility'] . ' ' . $scheduleReservation['name'] . ' : ' . $scheduleReservation['telNumber'] . ' / ' . $scheduleReservation['email'] . '</br>';
                if ($scheduleReservation['allergies']) {
                    echo 'Allergies : ' . $scheduleReservation['allergies'];
                } else { } echo '</div>';
        }
    }
}

function displayReservationAfter () {

    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        
    $dateNow = date('Y-m-d');

    $statement = $pdo->prepare('SELECT * FROM Reservations WHERE dateReservation > :date ORDER BY dateReservation ASC, scheduleReservation ASC');
    $statement->bindValue (':date', $dateNow, PDO::PARAM_STR);
        
    if ($statement->execute()) {
        while ($scheduleReservation = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="reservationDisplay">' . $scheduleReservation['dateReservation'] . ' : Réservation pour ' . $scheduleReservation['guestNumber'] . ' aujourd\'hui à ' . $scheduleReservation['scheduleReservation'] . '</br>
                ' . $scheduleReservation['civility'] . ' ' . $scheduleReservation['name'] . ' : ' . $scheduleReservation['telNumber'] . ', ' . $scheduleReservation['email'] . '</br>';
                if ($scheduleReservation['allergies']) {
                    echo 'Allergies : ' . $scheduleReservation['allergies'];
                } else { } echo '</div>';
        }
    }
}


function displayReservationCustomer () {

    if (isset($_SESSION['role'])) { 

        $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

        $dateNow = date('Y-m-d');
        $statement = $pdo->prepare('SELECT * FROM Reservations
                                    WHERE name = :name AND dateReservation >= :date
                                    ORDER BY dateReservation ASC, scheduleReservation ASC  ');

        $statement->bindValue (':name', $_SESSION['name'], PDO::PARAM_STR);
        $statement->bindValue(':date', $dateNow, PDO::PARAM_STR);

        if ($statement->execute()) {
            while ($reservation = $statement->fetch(PDO::FETCH_ASSOC)) {
                $clearDateReservation = date('d/m', strtotime($reservation['dateReservation']));
                $clearScheduleReservation = date ('H\hi', strtotime($reservation['scheduleReservation']));
                echo '<div class="reservationDisplay"><h5>' . $reservation['civility'] . ' ' . $reservation['name'] . ', votre table vous attend au Quai Antique pour le ' . $clearDateReservation . ' à ' . $clearScheduleReservation . '</h5></div>';
            }
        } else {
        }
    }
}