<?php
    function getCovoitDetails(PDO $pdo, $trajet):array|bool
    {
        $query = $pdo->prepare("SELECT covoiturage.*, utilisateur.pseudo, utilisateur.photo, preference.*, voiture.* FROM covoiturage
                                JOIN utilisateur ON utilisateur.user_id = covoiturage.chauffeur
                                JOIN preference ON preference.user_id = covoiturage.chauffeur
                                JOIN voiture ON voiture_id = covoiturage.vehicule
                                WHERE covoiturage_id = :trajet");
        $query->bindValue(':trajet', $trajet, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        if($result){
            return $result;
        }
        else {
            return false;
        }
    }