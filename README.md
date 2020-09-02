# AgenceImmobiliereSymfony
Ce projet sera développé en Symfony 4.  Il a pour but de mettre en place une application web pour une agence immobilière

Fonctionnalités de l'application:

- Avec ce site, on pourra filtrer les biens en fonction de leur surface,nombre de pièces,prix ou s'ils sont accessibles en mobilité réduite
- Un client pourra remplir un formulaire de contact pour un bien
- Un agent immobilier recevra le message d'un client concernant un bien
- Un agent immobilier pourra gérer ses biens en ajoutant un bien, des photos, en les supprimant etc.
- Les clients pourront localiser un bien à l'aide d'une carte, ici nous utiliseront l'open street map


PREREQUIS POUR INSTALLER LE PROJET:

- Avoir Composer installé
- Avoir la version PHP 7.1*
- Avoir Git en local

POUR INSTALLER LE PROJET

- Git clone + depot
- Composer install : pour les dépendances
- Modifier votre fichier .env pour ajouter la bonne adresse de votre base de données, exemple de mon chemin base de données:

   DATABASE_URL=mysql://root:" "@127.0.0.1:3306/NomBasedeDonnees
- APPLIQUER LES MIGRATIONS

        php bin/console doctrine:migrations:migrate
        
 - Lancer le serveur : php -S 127.0.0.1:8000 -t public
 
 IMPORTANT: Vous 



COMMANDES POUVANT ETRE UTILSES (NON OBLIGATOIRES POUR INSTALLER LE PROJET)

Créer le projet

composer create-project symfony/skeleton my_project_name

Modifier votre fichier .env pour ajouter la bonne adresse de votre base de données, exemple de mon chemin base de données:

   DATABASE_URL=mysql://root:" "@127.0.0.1:3306/NomBasedeDonnees
  
 CRÉER LA BASE DE DONNÉES: 
   
      php bin/console doctrine:database:create
   
LANCER LE SERVEUR

  php -S 127.0.0.1:8000 -t public

CRÉATION DES TABLES

    php bin/console make:entity
    
LANCER LES MIGRATIONS APRES CRÉATION DE TABLE

   php bin/console make:migration
     
APPLIQUER LES MIGRATIONS

  php bin/console doctrine:migrations:migrate
  
POUR AJOUTER LES CHAMPS DANS NOTRE TABLE

 - Soit créer les attributs, les getters et les setters
 - Soit recréer la table et le framework nous demanderas si on veut rajouter les champs
    
