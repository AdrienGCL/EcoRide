<?php

    function getUserPreferences(PDO $pdo, $userId):array
    {
        $query = $pdo->prepare("SELECT * FROM preference WHERE user_id = :user");
        $query->bindValue(':user', $userId, PDO::PARAM_INT);
        $query->execute();
        $pref = $query->fetch(PDO::FETCH_ASSOC);

        if($pref){
            $_SESSION['preferences'] = $pref;
            return $pref;
        } else {}
        
    }

    function getUserVehicles(PDO $pdo, $userId):array
    {
        $query = $pdo->prepare("SELECT * FROM voiture 
                                JOIN marque ON marque_id = voiture.marque 
                                JOIN energie ON energie_id = energie 
                                WHERE user_id = :user");
        $query->bindValue(':user', $userId, PDO::PARAM_INT);
        $query->execute();
        $vehicle = $query->fetchAll(PDO::FETCH_ASSOC);

        if($vehicle){
            $_SESSION['voitures'] = $vehicle;
            return $vehicle;
        } else {}
        
    }