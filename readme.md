# Mini framework

## Objectif

Réaliser un petit framework php.

### Étape 1 
Configurer composer

* Créer le fichier composer.json
  * Liste des dépendances de notre projet
    * ext-pdo
    * php
    * twig

Pour installer ces dépendances il faut utiliser la commande :

`` composer require`` le nom de la dépendance à installer

### Étape 2
Configuration des namespaces via composer

* Création d'un dossier src

Il nous reste plus qu’à indiquer à composer comment auto-charger nos classes.
Pour cela, c’est dans le ``composer.json`` que cela se passe :

``"autoload": {
"psr-4": {
"App\\": "src"
}
},``

Pour que cela sois pris en compte pour pouvoir être appelée et
utilisé on régénère le fichier ``vendor/autoload.php`` avec la commande :
``composer dumpautoload``