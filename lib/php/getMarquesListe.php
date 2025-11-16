<?php

function getMarquesListe(PDO $pdo):array
{
    $query = $pdo->prepare("SELECT * FROM marque");
    $query->execute();
    $marque = $query->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($marque);
    return $marque;
}