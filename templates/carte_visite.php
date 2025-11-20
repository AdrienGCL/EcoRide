<div class="row container-fluid p-0 m-0 bg-lightbeige round-10 text-mainColor padding-10 font-12">
    <div class="col-auto m-0 p-0 d-flex align-items-center justify-content-center">
        <img class="profilePic round-4" src="assets/icons/picture.png" alt="Photo de profil">
    </div>
    <div class="col">
        <div class="row p-0 m-0 margin-b-10">
            <p class="p-0 m-0 font-24 text-uppercase"><?php echo($covoitInfos[0]['pseudo']) ?></p>
        </div>
        <div class="profileNote row p-0 m-0 gap-10 margin-b-10 d-flex align-items-center">
            <div class="starContainer col-auto p-0 m-0">
                <?php include "assets/icons/star.svg" ?>
                <?php include "assets/icons/star.svg" ?>
                <?php include "assets/icons/star.svg" ?>
                <?php include "assets/icons/star.svg" ?>
                <?php include "assets/icons/star.svg" ?>
            </div>
            <!-- <p class="col-auto p-0 m-0">Nb de trajets</p> -->
        </div>
        <div class="row p-0 m-0 gap-10 margin-b-10">
            <p class="col-auto p-0 m-0 text-uppercase">
                <?php
                foreach($marquesListe as $marque){
                    if($marque['marque_id'] == $covoitInfos[0]['marque']){ echo($marque['marque_name']); }
                }
                ?>
            </p>
            <p class="col-auto p-0 m-0"><?php echo($covoitInfos[0]['modele']) ?></p>
            <p class="col-auto p-0 m-0">
                <?php
                foreach($energiesListe as $energie){
                    if($energie['energie_id'] == $covoitInfos[0]['energie']){ echo($energie['energie_name']); }
                }
                ?>
            </p>
            <p class="col-auto p-0 m-0">Couleur <?php echo($covoitInfos[0]['couleur']) ?></p>
        </div>
        <div class="row p-0 m-0">
            <div class="col p-0 m-0">
                <p class="row p-0 m-0">Préférences :</p>
                <ul class="row m-0">
                    <li class="p-0"><?php if($covoitInfos[0]['fumeur'] == 0){ echo('Fumeur'); } else { echo('Non fumeur'); } ?></li>
                    <li class="p-0"><?php if($covoitInfos[0]['animaux'] == 0){ echo('Animaux acceptés'); } else { echo('Animaux non acceptés'); } ?></li>
                    <li class="p-0"><?php if($covoitInfos[0]['autre']){ echo($covoitInfos[0]['autre']); } else {} ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>