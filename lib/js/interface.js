const connexionForm = $("#connexionForm");
const registerForm = $("#registerForm");
const connexionTitle = $("#connexionTitle");
const registerTitle = $("#registerTitle");


// Switch formulaire de connexion / formulaire d'inscription
// Event click
$(connexionTitle).on("click", function(){
    showConnexionForm();
});

$(registerTitle).on("click", function(){
    showRegisterForm();
});
// Fonctions déclenchées par le click
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
//Fin du bloc