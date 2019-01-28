<?php

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