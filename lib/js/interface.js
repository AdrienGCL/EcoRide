const connexionForm = $("#connexionForm");
const registerForm = $("#registerForm");
const connexionTitle = $("#connexionTitle");
const registerTitle = $("#registerTitle");
const infosTitle = $("#infosTitle");
const covoitTitle = $("#covoitTitle");
const newTrajetTitle = $("#newTrajetTitle");
const containerInfos = $("#containerInfos");
const containerHistorique = $("#containerHistorique");
const containerNouveauTrajet = $("#containerNouveauTrajet");
const initialRole = $('input[name="role"]:checked').val();


// Switch formulaire de connexion / formulaire d'inscription
$(connexionTitle).on("click", function(){
    showConnexionForm();
});

$(registerTitle).on("click", function(){
    showRegisterForm();
});

function showConnexionForm(){
    connexionTitle.removeClass("bg-white");
    connexionTitle.removeClass("text-mainColor");
    connexionTitle.addClass("text-white");
    connexionTitle.addClass("mainBgColor");

    
    registerTitle.removeClass("text-white");
    registerTitle.removeClass("mainBgColor");
    registerTitle.addClass("bg-white");
    registerTitle.addClass("text-mainColor");

    connexionForm.removeClass("hidden");
    registerForm.addClass("hidden");
}

function showRegisterForm(){
    registerTitle.removeClass("bg-white");
    registerTitle.removeClass("text-mainColor");
    registerTitle.addClass("text-white");
    registerTitle.addClass("mainBgColor");

    connexionTitle.removeClass("text-white");
    connexionTitle.removeClass("mainBgColor");
    connexionTitle.addClass("bg-white");
    connexionTitle.addClass("text-mainColor");

    registerForm.removeClass("hidden");
    connexionForm.addClass("hidden");
}

// Switch informations personnelles / historique des covoiturages / Nouveau trajet
$(infosTitle).on("click", function(){
    showInfoPerso();
});

$(covoitTitle).on("click", function(){
    showCovoitHist();
});

$(newTrajetTitle).on("click", function(){
    showTrajetForm();
});

function showInfoPerso(){
    infosTitle.removeClass("bg-white");
    infosTitle.removeClass("text-mainColor");
    infosTitle.addClass("text-white");
    infosTitle.addClass("mainBgColor");

    covoitTitle.removeClass("text-white");
    covoitTitle.removeClass("mainBgColor");
    covoitTitle.addClass("bg-white");
    covoitTitle.addClass("text-mainColor");

    newTrajetTitle.removeClass("text-white");
    newTrajetTitle.removeClass("mainBgColor");
    newTrajetTitle.addClass("bg-white");
    newTrajetTitle.addClass("text-mainColor");

    containerInfos.removeClass("hidden");
    containerHistorique.addClass("hidden");
    containerNouveauTrajet.addClass("hidden");
}

function showCovoitHist(){
    covoitTitle.removeClass("bg-white");
    covoitTitle.removeClass("text-mainColor");
    covoitTitle.addClass("text-white");
    covoitTitle.addClass("mainBgColor");

    infosTitle.removeClass("text-white");
    infosTitle.removeClass("mainBgColor");
    infosTitle.addClass("bg-white");
    infosTitle.addClass("text-mainColor");

    newTrajetTitle.removeClass("text-white");
    newTrajetTitle.removeClass("mainBgColor");
    newTrajetTitle.addClass("bg-white");
    newTrajetTitle.addClass("text-mainColor");

    containerHistorique.removeClass("hidden");
    containerInfos.addClass("hidden");
    containerNouveauTrajet.addClass("hidden");
}

function showTrajetForm(){
    newTrajetTitle.removeClass("bg-white");
    newTrajetTitle.removeClass("text-mainColor");
    newTrajetTitle.addClass("text-white");
    newTrajetTitle.addClass("mainBgColor");

    infosTitle.removeClass("text-white");
    infosTitle.removeClass("mainBgColor");
    infosTitle.addClass("bg-white");
    infosTitle.addClass("text-mainColor");

    covoitTitle.removeClass("text-white");
    covoitTitle.removeClass("mainBgColor");
    covoitTitle.addClass("bg-white");
    covoitTitle.addClass("text-mainColor");

    containerHistorique.addClass("hidden");
    containerInfos.addClass("hidden");
    containerNouveauTrajet.removeClass("hidden");
}

// Choix d'un rôle et modification de l'interface en conséquence
$(".inputRole").on("click",function(){
    checkRoleState(this.value);
})

function checkRoleState(value){
    if(initialRole != value){
        if(value == 2){
            $('.hiddenFormPart').addClass("hidden");
            $(".hiddenUserInfos").addClass("hidden");
        
            $('.prefFormElmt').attr('disabled', true);
            $('.vehiculeFormElmt').attr('disabled', true);
        
        }
        else{
            $('.hiddenFormPart').removeClass("hidden");
            $('.hiddenUserInfos').removeClass("hidden");

            $('.prefFormElmt').attr('disabled', false);
            $('.vehiculeFormElmt').attr('disabled', false);
        }
        $("#validateRoleForm").removeClass("hidden");
        $('#submitRoleForm').attr('disabled', false);
    }
    else{
        $("#validateRoleForm").addClass("hidden");
        $('#submitRoleForm').attr('disabled', true);
    }
}