<?php

    //fonction d'enregistrement dans la BD....
    function register($surname, $name, $adress, $password, $date_naiss, $genre)
    {
        global $pdo;

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        try {
            
            $query = "INSERT INTO utilisateurs (surname, name, adress, password, date_naiss, genre)
                VALUES(:surname, :name, :adress, :password, :date_naiss, :genre)";
    
        $stmt= $pdo->prepare($query);
    
        $stmt->execute([
            "surname"=>$surname,
            "name"=>$name,
            "adress"=>$adress,
            "password"=>$password_hash,
            "date_naiss"=>$date_naiss,
            "genre"=>$genre
        ]);
    
        return true;
    
        } catch (\Throwable $e) {
            return false;
        }
    }



?>