<?php
require_once 'db.php';

function create_tables()
{
    global $pdo;
    
    $create_user = "
        CREATE TABLE Utilisateurs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        surname VARCHAR(225) NOT NULL,
        name VARCHAR(225) NOT NULL,
        adress VARCHAR(225) NOT NULL,
        password VARCHAR (225) NOT NULL,
        date_naiss VARCHAR(225) NOT NULL,
        genre VARCHAR(225) NOT NULL
    );
    ";
    try {

        $pdo->exec($create_user);
        echo "Tables  créé avec succès";
    
    } catch (PDOException $e) {
        echo "erreur lors de la creation des tables: ".$e ->getMessage();
    }
    
    }
    
    create_tables();

?>