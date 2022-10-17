<?php

class Manager{

    // Création de la propriété DB
    private $db;
    // Appel à la table
    private $table = 'poisson';

    // Connection à la Database avec le constructeur (initiale pour chaque objet)
    public function __construct()
    {
        $this->db = Database::db();
    }
    // Création du read fonctionnel pour n'importe qu'elle table 
    public function read()
    {
        // Requête sql
        $sql = "SELECT * FROM $this->table";
        // La db prépare sql
        $query = $this->db->prepare($sql);
        $query->execute();
        // Rétourne car c'est dans une méthode
        return $query->fetchAll();
    }
}