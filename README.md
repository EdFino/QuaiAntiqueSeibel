Pour installer l'application localement, vous aurez bien sûr besoin de votre propre serveur ainsi que de votre gestionnaire de bases de données.

Etape 1 : Création de votre dossier .env

Il vous faudra créer un fichier intitulé .env à la racine du projet.
Vous devrez remplir avec vos propres coordonnées les trois variables suivantes :
DB_HOST
DB_USER
DB_PASSWORD
Puis ensuite, écrire la quatrième variable ainsi : DB_NAME=quaiantique
Ainsi, tous les PDO pourront se connecter avec votre base de données.
A noter que les requêtes SQL sont écrites avec MariaDB.


Etape 2 : Créer et remplir les bases de données

Vous avez trois fichiers à la racine du projet :
databaseCreation.php (Création de la base de données et des tables)
databaseInsert.php (Insertion de données indispensables à la bonne tenue du site).
databaseCorrection.php (Efface les données dans les tables ; ce fichier ne sera pas indispensable mais vous permettra de réinitialiser les données si besoin).

Nous allons commencer par décommenter tout le fichier "databaseCreation.php" pour lui ordonner de créer la base de données quaiantique (cette étape a été mise en commentaires parce que je n'avais pas les droits pour créer des BDD dans celle que j'ai utilisé pour les derniers moments, mais a été testée sur mon MySQL personnel avec succès).
Dans le fichier "index.php", vous trouverez trois commentaires en-haut de la page :
//require_once 'databaseCreation.php';
//require_once 'databaseInsert.php';
//require_once 'databaseCorrection.php';
Vous pouvez alors décommenter la première ligne, puis lancer la page.
Recommenter la première ligne avec // puis décommentez la seconde ligne, et lancez la page à nouveau.

Le site du Quai Antique est maintenant fonctionnel !
Vous pourrez utiliser la dernière ligne si vous avez besoin de remettre les données du site comme avant : décommentez l'instruction, lancez le site, recommentez bien évidemment, et décommenter "databaseInsert.php" à nouveau.

Vous avez dans la base Customers plusieurs compte clients que vous pouvez réutiliser, mais surtout le compte administrateur.
Je place ici ses identifiants :
amichantdeux@yahoo.fr
m0tdep@ssesimple