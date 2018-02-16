# Introduction à Symfony 3.4

## Installation

Pour installer Symfony 3.4 vous devez tous dabord possèder [Composer](https://getcomposer.org/). Une fois installé lancé la commande suivante dans le dossier ou vous desirez créer votre projet.

> composer create-project symfony/framework-standard-edition nom_projet "3.4.*" --stability dev


L'installateur vous demander de configurez vos paramètre de base de données

<img src="/img_doc/install_ask_db.PNG">

Une fois l'installation terminé rendez-vous dans le dossier de votre projet :

> cd nom_projet

Et lancez le serveur Symfony avec :

>  php bin/console server:run

La page d'accueil de Symfony sera disponible à l'adresse affiché (normalenet 127.0.0.1:8000).

<img src="/img_doc/symfony_home.PNG">

Symfony est maintenant installé et operationelle.

## Arboresence

