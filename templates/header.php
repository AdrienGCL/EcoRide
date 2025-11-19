<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once __DIR__. "/../lib/php/pdo.php";
        require_once __DIR__. "/../lib/php/session.php"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <div class="globlaContainer d-flex flex-column m-0 p-0 secondaryBgColor position-relative">

        <header class="bg-lightbeige container-fluid">
            <div class="row">
                <div class="col">
                    <img class="logo" src="assets/images/logo_ecoride.png" alt="Logo de la société EcoRide">
                </div>
                <div class="col">
                    <nav class="navbar navbar-expand-lg container-fluid navMenu">
                        <ul class="row navbar-nav navMenu-list container-fluid">
                            <li class="col navbar-item navMenu-listItem">
                                <a class="navbar-text" aria-current="Accueil" aria-label="Page d'accueil" href="index.php">Accueil</a>
                            </li>
                            <li class="col navbar-item navMenu-listItem">
                                <a class="navbar-text" aria-label="Page de covoiturage" href="covoiturages.php">Covoiturages</a>
                            </li>
                                <?php
                                if(isset($_SESSION['user'])){ ?>
                                    <li class="col navbar-item navMenu-listItem">
                                        <a class="navbar-text" aria-label="Espace personnel" href="espace_utilisateur.php">Mon compte</a>
                                    </li>
                                    <li class="col navbar-item navMenu-listItem">
                                        <a class="navbar-text" aria-label="Page de déconnexion" href="Deconnexion.php">Déconnexion</a>
                                    </li>
                                <?php } else { ?>
                                    <li class="col navbar-item navMenu-listItem">
                                        <a class="navbar-text" aria-label="Page de connexion" href="Connexion.php">Connexion | Inscription</a>
                                    </li>
                                <?php } ?>
                                
                            
                            <li class="col navbar-item navMenu-listItem">
                                <a class="navbar-text" aria-label="Page contact" href="">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>