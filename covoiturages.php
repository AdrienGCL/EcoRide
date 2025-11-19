        <?php require_once __DIR__. "/templates/header.php"; ?>

        <main class="mainContainer d-flex flex-column col align-items-center justify-content-center">

            <?php require_once __DIR__. "/templates/recherche_trajet.php"; ?>

            <?php if($searchResult){ ?>
            <div class="resultContainer container padding-10 round-15 mainBgColor">
                <div class="filterContainer row gap-20 bg-lightbeige padding-10 round-10 hidden">
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
                                <?php include __DIR__. "/assets/icons/star.svg" ?>
                                <?php include __DIR__. "/assets/icons/star.svg" ?>
                                <?php include __DIR__. "/assets/icons/star.svg" ?>
                                <?php include __DIR__. "/assets/icons/star.svg" ?>
                                <?php include __DIR__. "/assets/icons/star.svg" ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searchResultContainer row m-0 p-0">
                    <?php include_once __DIR__. "/templates/recap_recherche.php"; ?>

                    <ul class="row container-fluid m-0 p-0">
                        <?php
                            foreach($searchResult as $searchResult){
                                include __DIR__. "/templates/trajet_listElement.php";
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
            
        </main>

        <?php require_once __DIR__. "/templates/footer.php"; ?>