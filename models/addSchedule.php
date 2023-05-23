<?php

function addSchedule () {

    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    if (isset($_POST['ajout'])) {
        $data = $_POST;
        $param = [];
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $param[$key]= NULL;
            } else {
                $param[$key] = ($value);
            }
        }

            $titreSchedule = $param['titre'];
            $ouvertureUn = $param['horaireOuvert1'];
            $fermetureUn = $param['horaireFerme1'];
            $ouvertureDeux = $param['horaireOuvert2'];
            $fermetureDeux = $param['horaireFerme2'];


            $addSchedule = $pdo->prepare('INSERT INTO Horaires (titre, ouvertureUn, fermetureUn, ouvertureDeux, fermeturedeux)
                                        VALUES (:titre, :ouvertureUn, :fermetureUn, :ouvertureDeux, :fermetureDeux)');
            $addSchedule->bindValue(':titre', $titreSchedule, PDO::PARAM_STR );
            $addSchedule->bindValue(':ouvertureUn', $ouvertureUn, ($ouvertureUn !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL);
            $addSchedule->bindValue(':fermetureUn', $fermetureUn, ($fermetureUn !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL);
            $addSchedule->bindValue(':ouvertureDeux', $ouvertureDeux, ($ouvertureDeux !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL);
            $addSchedule->bindValue(':fermetureDeux', $fermetureDeux, ($fermetureDeux !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL);

            $addSchedule->execute ();
    }
}