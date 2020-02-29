$('#modalModifArticle').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    var titre = button.data('titre');
    var sousTitre = button.data('soustitre');
    var image = button.data('image');
    var txtEditor = button.data('txteditor');

    document.getElementById('titreModif').value = titre;
    document.getElementById('sousTitreModif').value = sousTitre;
    document.getElementById('imageactuelle').innerText = image;
    document.getElementById('idModif').value = id;
    tinymce.activeEditor.setContent(txtEditor);
    console.log(image)
})
document.getElementById("formModif").addEventListener("submit", function (e) {

    var erreur;
    var modifTitreModif = document.getElementById("titreModif")
    var modifSousTitreModif = document.getElementById("sousTitreModif")
    var modifImageModif = document.getElementById("imageModif")
    //var modifTxtEditorModif = document.getElementById("txtEditorModif")
    var modifTxtEditorModif = tinymce.activeEditor.getContent()
    console.log(modifTxtEditorModif)
    if ((!modifTxtEditorModif) || (modifTxtEditorModif.length <= 2)) {
        erreur = "Veuillez ajouter du contenu à l'article."
    }

    if ((!modifSousTitreModif.value) || (modifSousTitreModif.value.length <= 2)) {
        erreur = "Veuillez renseigner un sous-titre valide."
    }

    if ((!modifTitreModif.value) || (modifTitreModif.value.length <= 2)) {
        erreur = "Veuillez renseigner un titre valide."
    }

    if (erreur) {
        e.preventDefault()
        document.getElementById("messageModif").className = "alert alert-danger"
        document.getElementById("messageModif").role = "alert"
        document.getElementById("messageModif").innerHTML = erreur
    } else {
        document.getElementById("messageModif").className = ""
        document.getElementById("messageModif").role = ""
        document.getElementById("messageModif").innerHTML = ""
    }

})