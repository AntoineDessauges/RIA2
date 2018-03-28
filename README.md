# Projet

Ce projet affiche un dashboard des réseaux sociaux du CPNV. 

Il affiche un compteur des likes/followers pour :
- Facebook
- Twitter
- Linkedin
- Instagram

Ainsi qu'un compteur total d'interactions sociales. Il affiche en plus un bouton permettant de s'abonner aux différents réseaux sociaux.

# Installation

Pour installer le projet sur votre machine, clonez le repository avec la commande suivante:
> git clone https://github.com/AntoineDessauges/RIA2.git

Déplacez-vous dans le dossier du projet:
> cd <nom_dossier>

Installez les dépendances nécessaires avec:
> composer install

Et lancez le serveur avec:
> php bin/console server:run

Votre projet est accesible à l'adresse afficher dans votre invite de commande (normalement [http://127.0.0.1:8000/](http://127.0.0.1:8000/)).

# Documentation technique

Ce projet a été réalisé en Symfony 3.4 et utilise différentes API ou hack pour accéder aux valeurs des réseaux sociaux.

## Clés et tokens

Toutes les clés et tokens pour accéder aux API sont stockés dans le fichier `app/config/parameters.yml` et dans sa copie `app/config/parameters.yml.dist`. La copie etant obligatoire sinon le fichier `app/config/parameters.yml` sera éventuellement, supprimée lors d'installations d'autres gems.

## Facebook

Pour récupérer les informations Facebook, j'utilise le [SDK Facebook](https://developers.facebook.com/docs/reference/php) qui me retourne un json avec les valeurs de la page Facebook.

Pour le bouton Like, j'utilise leur [générateur de bouton](https://developers.facebook.com/docs/plugins/like-button).

## Twitter

Pour récupérer les informations Twitter, j'utilise la librairie [twitteroauth](https://github.com/abraham/twitteroauth) qui me retourne un json avec les valeurs de la page Twitter.

Pour le bouton Follow, j'utilise leur [générateur de bouton](https://dev.twitter.com/web/follow-button).

## Linkedin

Ne possédant pas les accès de la page Linkedin du CPNV, mon application ne possédait pas les droits pour récupérer les informations nécessaires.
Un hack a été utilisé en effectuant une requête  sur l'url `https://api.criexe.com/social/pageStats?linkedin=15143046` qui me retourne les informations désirées  sous forme de json.

Pour le bouton Suivre, j'utilise leur [générateur de bouton](https://developer.linkedin.com/plugins/follow-company).

## Instagram

Ne possédant pas les accès de la page Instagram du CPNV, mon application ne possédait pas les droits pour récupérer les informations nécessaires.
Un hack a été utilisé en effectuant une requête  sur l'url `https://www.instagram.com/cpnv.ch/?__a=1` qui me retourne les informations désirées  sous forme de json.

Instagram ne possédant pas de générateur de bouton ou d'option pour suivre la page de cette façon, j'ai simplement mis un lien vers la page.

# Plan RIA2

| Semaine  |  Travail à réaliser |
|---|---|
|  1 |  Choisir le projet et les technologies, réaliser les planifications |
|  2 |  Installer le framework, comprendre les bases |
|  3 |  Comprendre les bases du framework |
|  4 |  API réseaux sociaux |
|  5 |  API réseaux sociaux |
|  6 |  API réseaux sociaux, faire la présentation |
|  7 |  Présentation sur Symfony, API réseaux sociaux |
|  8 |  Faire la documentation du projet |
|  9 |  Finaliser le projet |
