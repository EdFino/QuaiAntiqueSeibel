<?php
try {
    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    if ($pdo->exec('TRUNCATE TABLE Customers;
                    TRUNCATE TABLE Admins;
                    TRUNCATE TABLE Reservations;
                    TRUNCATE Dishes;
                    TRUNCATE Horaires;
    ') !== false) {
        echo 'Base de données détruite';
    } else {
        echo 'Une erreur est survenue';
    }
} catch (PDOException $e) {
    //Gestion de l'erreur de connexion
}