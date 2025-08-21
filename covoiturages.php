<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide | Rechercher un trajet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <div class="globlaContainer d-flex flex-column m-0 p-0 secondaryBgColor">
        <?php require_once "html/header.html"; ?>

        <main class="mainContainer d-flex flex-column col align-items-center justify-content-center">

            <?php require_once "html/recherche_trajet.html"; ?>

            <div class="resultContainer container padding-10 round-15 mainBgColor">
                <div class="filterContainer row gap-20 bg-lightbeige padding-10 round-10">
                    <div class="filterArea col padding-10 d-flex align-items-center justify-content-center">
                        <div class="row m-0 gap-10 d-flex align-items-center justify-content-center">
                            <p class="col-auto p-0 m-0 ">Voyage écologique</p>
                            <div class="checkbox-wrapper col p-0 m-0">
                                <input class="checkbox row m-0 p-0" type="checkbox" name="eco" id="eco">
                            </div>
                        </div>
                    </div>
                    <div class="filterArea col padding-10">
                        <div class="row m-0">
                            <label class="col p-0" for="prixMax">Prix maximum</label>
                            <p class="col p-0 m-0 text-end">100</p>
                        </div>
                        <div class="row m-0">
                            <input class="filterSlider p-0" type="range" name="prixMax" id="prixMax" min="0" max="100" value="100">
                        </div>
                    </div>
                    <div class="filterArea col padding-10">
                        <div class="row m-0">
                            <label class="col p-0" for="dureeMax">Durée maximum</label>
                            <p class="col p-0 m-0 text-end">4H</p>
                        </div>
                        <div class="row m-0">
                            <input class="filterSlider p-0" type="range" name="dureeMax" id="dureeMax" min="0" max="12" value="4">
                        </div>
                    </div>
                    <div class="filterArea col padding-10 d-flex align-items-center justify-content-center">
                        <div class="filterNote row m-0 gap-20">
                            <p class="col-auto p-0 m-0">Note</p>
                            <div class="starContainer col p-0 m-0">
                                <?php include "assets/icons/star.svg" ?>
                                <?php include "assets/icons/star.svg" ?>
                                <?php include "assets/icons/star.svg" ?>
                                <?php include "assets/icons/star.svg" ?>
                                <?php include "assets/icons/star.svg" ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searchResultContainer row m-0 p-0">
                    <?php include_once "html/recap_recherche.html"; ?>

                    <ul class="row container-fluid m-0 p-0">
                        <?php include "html/trajet_listElement.html" ?>
                        <?php include "html/trajet_listElement.html" ?>
                        <?php include "html/trajet_listElement.html" ?>
                    </ul>
                </div>
            </div>
            
        </main>

        <?php require_once "html/footer.html"; ?>
    </div>

    <script src="js/interface.js"></script>
</body>
</html>