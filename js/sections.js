// Section Modification
$('#modalModificationSection').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget);
    let titre = button.data('titre');
    let sousTitre = button.data('soustitre');
    let image = button.data('image');
    let pos = button.data('pos');
    let id = button.data('id');
    let contenu = button.data('contenu');

    document.getElementById('titreModif').value = titre;
    document.getElementById('sousTitreModif').value = sousTitre;
    document.getElementById('imageActuelleModif').innerText = image;
    document.getElementById('posModif').value = pos;
    document.getElementById('idModif').value = id;
    tinymce.activeEditor.setContent(contenu);
})
document.getElementById("formModif").addEventListener("submit", function (e) {

    let modifTitreModif = document.getElementById("titreModif")
    let modifSousTitreModif = document.getElementById("sousTitreModif")
    let modifImageModif = document.getElementById("imageModif")
    let modifPosModif = document.getElementById("posModif")
    let modifTxtEditorModif = tinymce.activeEditor.getContent()

    if (!modifTitreModif.value || !modifSousTitreModif.value || !modifPosModif.value) {
        e.preventDefault()
        document.getElementById("messageModif").className = "alert alert-danger"
        document.getElementById("messageModif").role = "alert"
        document.getElementById("messageModif").innerHTML = "Veuillez remplir tous les champs vous ajouter une section."
    } else {
        document.getElementById("messageModif").className = ""
        document.getElementById("messageModif").role = ""
        document.getElementById("messageModif").innerHTML = ""
    }

})

// Section ajout

$('#modalAjoutSection').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget);
    let page = button.data('page')
    document.getElementById('page').value = page
})
document.getElementById("formAjout").addEventListener("submit", function (e) {

    let modifTitreModif = document.getElementById("titre")
    let modifSousTitreModif = document.getElementById("sousTitre")
    let modifImageModif = document.getElementById("image")
    let modifPosModif = document.getElementById("pos")
    // let modifTxtEditorModif = tinymce.activeEditor.getContent()

    if (!modifTitreModif.value || !modifSousTitreModif.value || !modifPosModif.value || !modifImageModif.value) {
        e.preventDefault()
        document.getElementById("messageModif").className = "alert alert-danger"
        document.getElementById("messageModif").role = "alert"
        document.getElementById("messageModif").innerHTML = "Veuillez remplir tous les champs vous ajouter une section."
    } else {
        document.getElementById("messageModif").className = ""
        document.getElementById("messageModif").role = ""
        document.getElementById("messageModif").innerHTML = ""
    }

})
