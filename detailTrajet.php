        <?php 
            require_once __DIR__. "/templates/header.php";
            require_once __DIR__. "/lib/php/getCovoitDetails.php";
            require_once __DIR__. "/lib/php/getMarquesListe.php";
            require_once __DIR__. "/lib/php/getEnergiesListe.php";

            $selectedCovoit = $_GET['trajet'];
            $covoitInfos = getCovoitDetails($pdo, $selectedCovoit);
            $marquesListe = getMarquesListe($pdo);
            $energiesListe = getEnergiesListe($pdo);
        ?>

        <main class="mainContainer d-flex flex-column col align-items-center justify-content-center">
            <div class="row mainBgColor padding-20 round-15 text-white font-12 container-fluid m-0 margin-b-40">
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0 font-16">Le trajet</p>
                    </div>
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0 fontweight-700 font-24 text-uppercase"><?php echo($covoitInfos[0]['lieu_depart']) ?> > <?php echo($covoitInfos[0]['lieu_arrivee']) ?></p>
                    </div>
                    <div class="row p-0 m-0 gap-10 margin-b-20 d-flex align-items-center justify-content-center">
                        <p class="col-auto p-0 m-0">Départ le <?php echo($covoitInfos[0]['date_depart']) ?> à <?php echo($covoitInfos[0]['heure_depart']) ?></p>
                        <p class="col-auto p-0 m-0">-</p>
                        <p class="col-auto p-0 m-0">Arrivée le <?php echo($covoitInfos[0]['date_arrivee']) ?> à <?php echo($covoitInfos[0]['heure_arrivee']) ?></p>
                        <p class="col-auto p-0 m-0">-</p>
                        <p class="col-auto p-0 m-0"><?php echo($covoitInfos[0]['duree']) ?> heures</p>
                    </div>
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0"><?php if($covoitInfos[0]['nb_place_dispo'] == 1){echo($covoitInfos[0]['nb_place_dispo']); ?> place restante <?php } else {echo($covoitInfos[0]['nb_place_dispo']); ?> places restantes <?php }?></p>
                    </div>
                    <?php if($covoitInfos[0]['energie'] == 3){ ?>
                        <div class="row gap-10 margin-b-20">
                            <p class="col-auto p-0 m-0">Voyage écologique</p>
                            <img class="col-auto leafIcon p-0 m-0" src="assets/icons/leaf.svg" alt="Icone de feuille">
                        </div>
                    <?php } else {} ?>
                    <div class="row margin-b-20">
                        <p class="col-auto p-0 m-0"><?php echo($covoitInfos[0]['prix_personne'] +2) ?> crédits</p>
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
                        <p class="col-auto p-0 m-0 font-16">Ce que les utilisateurs ont pensé de <?php echo($covoitInfos[0]['pseudo']) ?> :</p>
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