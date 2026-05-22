# Job 07 - LAMP avec Docker Compose

## Description du projet

Ce projet utilise Docker Compose pour créer une pile **LAMP** complète :
- **L**inux (conteneur)
- **A**pache (serveur web)
- **M**ySQL (base de données)
- **P**HP (langage côté serveur)

## Architecture Docker Compose

La configuration Docker Compose orchestre les services nécessaires :

![Configuration Docker Compose]

<img src="/job-07-lamp/img/db_compose.png>

Cette image montre comment les services Apache, PHP et MySQL sont configurés et connectés ensemble pour fonctionner de manière intégrée.

## Étapes du projet

### 1. Configuration initiale

Le fichier `docker-compose.yml` définit les services :
- Service PHP/Apache
- Service MySQL pour la base de données
- Volumes persistants pour les données
- Réseaux personnalisés pour la communication inter-services

### 2. Interface phpMyAdmin

Une fois l'application lancée, vous pouvez accéder à phpMyAdmin pour gérer votre base de données MySQL :

![phpMyAdmin Interface]
<img src="/job-07-lamp/img/phpmyadmin.png">

phpMyAdmin vous permet de :
- Créer et modifier des bases de données
- Gérer les tables et les colonnes
- Exécuter des requêtes SQL
- Importer/exporter des données

### 3. Configuration PDO

Le projet utilise **PDO** (PHP Data Objects) pour interagir avec la base de données MySQL :

![Configuration PDO]
<img src="/job-07-lamp/img/pdo.png">

PDO fournit :
- Une abstraction de base de données cohérente
- Des requêtes préparées pour plus de sécurité
- La gestion des erreurs par exceptions
- Support de multiples drivers de base de données

### 4. Informations PHP

L'application affiche les informations PHP disponibles :

![Informations PHP]
<img src="/job-07-lamp/img/phpinfo.png">

Cette page montre :
- La version de PHP en cours d'exécution
- Les extensions installées
- La configuration du serveur
- Les variables d'environnement

### 5. Affichage des données

Le résultat final affiche les données récupérées de la base de données :

![Affichage des données]
<img src="/job-07-lamp/img/show.png">

Cette étape démontre :
- La connexion réussie à MySQL
- La récupération des données via PDO
- L'affichage formaté des résultats
- La communication complète entre PHP et MySQL

## Démarrage du projet

```bash
docker-compose up -d
```

Cela lancera tous les services en arrière-plan.

## Accès à l'application

- **Application web** : http://localhost:8080
- **phpMyAdmin** : http://localhost:8081

## Arrêt du projet

```bash
docker-compose down
```

