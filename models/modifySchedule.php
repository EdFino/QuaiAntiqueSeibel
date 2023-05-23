<?php

function modifySchedule() {


    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    if (isset($_POST['modify'])) {
        $data = $_POST;
        $param = [];
        foreach ($data as $key => $value) {
                if (empty($value)) {
                    $param[$key]= NULL;
                } else {
                    $param[$key] = ($value);
                }
            }

        $titreSchedule = $param['modifySelect'];
        $ouvertureUn = $param['horaireOuvert1M'];
        $fermetureUn = $param['horaireFerme1M'];
        $ouvertureDeux = $param['horaireOuvert2M'];
        $fermetureDeux = $param['horaireFerme2M'];

        $addSchedule = $pdo->prepare('UPDATE Horaires SET
                                        ouvertureUn = :ouvertureUn,
                                        fermetureUn = :fermetureUn,
                                        ouvertureDeux = :ouvertureDeux,
                                        fermeturedeux = :fermetureDeux
                                        WHERE titre = :titre');

        $addSchedule->bindValue(':ouvertureUn', $ouvertureUn, ($ouvertureUn !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL);
        $addSchedule->bindValue(':fermetureUn', $fermetureUn, ($fermetureUn !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL);
        $addSchedule->bindValue(':ouvertureDeux', $ouvertureDeux, ($ouvertureDeux !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL);
        $addSchedule->bindValue(':fermetureDeux', $fermetureDeux, ($fermetureDeux !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL);
        $addSchedule->bindValue(':titre', $titreSchedule, PDO::PARAM_STR );

        $addSchedule->execute ();
    }
}
?>