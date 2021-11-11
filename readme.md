# Mini framework

## Objectif

Réaliser un petit framework php.

### Étape 1 
#### Configurer composer

1. Créer le fichier composer.json
  * Liste des dépendances de notre projet
    * ext-pdo
    * php
    * twig

2. Pour installer ces dépendances il faut utiliser la commande :

`` composer require`` le nom de la dépendance à installer

### Étape 2
#### Configuration des namespaces via composer

1. Création d'un dossier src

2. Il ne nous reste plus qu’à indiquer à composer comment auto-charger nos classes.
Pour cela, c’est dans le ``composer.json`` que cela se passe :

``"autoload": {
"psr-4": {
"App\\": "src"
}
},``

3. Pour que cela sois pris en compte pour pouvoir être appelée et
utilisé on régénère le fichier ``vendor/autoload.php`` avec la commande :
``composer dumpautoload``

### Étape 3

1. Créer le dossier de configuration à la base de données 

\src\Config

2. Création du fichier de config à la bdd

\src\Config\bdd.ini