<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide | Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <div class="globlaContainer d-flex flex-column m-0 p-0 secondaryBgColor">
        <?php require_once "html/header.html"; ?>

        <main class="mainContainer col d-flex flex-column align-items-center justify-content-center">
            <div class="fit round-15 mainBgColor gap-20">
                <div class="row p-0 m-0 margin-b-40">
                    <h2 id="connexionTitle" class="col-auto m-0 padding-20 font-16 text-white bsizing-bb round-tl-15 mainBgColor pointer">Se connecter</h2>
                    <h2 id="registerTitle" class="col-auto m-0 padding-20 font-16 bg-white text-mainColor round-tr-15 bsizing-bb pointer">S'inscrire</h2>
                </div>
                <form id="connexionForm" class="padding-10 d-flex flex-column align-items-center justify-content-center" action="" method="post">
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="idinput">Adresse mail</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="identifiant" id="idinput" placeholder="Adresse mail">
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-10">
                        <label class="row labelForm text-white" for="mdpinput">Mot de passe</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="mdp" id="mdpinput" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center margin-b-40 gap-10">
                        <div class="col-auto text-white font-12">Mot de passe oublié ?</div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center margin-b-20">
                        <input class="submitBtn padding-10 text-white" type="submit" value="Connexion">
                    </div>
                </form>

                <form id="registerForm" class="padding-10 d-flex flex-column align-items-center justify-content-center hidden" action="" method="post">
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="pseudoinput">Nom d'utilisateur</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="pseudo" id="pseudoinput" placeholder="Nom d'utilisateur">
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="mailinput">Adresse mail</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="mail" id="mailinput" placeholder="Adresse mail">
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="mdpRegisterinput">Mot de passe</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="mdpregister" id="mdpRegisterinput" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center margin-b-20">
                        <input class="submitBtn padding-10 text-white" type="submit" value="S'inscrire">
                    </div>
                </form>
            </div>
        </main>

        <?php require_once "html/footer.html"; ?>
    </div>

    <script src="js/interface.js"></script>
</body>
</html>