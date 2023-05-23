<?php

try {
   /*$pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        if ($pdo->exec('CREATE DATABASE quaiAntique') !== false) {*/
            $antique = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
            
            if ($antique->exec('CREATE TABLE Customers (
                idCustomer INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                email VARCHAR (100) NOT NULL,
                password VARCHAR (150) NOT NULL,
                civility VARCHAR (10) NOT NULL,
                name VARCHAR (50) NOT NULL,
                firstName VARCHAR (50) NOT NULL,
                telNumber INT (10) NOT NULL,
                guestNumber INT,
                allergies VARCHAR (100)
                )') !== false) {

                if ($antique->exec('CREATE TABLE Reservations (
                    idReservation INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    civility VARCHAR (10) NOT NULL,
                    name VARCHAR (50) NOT NULL,
                    email VARCHAR (100) NOT NULL,
                    telNumber INT (10) NOT NULL,
                    guestNumber INT NOT NULL,
                    allergies VARCHAR (100),
                    dateReservation  DATE NOT NULL,
                    scheduleReservation TIME NOT NULL
                    )') !== false) {

                    if ($antique->exec('CREATE TABLE Admins (
                        idAdmin INT (11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                        email VARCHAR (100) NOT NULL,
                        password VARCHAR (30) NOT NULL
                    )') !== false) {

                        if ($antique->exec('CREATE TABLE Dishes (
                            idDish INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                            nameDish VARCHAR (30) NOT NULL,
                            priceDish  INT NOT NULL,
                            descriptionDish VARCHAR(500) NOT NULL,
                            service VARCHAR (50) NOT NULL
                        )') !== false) {

                                        if ($antique->exec('CREATE TABLE Horaires (
                                                idHoraire INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                                                titre VARCHAR (50) NOT NULL,
                                                ouvertureUn TIME,
                                                fermetureUn TIME,
                                                ouvertureDeux TIME,
                                                fermetureDeux TIME)') !==false) {
                                        }

                    echo 'Installation terminée d\'AllergiesClient !';
                } else {
                    echo 'Impossible de créer la table AllergiesClient<br>';
                }
            } else {
            echo 'Impossible de créer la table Allergies<br>';
        }
    } else {
    echo 'Impossible de créer la table Images<br>';
                }
                } else {
                echo 'Impossible de créer la table Menus<br>';
                }
/*        } else {
            echo 'Impossible de créer la base<br>';
        }*/
    } catch (PDOException $exception){
    die($exception->getMessage());
}