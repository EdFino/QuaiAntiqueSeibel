<?php
try {
    // Exemple avec une base de données MySQL avec les identifiants par défaut
    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    if ($pdo->exec("INSERT INTO Admins (email, password) VALUES ('amichant@yahoo.fr', 'Tgdkjd57knjscjkd');
                    INSERT INTO Admins (email, password) VALUES ('amichantdeux@yahoo.fr', 'm0tdep@ssesimple');") !== false) {
        echo 'Table des Admins créée</br>';
    } else {
        echo 'Une erreur est survenue';
    }
} catch (PDOException $e) {
    //Gestion de l'erreur de connexion
}

try {
    // Exemple avec une base de données MySQL avec les identifiants par défaut
    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    if ($pdo->exec("INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Entrée', 'Les mini-tourtes', 10, 'Trois mini-tourtes chaudes fourrées aux lardons, aux patates et au reblochon fondu. A garder précieusement pour soi ou à partager.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Entrée', 'La salade hivernale', 12, 'Pour garder la ligne, rien de mieux que cette salade inimitable, accompagnée de tomates, d\’oignons, de lardons, de patates et de reblochon.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Entrée', 'La matouille légère', 12, 'Parfait pour se mettre en appétit, cinq énormes patates vous attendent, sur un lit de salade, de reblochon et de lardons.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Entrée', 'Une soupe avec des marrons', 8, 'Une soupe avec des marrons.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Plat', 'La poélée savoyarde', 23, 'Ce plat délicieux à base de pommes de terre, de lardons et de reblochon est un grand classique. A déguster avec du vin blanc !');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Plat', 'La Croziflette', 20, 'Amateurs de crozets, attention ! Testez notre équilibre maison entre la raclette et le crozet, pour savourer la rencontre entre le sarrasin et le reblochon. Nous conseillons avec ce plat une bouteille de vin blanc.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Plat', 'La raclette Michant', 60, 'Pour deux personnes. Notre chef a revisité la cultissime raclette avec l\’ajout de fromage de reblochon, de patates et de lardons pour être certain de ne pas manquer. A savourer bien sûr, avec du blanc.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Plat', 'La tartiflette maison', 24, 'Des lardons fumés, des patates et du reblochon dans une immense marmite, que demander de mieux ? L\’accompagnement suggéré est un verre de vin blanc.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Plat', 'La fondue Savoyarde', 55, 'Pour deux personnes, attention à ne pas faire tomber votre bout de bain dans le reblochon fondu ! N\’hésitez pas à prendre pour accompagner un verre de vin blanc.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Plat', 'Le Welsh en Savoie', 23, 'Qui a dit que nous étions bloqués sur nos spécialités régionales ? Tentez notre Welsh du Sud-Est où le cheddar a été remplacé par notre indépassable reblochon. A prendre avec du blanc.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Plat', 'La tarte au reblochon', 22, 'Avec de la crème fraîche, des lardons, des patates et bien évidemment du reblochon, cette spécialité du chef vous fera replonger en enfance et est souvent mangé avec une bouteille de vin blanc.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Dessert', 'Le Matafan aux pommes', 8, 'Ce dessert ancestral de la Savoie est la parfaite conclusion pour votre repas ! Cette recette transmise de génération en génération est un héritage revisité avec respect par notre chef.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Dessert', 'Le biscuit Savoyard', 6, 'L\’indémodable biscuit préféré de tous s\’invite dans votre assiette. Pour petits et grands, à partager en famille ou seul.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Dessert', 'Les Bugnes', 8, 'Une assiette remplie de bugnes aux ingrédients de haute-qualité, impossible de résister.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Dessert', 'La fondue... au chocolat', 12, 'Si vous n\’en avez pas encore assez de la fondue, ce dessert est fait pour vous. Pas de petit pain cette fois-ci, juste beaucoup de gourmandise.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Dessert', 'Le fondant aux marrons', 8, 'Un fondant avec des marrons.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Boisson', 'Yaute Cola', 4, 'Inutile de résister à l\’impérialisme américain quand notre région produit du coca de bien meilleure qualité.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Boisson', 'Sublime Roussette - Savoie)', 16, 'On ne peut pas trouver vin plus équilibré pour accompagner le reblochon ! Son arôme sucré se mélange parfaitement avec nos recettes. C\’est la recommandation du chef.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Boisson', 'Jacquère - Savoie', 13, 'Le vin parfait pour accompagner l’apéritif. Fruité, léger, festif. A boire… sans modération.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Boisson', 'Cruet - Savoie', 25, 'Qu\’il est exigeant, mais qu\’il est bon ! Ce grand cru âpre, mais véloce, possède une force déroutante qui réjouira votre palais.');
                    INSERT INTO Dishes (service, nameDish, priceDish, descriptionDish) VALUES ('Boisson', 'Savoie-Chignin-Bergeron', 16, 'Un excellent vin pour se détendre et réveiller les papilles. Il donnera à tous vos plats une goutte de fantaisie.');") !== false) {
        echo 'Table des Dishes créée</br>';
    } else {
        echo 'Une erreur est survenue';
    }
} catch (PDOException $e) {
    //Gestion de l'erreur de connexion
}

try {
    // Exemple avec une base de données MySQL avec les identifiants par défaut
    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    if ($pdo->exec("INSERT INTO Horaires (titre, ouvertureUn, fermetureUn, ouvertureDeux, fermetureDeux) VALUES ('Lundi', NULL, NULL, NULL, NULL);
                    INSERT INTO Horaires (titre, ouvertureUn, fermetureUn, ouvertureDeux, fermetureDeux) VALUES ('Mardi', '12:00', '15:00', '19:00', '23:00');
                    INSERT INTO Horaires (titre, ouvertureUn, fermetureUn, ouvertureDeux, fermetureDeux) VALUES ('Mercredi', '11:30', '23:00', NULL, NULL);
                    INSERT INTO Horaires (titre, ouvertureUn, fermetureUn, ouvertureDeux, fermetureDeux) VALUES ('Jeudi', NULL, NULL, NULL, NULL);
                    INSERT INTO Horaires (titre, ouvertureUn, fermetureUn, ouvertureDeux, fermetureDeux) VALUES ('Vendredi', '12:00', '15:00', '19:00', '23:00');
                    INSERT INTO Horaires (titre, ouvertureUn, fermetureUn, ouvertureDeux, fermetureDeux) VALUES ('Samedi', '12:00', '23:00', NULL, NULL);
                    INSERT INTO Horaires (titre, ouvertureUn, fermetureUn, ouvertureDeux, fermetureDeux) VALUES ('Dimanche', '11:00', '22:30', NULL, NULL)") !== false) {
        echo 'Table des Horaires créée</br>';
    } else {
        echo 'Une erreur est survenue';
    }
} catch (PDOException $e) {
    //Gestion de l'erreur de connexion
}