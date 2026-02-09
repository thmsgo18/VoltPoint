# VoltPoint

[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Symfony](https://img.shields.io/badge/Symfony-7.0-000000?style=for-the-badge&logo=symfony&logoColor=white)](https://symfony.com/)
[![Doctrine](https://img.shields.io/badge/Doctrine-ORM-FC6A31?style=for-the-badge&logo=doctrine&logoColor=white)](https://www.doctrine-project.org/)
[![Docker](https://img.shields.io/badge/Docker-Compose-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com/)
[![MariaDB](https://img.shields.io/badge/MariaDB-10.5-003545?style=for-the-badge&logo=mariadb&logoColor=white)](https://mariadb.org/)
[![Nginx](https://img.shields.io/badge/Nginx-Latest-009639?style=for-the-badge&logo=nginx&logoColor=white)](https://nginx.org/)
[![Twig](https://img.shields.io/badge/Twig-3.0-339933?style=for-the-badge&logo=twig&logoColor=white)](https://twig.symfony.com/)

> [English version of README](README.md)

## Présentation

**VoltPoint** est une application web complète conçue pour localiser et gérer les stations de recharge pour véhicules électriques. Construite avec des technologies PHP modernes, elle offre une interface intuitive permettant aux utilisateurs de trouver des points de recharge à proximité et aux administrateurs de gérer l'infrastructure de recharge.

## Présentation du Projet

[![Présentation VoltPoint](https://img.youtube.com/vi/RtGMPg_iEkQ/maxresdefault.jpg)](https://youtu.be/RtGMPg_iEkQ?si=l-ZTQJDEVgCuZzK2)

*Cliquez sur la miniature pour regarder la présentation du projet sur YouTube*

## Fonctionnalités

- **Carte Interactive** : Localisez les stations de recharge grâce aux services de géolocalisation
- **Gestion des Stations** : Suivez les points de recharge, les unités EVSE et les connecteurs
- **Suivi des Sessions** : Surveillez les sessions de recharge et l'historique des utilisateurs
- **Gestion des Utilisateurs** : Contrôle d'accès basé sur les rôles (Admin/Utilisateur)
- **Tableau de Bord** : Interface administrative pour gérer les stations et les utilisateurs
- **Authentification Sécurisée** : Système de connexion avec permissions basées sur les rôles

## Stack Technologique

### Backend
- **PHP 8.2+** : PHP moderne avec typage strict
- **Symfony 7.0** : Framework PHP full-stack
- **Doctrine ORM** : Abstraction de base de données et ORM
- **Twig** : Moteur de templates pour les vues

### Base de Données
- **MariaDB 10.5** : Système de gestion de base de données relationnelle

### Infrastructure
- **Docker** : Environnement de développement conteneurisé
- **Nginx** : Serveur web haute performance
- **Docker Compose** : Orchestration multi-conteneurs

### Bibliothèques Clés
- **Geocoder PHP (Nominatim)** : Services de géolocalisation
- **Nucleos Maps Bundle** : Cartographie interactive
- **Symfony Forms** : Gestion et validation des formulaires
- **Symfony Security** : Authentification et autorisation

## Démarrage Rapide

### Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :

- [Docker](https://www.docker.com/) (20.10+)
- [Docker Compose](https://docs.docker.com/compose/) (1.29+)
- [Git](https://git-scm.com/)

### Installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/thmsgo18/VoltPoint.git
   cd VoltPoint
   ```

2. **Configurer les variables d'environnement**
   ```bash
   cp .env .env.local
   # Éditez .env.local avec votre configuration
   ```

3. **Démarrer les conteneurs Docker**
   ```bash
   docker-compose up -d
   ```

4. **Installer les dépendances**
   ```bash
   docker exec -it php-nginx composer install
   ```

5. **Exécuter les migrations de base de données**
   ```bash
   docker exec -it php-nginx php bin/console doctrine:migrations:migrate
   ```

6. **Créer un utilisateur administrateur**
   ```bash
   docker exec -it php-nginx php bin/console app:create-admin
   ```

7. **Accéder à l'application**
   
   Ouvrez votre navigateur et accédez à : `http://localhost`

## Structure du Projet

```
VoltPoint/
├── config/              # Configuration de l'application
├── docker/              # Fichiers de configuration Docker
│   ├── nginx/          # Configuration Nginx
│   └── php/            # Dockerfile et config PHP
├── migrations/          # Migrations de base de données
├── public/             # Assets publics (CSS, JS, point d'entrée)
├── src/                # Code source de l'application
│   ├── Command/        # Commandes console
│   ├── Controller/     # Contrôleurs
│   ├── Entity/         # Entités Doctrine
│   ├── Form/           # Types de formulaires
│   ├── Repository/     # Dépôts de données
│   └── Security/       # Logique d'authentification
├── templates/          # Templates Twig
├── translations/       # Traductions i18n
├── var/               # Cache et logs
└── vendor/            # Dépendances Composer
```

## Commandes Disponibles

### Développement

```bash
# Exécuter les migrations de base de données
docker exec -it php-nginx php bin/console doctrine:migrations:migrate

# Créer un utilisateur administrateur
docker exec -it php-nginx php bin/console app:create-admin

# Créer un type de connecteur
docker exec -it php-nginx php bin/console app:create-connector

# Vider le cache
docker exec -it php-nginx php bin/console cache:clear
```

### Docker

```bash
# Démarrer les conteneurs
docker-compose up -d

# Arrêter les conteneurs
docker-compose down

# Voir les logs
docker-compose logs -f

# Redémarrer les services
docker-compose restart
```

## Rôles Utilisateurs

- **Admin** : Accès complet pour gérer les stations, les utilisateurs et voir toutes les sessions de recharge
- **Utilisateur** : Peut consulter les stations, démarrer/arrêter les sessions de recharge et voir l'historique personnel

## Schéma de Base de Données

L'application utilise les entités principales suivantes :

- **User** : Utilisateurs de l'application avec authentification
- **Station** : Emplacements physiques des stations de recharge
- **EVSE** : Unités d'équipement d'alimentation pour véhicules électriques
- **Connector** : Connecteurs de recharge individuels
- **RechargeSession** : Enregistrements des sessions de recharge

## Points d'Accès

L'application fournit une interface web pour :

- Inscription et authentification des utilisateurs
- Navigation et recherche de stations
- Gestion des sessions de recharge
- Tableau de bord administratif

## Documentation Supplémentaire

Pour plus d'informations détaillées sur le projet, veuillez consulter :

- [Guide de configuration Docker](Readme%20Docker.md)
- Documentation d'architecture dans **Présentation.pdf**

## Contribution

Les contributions sont les bienvenues ! N'hésitez pas à soumettre une Pull Request.

1. Forkez le projet
2. Créez votre branche de fonctionnalité (`git checkout -b feature/NouvelleFonctionnalite`)
3. Committez vos changements (`git commit -m 'Ajout d'une nouvelle fonctionnalité'`)
4. Poussez vers la branche (`git push origin feature/NouvelleFonctionnalite`)
5. Ouvrez une Pull Request

## Licence

Ce projet est un logiciel propriétaire.

## Auteur

**Thomas** - [thmsgo18](https://github.com/thmsgo18)

## Remerciements

- OpenStreetMap & Nominatim pour les services de géolocalisation
- Les communautés Symfony et PHP
- Tous les contributeurs de ce projet

---

Fait avec passion pour la communauté des véhicules électriques
