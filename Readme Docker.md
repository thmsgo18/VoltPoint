# symfony-project



## Prérequis

* Ubuntu ou wsl windows
* Docker
* Docker composer
* Git
* Make

## Etapes:

1. Clone le projet:
````
 git clone git@gitlab.com:bel-sami/symfony-project.git
````
2. Accéder au porjet symfony-project et lancer

````
cd  symfony-project
make up
````
cela permet de récuperer les images docker et de créer des containers (php, maraidb et pgadmin)

3. Accéder au conatiner php
````
make ssh
````
4. Lancer la commande suivante pour installer symfony
````
composer install
````

5. Sur un navigateur, tapper  'http://localhost/'

### => Une pag
