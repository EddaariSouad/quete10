<?php 

// Intégration de la BDD
class Database{
    // Méthode mise en statique pour ne pas se répéter
    public static function db(){
        return new PDO(
        'mysql:host=localhost;dbname=poisson;charset=UTF8',
        'root',
        // Fonction plus stricte pour détecter les erreurs liées à la BDD
        '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    }
}