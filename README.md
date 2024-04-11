## Projet d'intégration 2024 HEIG-VD
Cette application à été réalisé dans le cadre d'un projet de groupe sur une durée de 5 semaines en mars-avril 2024 dans le cadre du module "projet d'intégration" de l'HEIG-VD à Yverdon-Les-Bains.

## Fonctionnalités
L'application web permet :
- D'afficher la listes de tous les épisodes de la télé-réalité et permettre de lancer rapidement le dernière épisode.
- De voter pour les mallus/bonus pour les participants de l'émission pour l'épisode de la semaine d'après.

Pour ce faire évidemment en coulisse :
- La possibilité de se créer un compte
- De se connecter
- Gérer ses informations personnels (changer de nom et mot de passe)
- Supprimer son compte

## Avant de lancer le projet
- npm install
- php artsian migrate
- php artisang db:seed
- php artisan storage:link (pour afficher les images)

## Pour lancer le projet 
- npm run dev
- php artisan serve


