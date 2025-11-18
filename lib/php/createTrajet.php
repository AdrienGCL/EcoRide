<?php

    function calcDuration($startDate, $startTime, $endDate, $endTime){
        $date1 = new DateTime($startDate);
        $time1 = new DateTime($startTime);
        $date2 = new DateTime($endDate);
        $time2 = new DateTime($endTime);

        $dateTime1 = new DateTime($date1->format('Y-m-d') .' ' .$time1->format('H:i:s'));
        $dateTime2 = new DateTime($date2->format('Y-m-d') .' ' .$time2->format('H:i:s'));

        $timeDiff = abs($dateTime1->getTimestamp() - $dateTime2->getTimestamp());
        $resultDiff = date('H:i:s', $timeDiff - 3600);
        
        return $resultDiff;
    }

    function createNewTrajet(PDO $pdo, $departDate, $departHeure, $villeDepart, $arriveeDate, $arriveeHeure, $villeArrivee, $nbPlaces, $price, $userId, $carChoice):bool|array
    {
        $duration = calcDuration($departDate, $departHeure, $arriveeDate, $arriveeHeure);

        $query = $pdo->prepare("INSERT INTO covoiturage (date_depart, heure_depart, lieu_depart, date_arrivee, heure_arrivee, lieu_arrivee, duree, nb_place, nb_place_dispo, prix_personne, chauffeur, vehicule) 
                                VALUES (:dateStart, :timeStart, :placeStart, :dateEnd, :timeEnd, :placeEnd, :duration, :seats, :freeSeats, :price, :userId, :car)");
        $query->bindValue(':dateStart', $departDate, PDO::PARAM_STR);
        $query->bindValue(':timeStart', $departHeure, PDO::PARAM_STR);
        $query->bindValue(':placeStart', $villeDepart, PDO::PARAM_STR);
        $query->bindValue(':dateEnd', $arriveeDate, PDO::PARAM_STR);
        $query->bindValue(':timeEnd', $arriveeHeure, PDO::PARAM_STR);
        $query->bindValue(':placeEnd', $villeArrivee, PDO::PARAM_STR);
        $query->bindValue(':duration', $duration, PDO::PARAM_STR);
        $query->bindValue(':seats', $nbPlaces, PDO::PARAM_INT);
        $query->bindValue(':freeSeats', $nbPlaces, PDO::PARAM_INT);
        $query->bindValue(':price', $price, PDO::PARAM_STR);
        $query->bindValue(':userId', $userId, PDO::PARAM_INT);
        $query->bindValue(':car', $carChoice, PDO::PARAM_INT);
        $query->execute();
        $savedTrajet = $query->fetch(PDO::FETCH_ASSOC);
        var_dump($savedTrajet);

        if($savedTrajet){
            return $savedTrajet;
        }
        else {
            return false;
        }
    };