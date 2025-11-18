<?php

    function getUserRole(PDO $pdo, $userId):array
    {
        $query = $pdo->prepare("SELECT role FROM utilisateur WHERE user_id = :user");
        $query->bindValue(':user', $userId, PDO::PARAM_INT);
        $query->execute();
        $role = $query->fetch(PDO::FETCH_ASSOC);
        if($role){
            $_SESSION['user']['role'] = $role['role'];
            return $role;
        }
        else{}
    }

    function getUserPreferences(PDO $pdo, $userId):array|bool
    {
        $query = $pdo->prepare("SELECT * FROM preference WHERE user_id = :user");
        $query->bindValue(':user', $userId, PDO::PARAM_INT);
        $query->execute();
        $pref = $query->fetch(PDO::FETCH_ASSOC);

        if($pref && count($pref) != 0){
            $_SESSION['preferences'] = $pref;
            return $pref;
        } else {
            return false;
        }
        
    };

    function getUserVehicles(PDO $pdo, $userId):array|bool
    {
        $query = $pdo->prepare("SELECT * FROM voiture 
                                JOIN marque ON marque_id = voiture.marque 
                                JOIN energie ON energie_id = energie 
                                WHERE user_id = :user");
        $query->bindValue(':user', $userId, PDO::PARAM_INT);
        $query->execute();
        $vehicle = $query->fetchAll(PDO::FETCH_ASSOC);

        if($vehicle && count($vehicle) != 0){
            $_SESSION['voitures'] = $vehicle;
            return $vehicle;
        } else {
            return false;
        }
        
    };

    function saveRole(PDO $pdo, $userId, $userRole)
    {
        $query = $pdo->prepare("UPDATE utilisateur
                                SET role = :roleValue
                                WHERE user_id = :userId");
        $query->bindValue(':roleValue', $userRole, PDO::PARAM_INT);
        $query->bindValue(':userId', $userId, PDO::PARAM_INT);
        $query->execute();
        $savedRole = $query->fetch(PDO::FETCH_ASSOC);

        if($savedRole){
            return $savedRole;
        }
        else {
            return false;
        }
    };

    function saveRequiredPref(PDO $pdo, $userId, $fumeur, $animaux, $other):bool
    {
        $query = $pdo->prepare("INSERT INTO preference (fumeur, animaux, autre, user_id)
                                VALUES (:fumeur, :animaux, :autre, :userId)");
        $query->bindValue(':fumeur', $fumeur, PDO::PARAM_INT);
        $query->bindValue(':animaux', $animaux, PDO::PARAM_INT);
        $query->bindValue(':autre', $other, PDO::PARAM_STR);
        $query->bindValue(':userId', $userId, PDO::PARAM_INT);
        $query->execute();
        // $savedPref = $query->fetch(PDO::FETCH_ASSOC);

        return true;
    };

    function saveRequiredCar(PDO $pdo, $userId, $marque, $modele, $immat, $immatDate, $energie, $couleur, $nbplaces):bool|array
    {
        /* $marque = (int)$marque;
        $energie = (int)$energie;
        $nbplaces = (int)$nbplaces; */
        $query = $pdo->prepare("INSERT INTO voiture (modele, immatriculation, energie, couleur, date_immatriculation, nb_place, marque, user_id) VALUES (:modele, :immatriculation, :energie, :couleur, :date_immatriculation, :nb_place, :marque, :userId)");
        $query->bindValue(':modele', $modele, PDO::PARAM_STR);
        $query->bindValue(':immatriculation', $immat, PDO::PARAM_STR);
        $query->bindValue(':energie', $energie, PDO::PARAM_INT);
        $query->bindValue(':couleur', $couleur, PDO::PARAM_STR);
        $query->bindValue(':date_immatriculation', $immatDate, PDO::PARAM_STR);
        $query->bindValue(':nb_place', $nbplaces, PDO::PARAM_INT);
        $query->bindValue(':marque', $marque, PDO::PARAM_INT);
        $query->bindValue(':userId', $userId, PDO::PARAM_INT);
        $query->execute();
        $savedVoiture = $query->fetch(PDO::FETCH_ASSOC);

        if($savedVoiture){
            return $savedVoiture;
        }
        else {
            return false;
        }
    };