<?php 

class Learner{
    
    private $id;
    private $poisson;
    private $description;
    private $age;
    private $couleur;
    private $size;

    public function getId(){
        return $this->id;
    }
    public function getPoisson(){
        return $this->poisson;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getAge(){
        return $this->age;
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function getSize(){
        return $this->size;
    }

    public function setId(int $id){
        if(is_int($id)):
            return $this->id = $id;
        endif;
    }
    public function setPoisson(string $poisson){
        if(is_string($poisson)):
            return $this->poisson = $poisson;
        endif;
    }
    public function setDescription(string $description){
        if(is_string($description)):
            return $this->description = $description;
        endif;
    }
    public function setAge(int $age){
        if(is_int($age)):
            return $this->age = $age;
        endif;
    }
    public function setCouleur(string $couleur){
        if(is_string($couleur)):
            return $this->couleur = $couleur;
        endif;
    }
    public function setSize(int $size){
        if(is_int($size)):
            return $this->size = $size;
        endif;
    }
}