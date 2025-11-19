<div class="trajet_listElement row container-fluid padding-10 gap-10 round-10 text-white font-12">
    <div class="col-auto m-0 p-0 d-flex align-items-center justify-content-center">
        <img class="profilePic round-4" src="assets/icons/picture.png" alt="Photo de profil">
    </div>
    <div class="col p-0 m-0">
        <div class="resultPseudo row p-0 m-0 fontweight-700 font-14 margin-b-10"><?php echo($searchResult['pseudo']); ?></div>
        <!-- <div class="resultNote row p-0 m-0 margin-b-10">
            <div class="starContainer col p-0 m-0">
                <?php include "assets/icons/star.svg" ?>
                <?php include "assets/icons/star.svg" ?>
                <?php include "assets/icons/star.svg" ?>
                <?php include "assets/icons/star.svg" ?>
                <?php include "assets/icons/star.svg" ?>
            </div>
        </div> -->
        <div class="resultInfos row p-0 m-0 gap-10 margin-b-10">
            <p class="col-auto p-0 m-0"><?php if($searchResult['nb_place_dispo'] == 1){echo($searchResult['nb_place_dispo']); ?> place restante <?php } else {echo($searchResult['nb_place_dispo']); ?> places restantes <?php }?></p>
            <p class="col-auto p-0 m-0">Le <?php echo($searchResult['date_depart']); ?></p>
            <p class="col-auto p-0 m-0">Départ <?php echo($searchResult['heure_depart']); ?></p>
            <p class="col-auto p-0 m-0">Arrivée <?php echo($searchResult['heure_arrivee']); ?></p>
        </div>
        <?php if($searchResult['energie'] == 3){ ?>
            <div class="resultEco row p-0 m-0 gap-10 d-flex align-items-center margin-b-10">
                <p class="col-auto p-0 m-0">Voyage écologique</p>
                <img class="col-auto leafIcon p-0 m-0" src="assets/icons/leaf.svg" alt="Icone de feuille">
            </div>
        <?php } ?>
        <div class="resultPrix row p-0 m-0 font-16">
            <p class="col-auto p-0 m-0"><?php echo($searchResult['prix_personne'] + 2); ?> crédits</p>
        </div>
    </div>
    <div class="col-auto m-0 p-0 d-flex align-items-center justify-content-center">
        <a class="detailsBtn btnStyle padding-10 font-14 text-white" href="detailTrajet.php?trajet=<?php echo($searchResult['covoiturage_id']); ?>">Détails</a>
    </div>
</div>