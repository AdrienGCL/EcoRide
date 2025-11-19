<?php
    function searchCovoit(PDO $pdo, $start, $end, $date):array|bool
    {
        $query = $pdo->prepare("SELECT covoiturage.*, utilisateur.pseudo, voiture.energie FROM covoiturage
                                JOIN utilisateur ON user_id = covoiturage.chauffeur
                                JOIN voiture ON voiture_id = covoiturage.vehicule
                                WHERE lieu_depart = :depart AND lieu_arrivee = :arrivee AND date_depart = :startDate");
        $query->bindValue(':depart', $start, PDO::PARAM_STR);
        $query->bindValue(':arrivee', $end, PDO::PARAM_STR);
        $query->bindValue(':startDate', $date, PDO::PARAM_STR);
        $query->execute();
        $searchResult = $query->fetchAll(PDO::FETCH_ASSOC);

        if($searchResult){
            return $searchResult;
        }
        else {
            return false;
        }
    }