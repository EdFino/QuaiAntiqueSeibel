<?php

function recupData () {

    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    $statement = $pdo->prepare("SELECT * FROM Customers WHERE name = :name");
    $statement->bindValue(':name', $_SESSION['name'], PDO::PARAM_STR);

    if ($statement->execute()) {
        $dataCustomer = $statement->fetch(PDO::FETCH_ASSOC);
        return $dataCustomer;
    }
}
    $recupData = recupData();
    if ($recupData['allergies'] !== NULL) {
        $recupData['allergie'] = explode (", ", $recupData['allergies']);
    }