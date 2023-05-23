<?php

function deleteSchedule () {

        $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

        if (isset($_POST['delete'])) {

                $titleSchedule = $_POST['deleteSelect'];
                $deleteSchedule = $pdo->prepare ('DELETE FROM Horaires WHERE titre = :titre');
                $deleteSchedule->bindValue(':titre', $titleSchedule, PDO::PARAM_STR);
                $deleteSchedule->execute();
        }
}

?>