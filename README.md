# Projet PortFolio
Le projet consiste à réaliser un PortFolio héberger sur un serveur Linux qui peut être modifiable à tout moment grâce à une partie admin.

## La Base de Données
Correspond au fichier "Base de données PortFolio" et est réalisé sur PgAdmin. Elle y contient tout ce qui peut être modifié sur le PortFolio tel que le chemin de la photo d'identité ou encore le nom d'une entreprise... 
Elle y contient au total 6 tables: 
"Competences", "experiences", "presentationdet", "contact", "presentationsimple", "projet".
### Le script: 
Le script de la base de donnée correspond au fichier "ScriptBDD.txt".
On y retrouve une partie du script nécessaire à la conception de la Base De Données. La commande pour créer une database est: 
	 
	 CREATE DATABASE "PortFolio"
	 
Puis pour le schéma:

	CREATE SCHEMA admin
    AUTHORIZATION postgres;

Ensuite dans le Query Tool du shéma que nous venons de créer il suffit d'ajouter les tables comme dans le script puis d'y ajouter les données déjà existante. Il ne nous reste plus qu'à la backup en cliquant droit sur notre base de données.

## Location.php
Fichier qui correspond à une page test de PHP.

## Main.js
Fichier Javascript relier au fichier "MonPortFolio.html" et qui permet ici d'afficher le menu comme une cascade.

## HTML/CSS
Il y'a au total 4 pages HTML/CSS:
		"MonPortFolio.html","MonPortFolio.css"
		"admin.html","admin.css"
Les fichiers sont donc les pages de codes de mon PortFolio.
	Il est composé de deux pages, la première étant le PortFolio et la deuxième la partie administrative.

## Dossier

Le dossier "images" est tout simplement le dossier où sont situés les images nécessaire au PortFolio.
		 

