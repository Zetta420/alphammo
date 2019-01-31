<?php
/**
 * Système de connexion via API en PHP pour UnrealEngine
 * Développé par Zetta420
 * Nécessitant l'asset "VaRest" pour le blueprint
 */
define("successLoginMessage", "Connexion acceptée.");
define("usernameNotRegisteredMessage", "Vous ne vous êtes pas enregistré.");
define("passwordInvalidMessage", "Le mot de passe entré est incorrect.");
define("errorMethodIsEmpty", "Erreur, vous devez entrer une méthode.");
define("errorMethodDoesntExists", "Erreur, la méthode entrée n'existe pas. Entrez methodsList pour avoir la liste des méthodes.");
define("errorLoginCheckUserEmpty", "Erreur, vous devez entrer un nom d'utilisateur.");
define("errorLoginCheckPasswordEmpty", "Erreur, vous devez entrer un mot de passe.");
define("methodsList", "<h1>Voici la liste des méthodes:</h1><br><p>- loginCheck => Permet d'authentifier un utilisateur avec comme paramètres : user; password</p>");