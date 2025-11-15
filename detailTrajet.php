        <?php require_once __DIR__. "/templates/header.php"; ?>

        <main class="mainContainer d-flex flex-column col align-items-center justify-content-center">
            <div class="row mainBgColor padding-20 round-15 text-white font-12 container-fluid m-0 margin-b-40">
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0 font-16">Le trajet</p>
                    </div>
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0 fontweight-700 font-24">DEPART > ARRIVEE</p>
                    </div>
                    <div class="row p-0 m-0 gap-10 margin-b-20 d-flex align-items-center justify-content-center">
                        <p class="col-auto p-0 m-0">Départ le jj/mm/aaaa à hh/mm</p>
                        <p class="col-auto p-0 m-0">-</p>
                        <p class="col-auto p-0 m-0">Arrivée le jj/mm/aaaa à hh/mm</p>
                        <p class="col-auto p-0 m-0">-</p>
                        <p class="col-auto p-0 m-0">Durée</p>
                    </div>
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0">Places restantes</p>
                    </div>
                    <div class="row gap-10 margin-b-20">
                        <p class="col-auto p-0 m-0">Voyage écologique</p>
                        <img class="col-auto leafIcon p-0 m-0" src="assets/icons/leaf.svg" alt="Icone de feuille">
                    </div>
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0">PRIX</p>
                    </div>
                    <div class="row-auto m-0 p-0 d-flex align-items-center justify-content-center">
                        <a class="btnStyle padding-10 font-16 text-white" href="">PARTICIPER</a>
                    </div>
                </div>
            </div>
            <div class="row mainBgColor padding-20 round-15 text-white font-12 container-fluid m-0">
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0 font-16">Le conducteur</p>
                    </div>

                    <div class="row margin-b-20">
                        <?php include_once __DIR__. "/templates/carte_visite.php" ?>
                    </div>

                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0 font-16">Ce que les utilisateurs ont pensé de "Pseudo" :</p>
                    </div>
                    <div class="row container-fluid margin-b-20">
                        <div class="col m-0 p-0">
                            <?php include __DIR__. "/templates/avis.php" ?>
                            <?php include __DIR__. "/templates/avis.php" ?>
                            <?php include __DIR__. "/templates/avis.php" ?>
                            <?php include __DIR__. "/templates/avis.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php require_once __DIR__. "/templates/footer.php"; ?>