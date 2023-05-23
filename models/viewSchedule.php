<?php

function timeSchedule ($scheduleTime) {
    return date('H\hi', strtotime($scheduleTime));
}

function displaySchedule () {
    try {
        $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        $statement = $pdo->prepare ("SELECT * FROM Horaires");
            if ($statement ->execute ()) {
                while ($schedule = $statement->fetch(PDO::FETCH_ASSOC)) {
                    echo '<li><h6><span class="titleSchedule">' . $schedule['titre'] . '</span></h6>';
                    if ( $schedule['ouvertureUn'] !== NULL
                        && $schedule['fermetureUn'] !== NULL
                        && $schedule['ouvertureDeux'] !== NULL
                        && $schedule['fermetureDeux'] !== NULL) {
                            echo timeSchedule($schedule['ouvertureUn']) . ' - ' . timeSchedule($schedule['fermetureUn']) . '</br>' .
                            timeSchedule($schedule['ouvertureDeux']) . ' - ' . timeSchedule($schedule['fermetureDeux']) . '</li>';

                    } elseif ( $schedule['ouvertureUn'] !== NULL
                            && $schedule['fermetureUn'] !== NULL
                            && $schedule['ouvertureDeux'] === NULL
                            && $schedule['fermetureDeux'] === NULL) {
                                echo timeSchedule($schedule['ouvertureUn']) . ' - ' . timeSchedule($schedule['fermetureUn']) . '</li>';
                                
                    } else {
                        echo "FERME</li>";
                    }
                }
            } else {
                echo 'Erreur bitch !';
            }
    } catch (exception $e) {
        echo 'erreur totale!';
    }
}

function displayScheduleReservation () {
    try {
        $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        $statement = $pdo->prepare ("SELECT * FROM horaires");
        if ($statement ->execute ()) {
            while ($schedule = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<li><h6><span class="reservationSchedule">' . $schedule['titre'] . '</span></h6>';
                if ( $schedule['ouvertureUn'] !== NULL
                    && $schedule['fermetureUn'] !== NULL
                    && $schedule['ouvertureDeux'] !== NULL
                    && $schedule['fermetureDeux'] !== NULL) {
                        echo timeSchedule($schedule['ouvertureUn']) . ' - ' . timeSchedule($schedule['fermetureUn']) . '</br>' .
                        timeSchedule($schedule['ouvertureDeux']) . ' - ' . timeSchedule($schedule['fermetureDeux']) . '</li>';

                } elseif ( $schedule['ouvertureUn'] !== NULL
                        && $schedule['fermetureUn'] !== NULL
                        && $schedule['ouvertureDeux'] === NULL
                        && $schedule['fermetureDeux'] === NULL) {
                            echo timeSchedule($schedule['ouvertureUn']) . ' - ' . timeSchedule($schedule['fermetureUn']) . '</li>';
                                
                } else {
                    echo "FERME</li>";
                }
            }
        } else {
            echo 'Erreur !';
        }
    } catch (exception $e) {
        echo 'erreur totale!';
    }
}