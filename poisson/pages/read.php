<?php 
    require_once 'class/Learner.php';
    require_once 'class/Manager.php';
    require_once 'config/Database.php';
    $manager = new Manager();
    var_dump($manager->read()); 
    ?>