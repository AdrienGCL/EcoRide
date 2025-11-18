<?php
    function getUserCovoitListe(PDO $pdo, $userId):array|bool
    {
        $query = $pdo->prepare("SELECT * FROM covoiturage WHERE chauffeur = :driver");
        // $query->bindValue(':user', $userId, PDO::PARAM_INT);
        $query->bindValue(':driver', $userId, PDO::PARAM_INT);
        $query->execute();
        $covoitListe = $query->fetchAll(PDO::FETCH_ASSOC);

        if($covoitListe){
            return $covoitListe;
        }
        else{
            return false;
        }
    }