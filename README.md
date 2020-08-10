# AgenceImmobiliereSymfony
Ce projet sera développé en Symfony 4 Il a pour but de mettre en place une application web pour une agence immobilière

Fonctionnalités de l'application:

- Avec ce site, on pourra filtrer les biens en fonction de leur surface,nombre de pièces,prix ou s'ils sont accessibles en mobilité réduité
- Un client pourra remplir un formulaire de contact pour un bien
- Un agent immobilier recevra le message d'un client concernant un bien
- Un agent immobilier pourra gérer ses biens en ajoutant des photos, en supprimant des photos etc.
- Les clients pourront localiser un bien à l'aide d'une carte, ici nous utiliseront l'open street map

Créer le projet

composer create-project symfony/skeleton my_project_name

Modifier votre fichier .env pour ajouter la bonne adresse de votre base de données, exemple de mon chemin base de données:

   DATABASE_URL=mysql://root:" "@127.0.0.1:3306/db_name?serverVersion=5.7
   
Lancer le serveur
  php -S 127.0.0.1:8000 -t public
