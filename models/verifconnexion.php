<?php

function verifConnexion () {

    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

    if (isset($_POST['envoi'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $emailCustomer = htmlspecialchars($_POST['email']);
            $passwordCustomer = $_POST['password'];

            $recupCustomer = $pdo->prepare('SELECT * FROM Admins WHERE email = ? AND password = ? ');
            $recupCustomer->execute (array ($emailCustomer, $passwordCustomer));

            if ($recupCustomer->rowCount() > 0) {
                $_SESSION['role'] = "admin";
                header ('location:office');
            } else {
                $recupCustomer = $pdo->prepare('SELECT * FROM Customers WHERE email = :email');
                $recupCustomer->bindValue(':email', $emailCustomer, PDO::PARAM_STR);
                if ($recupCustomer->execute()) {
                    $user = $recupCustomer->fetch(PDO::FETCH_ASSOC);
                    if ($user === false) {
                        echo 'Identifiants invalides';
                    } else {
                        if (password_verify($passwordCustomer, $user['password'])) {
                            $_SESSION['role'] = "customer";
                            $_SESSION['name'] = $user['name'];
                            $_SESSION['civility'] = $user ['civility'];
                            header('location:/');
                        } else {
                            echo 'Identifiants invalides';
                        }
                    }
                } else {
                        echo "Echec de connexion, veuillez réessayer plus tard ou contacter le restaurant par téléphone.";
                }
            }
        }
    }
}