<?php
/**
 * Système de connexion via API en PHP pour UnrealEngine
 * Développé par Zetta420
 * Nécessitant l'asset "VaRest" pour le blueprint
 */
class functions
{

    public function db(){
        try {
            $db = new PDO('mysql:host='.dbHost.';dbname='.dbName, dbUser, dbPass);
            return $db;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}