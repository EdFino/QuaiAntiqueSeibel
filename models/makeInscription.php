<?php

function makeInscription () {

    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    if (isset($_POST['envoiInscription'])) {
        if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['civility'])
            && !empty($_POST['name']) && !empty($_POST['telNumber'])) {

            if (isset($_POST['allergie'])) {
                $allergies = $_POST['allergie'];
                $allergie = implode(', ', $allergies);
                $allergiesInscription = "ola";
                $allergiesInscription = $allergie; }
            else {
                    $allergiesInscription = NULL;
                }

            $emailInscription = htmlspecialchars($_POST['email']);
            $passwordInscription = $_POST['password'];
            $civilityInscription = htmlspecialchars($_POST['civility']);
            $nameInscription = htmlspecialchars($_POST['name']);
            $firstnameInscription = htmlspecialchars($_POST['firstname']);
            $telNumberInscription = $_POST['telNumber'];
            $guestNumberInscription = empty($_POST['guestNumber']) ? 1 : $_POST['guestNumber'];

            $inscriptionCustomer = $pdo->prepare('INSERT INTO Customers (email, password, civility, name, firstName, telNumber, guestNumber, allergies) VALUES (:mail, :password, :civility, :name, :firstname, :telNumber, :guestNumber, :allergies)');
            $inscriptionCustomer->bindValue(':mail', $emailInscription, PDO::PARAM_STR );
            $inscriptionCustomer->bindValue(':password', password_hash($passwordInscription, PASSWORD_BCRYPT), PDO::PARAM_STR );
            $inscriptionCustomer->bindValue(':civility', $civilityInscription, PDO::PARAM_STR );
            $inscriptionCustomer->bindValue(':name', $nameInscription, PDO::PARAM_STR );
            $inscriptionCustomer->bindValue(':firstname', $firstnameInscription, PDO::PARAM_STR );
            $inscriptionCustomer->bindValue(':telNumber', $telNumberInscription, PDO::PARAM_INT );
            $inscriptionCustomer->bindValue(':guestNumber', $guestNumberInscription, PDO::PARAM_INT);
            $inscriptionCustomer->bindValue(':allergies', $allergiesInscription, ($allergiesInscription !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL );
            $inscriptionCustomer->execute ();
        }
    }
}