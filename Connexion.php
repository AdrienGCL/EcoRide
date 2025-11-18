        <?php
            require_once __DIR__. "/templates/header.php";
            require_once __DIR__. "/lib/php/signup.php";
            require_once __DIR__. "/lib/php/user.php";

            $success = "Félicitations, votre inscription est terminée. Vous pouvez à présent vous connecter !";
            $fail;

            // Inscription
            // Vérification de l'envoi du formulaire
            if (isset($_POST['Signin'])){
                // Vérifie si l'utilisateur existe déjà
                $existingUser = checkExistingUser($pdo, $_POST['mail']);
                if($existingUser){
                    $fail = "Un utilisateur existe déjà pour cette adresse email.";
        ?>
                    <div class="d-flex alert alert-danger justify-content-center" role="alert">
                        <?=$fail; ?>
                    </div>
        <?php
                } else {
                    // Enregistre le nouvel utilisateur
                    $signup = saveUserInformations($pdo, $_POST['pseudo'], $_POST['mail'], $_POST['mdpregister'], $_POST['firstnameregister'], $_POST['nameregister'], $_POST['birthdateregister'], $_POST['adresseregister'], $_POST['phoneregister']);

                    if($signup){
        ?>
                        <div class="d-flex alert alert-success justify-content-center" role="alert">
                            <?=$success; ?>
                        </div>
        <?php
                    } else {
                        $fail = "Une erreur s'est produite, merci de réessayer ultérieurement.";
        ?>
                        <div class="d-flex alert alert-danger justify-content-center" role="alert">
                            <?=$fail; ?>
                        </div>
        <?php
                    }
                }
                
            };

            // Connexion
            $errors =[];

            if (isset($_POST['loginUser'])){
                $user = verifyUserLoginPassword($pdo, $_POST['identifiant'], $_POST['mdp']);

                if($user){
                    if($user["statut"] == 1){
                        $_SESSION['user'] = $user;
                        header('location: espace_utilisateur.php');
                    } else {
                        $errors[] = "Compte suspendu. Pour plus d'information, veuillez contacter le service client";
                    }
                    
                } else {
                    $errors[] = "Email ou mot de passe incorrect";
                }
            }
        ?>

        <main class="mainContainer col d-flex flex-column align-items-center justify-content-center">
            <?php
                foreach ($errors as $errors) { ?>
                <div class="alert alert-danger" role="alert">
                    <?=$errors; ?>
                </div>
            <?php } ?>

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
                            <input class="txtInputForm p-0 " type="password" name="mdp" id="mdpinput" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center margin-b-40 gap-10">
                        <div class="col-auto text-white font-12">Mot de passe oublié ?</div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center margin-b-20">
                        <input class="submitBtn padding-10 text-white" type="submit" name="loginUser" value="Connexion">
                    </div>
                </form>

                <form id="registerForm" class="padding-10 d-flex flex-column align-items-center justify-content-center hidden" action="" method="post">
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="pseudoinput">Nom d'utilisateur</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="pseudo" id="pseudoinput" placeholder="Nom d'utilisateur" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="mailinput">Adresse mail</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="email" name="mail" id="mailinput" placeholder="Adresse mail" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="mdpRegisterinput">Mot de passe</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="password" name="mdpregister" id="mdpRegisterinput" placeholder="Mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninvalid="this.setCustomValidity('Veuillez utiliser au minimum 8 caractères, 1 majuscule, 1 minuscule et 1 chiffre.')" oninput="this.setCustomValidity('')"  required>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="firstnameRegisterinput">Prénom</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="firstnameregister" id="firstnameRegisterinput" placeholder="Prénom" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="nameRegisterinput">Nom</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="nameregister" id="nameRegisterinput" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="birthdateRegisterinput">Date de naissance</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="date" name="birthdateregister" id="birthdateRegisterinput" placeholder="Date de naissance" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="adresseRegisterinput">Adresse</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="text" name="adresseregister" id="adresseRegisterinput" placeholder="Adresse" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center txtForm margin-b-40">
                        <label class="row labelForm text-white" for="phoneRegisterinput">Téléphone</label>
                        <div class="inputContainer d-flex padding-10 align-items-center">
                            <input class="txtInputForm p-0 " type="tel" name="phoneregister" id="phoneRegisterinput" placeholder="Téléphone" pattern="[0-9]{10}" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-auto p-0 d-flex align-items-center justify-content-center margin-b-20">
                        <input class="submitBtn padding-10 text-white" type="submit" name="Signin" value="S'inscrire">
                    </div>
                </form>
            </div>
        </main>

        <?php require_once __DIR__. "/templates/footer.php"; ?>