<?php 
    require_once __DIR__. "/templates/header.php";
    require_once __DIR__. "/lib/php/user_profile.php";
    require_once __DIR__. "/lib/php/getMarquesListe.php";

    $userPref = getUserPreferences($pdo, $_SESSION['user']['user_id']);
    $userVehicle = getUserVehicles($pdo, $_SESSION['user']['user_id']);
    $marquesListe = getMarquesListe($pdo);
?>

<main class="mainContainer d-flex row align-items-center justify-content-center">
    <div class="fit gap-20">
        <div class="row p-0 m-0">
            <h2 id="infosTitle" class="col-auto m-0 padding-20 font-16 text-white bsizing-bb round-tl-15 mainBgColor pointer">Mes informations</h2>
            <?php if($_SESSION['user']["role"] == 2){ ?>
            <h2 id="covoitTitle" class="col-auto m-0 padding-20 font-16 bg-white text-mainColor round-tr-15 bsizing-bb pointer">Mes covoiturages</h2>
            <?php } else { ?>
            <h2 id="covoitTitle" class="col-auto m-0 padding-20 font-16 bg-white text-mainColor bsizing-bb pointer">Mes covoiturages</h2>
            <h2 id="newTrajetTitle" class="col-auto m-0 padding-20 font-16 bg-white text-mainColor round-tr-15 bsizing-bb pointer">Nouveau trajet</h2>
            <?php } ?>
        </div>
        <div class="col mainBgColor padding-20 round-tr-b-15" id="containerInfos">
            <div class="row bg-lightbeige p-0 m-0 round-10 margin-b-20" id="userInfos">
                <div class="col-2">
                    <img class="profilePic round-4" src="assets/icons/picture.png" alt="Photo de profil">
                </div>
                <div class="col padding-20 text-mainColor">
                    <div class="row">
                        <h3 class="fw-bold"><?php echo($_SESSION['user']["pseudo"]);?></h3>
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
                <div class="rounded-circle fourthBgColor align-item-center justify-content-center d-flex flex-column rounded-icon-bg p-0 m-10 pointer">
                    <i class="bi bi-pencil-fill text-white align-item-center justify-content-center d-flex"></i>
                </div>
            </div>
            <div class="row bg-lightbeige p-0 m-0 round-10 margin-b-20" id="userInfos">
                <div>
                    <form id="roleForm" class="padding-10 d-flex flex-column align-items-center justify-content-center" action="" method="post">
                        <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center margin-b-5 txtForm text-mainColor">
                            <fieldset>
                                <label class="mx-2">
                                    <input class="inputRole" type="radio" name="role" value="1" <?php if($_SESSION['user']["role"] == 1){ ?> checked <?php } ?> required>
                                    Chauffeur
                                </label>
                                <label class="mx-2">
                                    <input class="inputRole" type="radio" name="role" value="2" <?php if($_SESSION['user']["role"] == 2){ ?> checked <?php } ?>>
                                    Passager
                                </label>
                                <label class="mx-2">
                                    <input class="inputRole" type="radio" name="role" value="3" <?php if($_SESSION['user']["role"] == 3){ ?> checked <?php } ?>>
                                    Les deux
                                </label>
                            </fieldset>
                        </div>
                        <div id="prefFormPart" class="col-12 col-md-auto p-0 align-items-center justify-content-center txtForm text-mainColor hidden">
                            <p class="fw-bold">Mes préférences</p>
                            <fieldset class="row margin-b-10">
                                <label class="col mx-2">
                                    <input class="prefFormElmt" type="radio" name="fumeur" value="1" disabled required>
                                    Fumeur
                                </label>
                                <label class="col mx-2">
                                    <input class="prefFormElmt" type="radio" name="fumeur" value="2" disabled>
                                    Non fumeur
                                </label>
                            </fieldset>
                            <fieldset class="row margin-b-40">
                                <label class="col mx-2">
                                    <input class="prefFormElmt" type="radio" name="animaux" value="1" disabled required>
                                    Animaux acceptés
                                </label>
                                <label class="col mx-2">
                                    <input class="prefFormElmt" type="radio" name="animaux" value="2" disabled>
                                    Pas d'animaux
                                </label>
                            </fieldset>
                            <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                                <label class="row labelForm text-white" for="otherPrefInput">Autres</label>
                                <div class="inputContainer d-flex padding-10 align-items-center">
                                    <!-- <input class="txtInputForm p-0" type="text" name="otherPref" id="otherPrefInput" placeholder="Autres préférences"> -->
                                     <textarea class="txtInputForm p-0" name="otherPref" id="otherPrefInput" rows="5" cols="50" placeholder="Autres préférences" maxlength="255"></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="vehiculeFormPart" class="col-12 col-md-auto p-0 d-flex flex-column align-items-center justify-content-center txtForm text-mainColor hidden">
                            <p class="fw-bold">Mon véhicule</p>
                            <fieldset class="d-flex align-items-center justify-content-center">
                                <div class="col p-0 m-2 d-flex align-items-center justify-content-center txtForm margin-b-40">
                                    <label class="row labelForm text-white" for="marqueinput">Marque</label>
                                    <div class="inputContainer d-flex padding-10 align-items-center w-100">
                                        <select class="txtInputForm p-0 w-100" name="marque" id="marqueinput" disabled required>
                                            <?php
                                                foreach($marquesListe as $i){ ?>
                                                    <option value="<?php echo($i['marque_id']) ?>"><?php echo($i['marque_name']) ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col p-0 m-2 d-flex align-items-center justify-content-center txtForm margin-b-40">
                                    <label class="row labelForm text-white" for="modeleinput">Modèle</label>
                                    <div class="inputContainer d-flex padding-10 align-items-center">
                                        <input class="vehiculeFormElmt txtInputForm p-0 " type="text" name="modele" id="modeleinput" placeholder="Modèle" disabled required>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="d-flex align-items-center justify-content-center">
                                <div class="col p-0 m-2 d-flex align-items-center justify-content-center txtForm margin-b-40">
                                    <label class="row labelForm text-white" for="immatinput">Immatriculation</label>
                                    <div class="inputContainer d-flex padding-10 align-items-center">
                                        <input class="vehiculeFormElmt txtInputForm p-0 " type="text" name="immat" id="immatinput" placeholder="XXXXXXX" disabled required>
                                    </div>
                                </div>
                                <div class="col p-0 m-2 d-flex align-items-center justify-content-center txtForm margin-b-40">
                                    <label class="row labelForm text-white" for="immatDateInput">Première immatriculation</label>
                                    <div class="inputContainer d-flex padding-10 align-items-center w-100">
                                        <input class="vehiculeFormElmt txtInputForm p-0 " type="date" name="immatDate" id="immatDateInput" placeholder="Première immatriculation" disabled required>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="d-flex align-items-center justify-content-center">
                                <div class="col p-0 m-2 d-flex align-items-center justify-content-center txtForm margin-b-40">
                                    <label class="row labelForm text-white" for="colorinput">Couleur</label>
                                    <div class="inputContainer d-flex padding-10 align-items-center">
                                        <input class="vehiculeFormElmt txtInputForm p-0 " type="text" name="couleur" id="colorinput" placeholder="Couleur" disabled required>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="d-flex align-items-center justify-content-center">
                                <div class="col p-0 m-2 d-flex align-items-center justify-content-center txtForm margin-b-40">
                                    <label class="row labelForm text-white" for="placesinput">Nombre de places</label>
                                    <div class="inputContainer d-flex padding-10 align-items-center">
                                        <input class="vehiculeFormElmt txtInputForm p-0 " type="number" name="places" id="placesinput" placeholder="5" disabled required>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div id="validateRoleForm" class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center margin-b-20 hidden">
                            <input id="submitRoleForm" class="submitBtn padding-10 text-white" type="submit" name="valider" value="Valider" disabled>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                if($_SESSION['user']["role"] == 2){}
                else { ?>
                <div class="row bg-lightbeige p-0 m-0 round-10 margin-b-20" id="preferenceInfos">
                    <div class="col padding-10 text-mainColor">
                        <div class="row">
                            <h4>Mes préférences</h4>
                        </div>
                        <div class="row">
                            <p class="w-auto m-0">
                                <?php if($_SESSION['preferences']['fumeur'] == 0){ ?>
                                    - Fumeur
                                <?php } else { ?>
                                    - Non fumeur
                                <?php } ?>
                            </p>
                        </div>
                        <div class="row">
                            <p class="w-auto m-0">
                                <?php if($_SESSION['preferences']['animaux'] == 0){ ?>
                                    - Animaux acceptés
                                <?php } else { ?>
                                    - Animaux non acceptés
                                <?php } ?>
                            </p>
                        </div>
                        <div class="row">
                            <p class="w-auto m-0">- <?php echo($_SESSION['preferences']['autre']);?></p>
                        </div>
                    </div>
                    <div class="rounded-circle fourthBgColor align-item-center justify-content-center d-flex flex-column rounded-icon-bg p-0 m-10 pointer">
                        <i class="bi bi-pencil-fill text-white align-item-center justify-content-center d-flex"></i>
                    </div>
                </div>
                <div class="row bg-lightbeige p-0 m-0 round-10" id="carInfos">
                    <div class="col padding-10 text-mainColor">
                        <div class="row d-flex justify-content-between">
                            <h4 class="col">Mes véhicules</h4>
                            <div class="rounded-circle fourthBgColor align-item-center justify-content-center d-flex flex-column rounded-icon-bg p-0 margin-r-10 pointer">
                                <i class="bi bi-plus-lg text-white align-item-center justify-content-center d-flex"></i>
                            </div>
                        </div>
                        <?php
                            foreach($_SESSION['voitures'] as $voiture){ ?>
                                <div class="row border-div-1 round-10 m-0 padding-0 margin-b-10">
                                    <div class="col padding-10">
                                        <div class="row">
                                            <p class="w-auto m-0 fw-bold"><?php echo($voiture['marque_name']);?></p>
                                            <p class="w-auto m-0 fw-bold"><?php echo($voiture['modele']);?></p>
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
                                </div>
                            <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col mainBgColor padding-20 round-tr-b-15 hidden" id="containerHistorique">
            <div class="row bg-lightbeige p-0 m-0 round-10" id="trajetHistorique">
                <div class="col padding-10 text-mainColor">
                    <?php
                        foreach($_SESSION['voitures'] as $voiture){ ?>
                            <div class="row border-div-1 round-10 m-0 padding-0 margin-b-10">
                                <div class="col padding-10">
                                    <div class="row">
                                        <p class="w-auto m-0 fw-bold"><?php echo($voiture['marque_name']);?></p>
                                        <p class="w-auto m-0 fw-bold"><?php echo($voiture['modele']);?></p>
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
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once __DIR__. "/templates/footer.php"; ?>