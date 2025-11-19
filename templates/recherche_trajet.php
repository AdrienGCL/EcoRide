<?php require_once "lib/php/search.php";

    $searchResult = [];

    if(isset($_POST['submitSearchForm'])){
        $searchResult = searchCovoit($pdo, $_POST['depart'], $_POST['destination'], $_POST['dateDepart']);
    }
?>

<div class="searchBar container-fluid mainBgColor padding-10 gap-20 d-flex flex-column align-items-center justify-content-center">
    <h2 class="searchTitle m-0 padding-10 text-white">Rechercher un trajet</h2>
    <form id="searchTrajetForm" class="row m-0 gap-30 padding-10 d-flex align-items-center justify-content-center" action="" method="post">
        <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm">
            <label class="labelForm text-white" for="depart">Départ</label>
            <div class="inputContainer d-flex padding-10 align-items-center">
                <img class="iconForm" src="assets/icons/search.png" alt="Icône de recherche">
                <input class="txtInputForm p-0" type="text" name="depart" id="depart" placeholder="Ville de départ" required>
            </div>
        </div>
        <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm">
            <label class="labelForm text-white" for="destination">Destination</label>
            <div class="inputContainer d-flex padding-10 align-items-center">
                <img class="iconForm" src="assets/icons/search.png" alt="Icône de recherche">
                <input class="txtInputForm p-0" type="text" name="destination" id="destination" placeholder="Ville d'arrivée" required>
            </div>
        </div>
        <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm">
            <label class="labelForm text-white" for="dateDepart">Date</label>
            <div class="inputContainer d-flex padding-10 align-items-center">
                <input class="txtInputForm p-0" type="date" name="dateDepart" id="dateDepart" required>
            </div>
        </div>
        <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center">
            <input id="submitSearchForm" class="submitBtn padding-10 text-white" type="submit" name="submitSearchForm" value="Rechercher">
        </div>
    </form>
</div>