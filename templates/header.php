<?php require_once __DIR__. "/../lib/php/session.php" ?>

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
                                <a class="navbar-text" aria-label="Espace personnel" href="espace_perso.php">Mon compte</a>
                            </li>
                            <li class="col navbar-item navMenu-listItem">
                                <a class="navbar-text" aria-label="Page de déconnexion" href="Deconnexion.php">Déconnexion</a>
                            </li>
                        <?php } else { ?>
                            <li class="col navbar-item navMenu-listItem">
                                <a class="navbar-text" aria-label="Page de connexion" href="Connexion.php">Connexion</a>
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