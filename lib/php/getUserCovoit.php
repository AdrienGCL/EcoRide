<?php
    function getUserCovoitAsDriver(PDO $pdo, $userId):array|bool
    {
        $query = $pdo->prepare("SELECT covoiturage.*, statuttrajet.statut_trajet_name FROM covoiturage
                                JOIN statuttrajet ON statut_id = covoiturage.statut
                                WHERE chauffeur = :driver");
        $query->bindValue(':driver', $userId, PDO::PARAM_INT);
        $query->execute();
        $covoitAsDriver = $query->fetchAll(PDO::FETCH_ASSOC);

        if($covoitAsDriver){
            return $covoitAsDriver;
        }
        else{
            return false;
        }
    }

    function getUserCovoitAsPassenger(PDO $pdo, $userId):array|bool
    {
        $query = $pdo->prepare("SELECT passager.*, covoiturage.*, utilisateur.pseudo, statuttrajet.statut_trajet_name FROM passager
                                JOIN covoiturage ON covoiturage_id = passager.trajet
                                JOIN utilisateur ON user_id = covoiturage.chauffeur
                                JOIN statuttrajet ON statut_id = covoiturage.statut
                                WHERE passager_id = :user");
        $query->bindValue(':user', $userId, PDO::PARAM_INT);
        $query->execute();
        $covoitAsPassenger = $query->fetchAll(PDO::FETCH_ASSOC);

        if($covoitAsPassenger){
            return $covoitAsPassenger;
        }
        else{
            return false;
        }
    }