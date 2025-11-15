<?php 
    require_once __DIR__. "/templates/header.php";
    require_once __DIR__. "/lib/php/user_profile.php";

    $userPref = getUserPreferences($pdo, $_SESSION['user']['user_id']);
    $userVehicle = getUserVehicles($pdo, $_SESSION['user']['user_id']);

?>

<main class="mainContainer d-flex row align-items-center justify-content-center">
    <div class="col-3 mainBgColor padding-20 round-15" id="containerInfos">
        <div class="row bg-lightbeige p-0 m-0 round-10 margin-b-20" id="userInfos">
            <div class="col-2">
                <img class="profilePic round-4" src="assets/icons/picture.png" alt="Photo de profil">
            </div>
            <div class="col padding-10 text-mainColor">
                <div class="row">
                    <h3><?php echo($_SESSION['user']["pseudo"]);?></h3>
                </div>
                <div class="row">
                    <p class="w-auto m-0"><?php echo($_SESSION['user']["prenom"]);?></p>
                    <p class="w-auto m-0 p-0"><?php echo($_SESSION['user']["nom"]);?></p>
                </div>
                <div class="row">
                    <p class="w-auto m-0"><?php echo($_SESSION['user']["email"]);?></p>
                </div>
                <div class="row">
                    <p class="w-auto m-0"><?php echo($_SESSION['user']["telephone"]);?></p>
                </div>
                <div class="row">
                    <p class="w-auto m-0"><?php echo($_SESSION['user']["adresse"]);?></p>
                </div>
                <div class="row">
                    <p class="w-auto m-0"><?php echo($_SESSION['user']["date_naissance"]);?></p>
                </div>
            </div>
        </div>
        <div class="row bg-lightbeige p-0 m-0 round-10 margin-b-20" id="preferenceInfos">
            <div class="col padding-10 text-mainColor">
                <div class="row">
                    <h4>Mes préférences</h4>
                </div>
                <div class="row">
                    <p class="w-auto m-0">
                        <?php if($_SESSION['preferences']['fumeur'] == 0){ ?>
                            Fumeur
                        <?php } else { ?>
                            Non fumeur
                        <?php } ?>
                    </p>
                </div>
                <div class="row">
                    <p class="w-auto m-0">
                        <?php if($_SESSION['preferences']['animaux'] == 0){ ?>
                            Animaux acceptés
                        <?php } else { ?>
                            Animaux non acceptés
                        <?php } ?>
                    </p>
                </div>
                <div class="row">
                    <p class="w-auto m-0"><?php echo($_SESSION['preferences']['autre']);?></p>
                </div>
            </div>
        </div>
        <div class="row bg-lightbeige p-0 m-0 round-10 margin-b-20" id="carInfos">
            <div class="col padding-10 text-mainColor">
                <div class="row">
                    <h4>Mes véhicules</h4>
                </div>
                <?php
                    foreach($_SESSION['voitures'] as $voiture){ ?>
                        <div class="row border-div-1 round-10 m-0 padding-10">
                            <div class="row">
                                <p class="w-auto m-0"><?php echo($voiture['marque_name']);?></p>
                                <p class="w-auto m-0"><?php echo($voiture['modele']);?></p>
                            </div>
                            <div class="row">
                                <p class="w-auto m-0"><?php echo($voiture['immatriculation']);?></p>
                            </div>
                            <div class="row">
                                <p class="w-auto m-0">Energie : <?php echo($voiture['energie_name']);?></p>
                            </div>
                            <div class="row">
                                <p class="w-auto m-0">Date de première immatriculation : <?php echo($voiture['date_immatriculation']);?></p>
                            </div>
                            <div class="row">
                                <p class="w-auto m-0">Couleur : <?php echo($voiture['couleur']);?></p>
                            </div>
                            <div class="row">
                                <p class="w-auto m-0">Nombre de places : <?php echo($voiture['nb_place']);?></p>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </div>
    <div class="col mainBgColor"></div>
</main>

<?php require_once __DIR__. "/templates/footer.php"; ?>