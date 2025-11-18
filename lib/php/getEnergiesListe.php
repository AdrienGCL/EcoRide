<?php

function getEnergiesListe(PDO $pdo):array
{
    $query = $pdo->prepare("SELECT * FROM energie");
    $query->execute();
    $energie = $query->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($marque);
    return $energie;
}