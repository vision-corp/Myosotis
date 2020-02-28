document.getElementById("formSlide").addEventListener("submit", function (e){
    let titreSlide1 = document.getElementById("titreSlide1");
    let titreSlide2 = document.getElementById("titreSlide2");
    let titreSlide3 = document.getElementById("titreSlide3");
    let sousTitreSlide1 = document.getElementById("sousTitreSlide1");
    let sousTitreSlide2 = document.getElementById("sousTitreSlide2");
    let sousTitreSlide3 = document.getElementById("sousTitreSlide3");
    let imageSlide1 = document.getElementById("imageSlide1");
    let imageSlide2 = document.getElementById("imageSlide2");
    let imageSlide3 = document.getElementById("imageSlide3");

    if (!titreSlide1.value || !titreSlide2.value || !titreSlide2.value ||
        !sousTitreSlide1.value || !sousTitreSlide2.value || !sousTitreSlide3.value ||
        !imageSlide1.value || !imageSlide2.value || !imageSlide3.value) {
        e.preventDefault()
        document.getElementById("messageSlide").className = "alert alert-danger"
        document.getElementById("messageSlide").role = "alert"
        document.getElementById("messageSlide").innerHTML = "Veuillez remplir tous les champs de la page pour continuer"
    } else {
        document.getElementById("messageSlide").className = ""
        document.getElementById("messageSlide").role = ""
        document.getElementById("messageSlide").innerHTML = ""
    }
})

document.getElementById("formContactParam").addEventListener("submit", function (e){
    let email = document.getElementById("email");
    let telephone = document.getElementById("telephone");
    let adresse = document.getElementById("adresse");
    let cp = document.getElementById("cp");
    let ville = document.getElementById("ville");
    let pays = document.getElementById("pays");
    let mentionsContact = document.getElementById("txtEditor");

    if (!email.value || !telephone.value || !adresse.value ||
        !cp.value || !ville.value || !pays.value || !mentionsContact.value) {
        e.preventDefault()
        document.getElementById("messageContact").className = "alert alert-danger"
        document.getElementById("messageContact").role = "alert"
        document.getElementById("messageContact").innerHTML = "Veuillez remplir tous les champs de la page pour continuer"
    } else {
        document.getElementById("messageContact").className = ""
        document.getElementById("messageContact").role = ""
        document.getElementById("messageContact").innerHTML = ""
    }
})

document.getElementById("messageMentionsLegales").addEventListener("submit", function (e){
    let mentionsLegales = document.getElementById("txtEditor");

    if (!mentionsLegales.value) {
        e.preventDefault()
        document.getElementById("messageContact").className = "alert alert-danger"
        document.getElementById("messageContact").role = "alert"
        document.getElementById("messageContact").innerHTML = "Veuillez remplir tous les champs de la page pour continuer"
    } else {
        document.getElementById("messageContact").className = ""
        document.getElementById("messageContact").role = ""
        document.getElementById("messageContact").innerHTML = ""
    }
})