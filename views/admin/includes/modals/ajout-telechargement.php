<div class="modal fade" id="modalAjoutTelechargement" tabindex="-1" role="dialog" aria-labelledby="modalAjoutTelechargement" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalAjoutTelechargement" id="modalAjoutTelechargement">Ajouter un téléchargement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/?controller=parametres&mode=admin&action=addTel" id="formAjout">

                    <div class="" role="" id="messageAjout"></div>
                  <!-- Fin message d'erreur -->
                  
                    <div class="form-group">
                        <label for="prenom" class="col-form-label">Titre</label>
                        <input type="text" class="form-control" name="titre" id="titre">
                    </div>
                    <div class="form-group">
                        <label for="nom" class="col-form-label">Lien</label>
                        <input type="text" class="form-control" name="lien" id="lien">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    <input type="submit" name="valider" class="btn btn-primary">
                </div>
                </form>

        </div>
    </div>
</div>

<script>

    // document.getElementById("formAjout").addEventListener("submit", function (e) {
    //
    //     var erreur;
    //     var modifPrenomAjout = document.getElementById("prenomAjout")
    //     var modifNomAjout = document.getElementById("nomAjout")
    //     var modifPseudoAjout = document.getElementById("pseudoAjout")
    //     var modifEmailAjout = document.getElementById("emailAjout")
    //
    //     if ((!modifEmailAjout.value) || (modifEmailAjout.value.length <= 2)) {
    //         erreur = "Veuillez renseigner un email valide."
    //     }
    //
    //     if ((!modifPseudoAjout.value) || (modifPseudoAjout.value.length <= 2)) {
    //         erreur = "Veuillez renseigner un pseudo valide."
    //
    //     }
    //
    //     if ((!modifNomAjout.value) || (modifNomAjout.value.length <= 2)) {
    //         erreur = "Veuillez renseigner un nom valide ."
    //     }
    //
    //     if ((!modifPrenomAjout.value) || (modifPrenomAjout.value.length <= 2)) {
    //         erreur = "Veuillez renseigner un prénom valide."
    //     }
    //
    //     if (erreur) {
    //         e.preventDefault()
    //         document.getElementById("messageAjout").className = "alert alert-danger"
    //         document.getElementById("messageAjout").role = "alert"
    //         document.getElementById("messageAjout").innerHTML = erreur
    //     } else {
    //         document.getElementById("messageAjout").className = ""
    //         document.getElementById("messageAjout").role = ""
    //         document.getElementById("messageAjout").innerHTML = ""
    //     }

    })
</script>
