const connexionForm = $("#connexionForm");
const registerForm = $("#registerForm");
const connexionTitle = $("#connexionTitle");
const registerTitle = $("#registerTitle");
const infosTitle = $("#infosTitle");
const covoitTitle = $("#covoitTitle");
const containerInfos = $("#containerInfos");
const containerHistorique = $("#containerHistorique");


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

// Switch informations personnelles / historique des covoiturages
$(infosTitle).on("click", function(){
    showInfoPerso();
});

$(covoitTitle).on("click", function(){
    showCovoitHist();
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

    containerInfos.removeClass("hidden");
    containerHistorique.addClass("hidden");
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

    containerHistorique.removeClass("hidden");
    containerInfos.addClass("hidden");
}

// Choix d'un rôle et modification de l'interface en conséquence
$(".inputRole").on("click",function(){
    checkRoleState(this.value);
})

function checkRoleState(value){
    if(value == 2){
        $('#prefFormPart').addClass("hidden");
        $('#vehiculeFormPart').addClass("hidden");
        $('#validateRoleForm').addClass("hidden");
    }
    else{
        $('#prefFormPart').removeClass("hidden");
        $('#vehiculeFormPart').removeClass("hidden");
        $('#validateRoleForm').removeClass("hidden");
    }
}