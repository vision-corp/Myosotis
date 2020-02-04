<div class="modal fade" id="modalAjoutUtilisateur" tabindex="-1" role="dialog" aria-labelledby="modalAjoutUtilisateur" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalAjoutUtilisateur" id="modalAjoutUtilisateur">Ajouter un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/?controller=utilisateurs&mode=admin&action=newUser" id="formAjout">

                  <!-- Message d'erreur si tous les champs ne sont pas valides -->
                    <?php
                        //if ($modal == "ajoutUser") {
                        if ($modal == "ccc") {
                     ?>
                        <div class="alert alert-danger" role="alert">
                          Veuillez remplir tous les champs !
                        </div>
                     <?php
                      }
                      ?>

                    <div class="" role="" id="messageAjout"></div>
                  <!-- Fin message d'erreur -->
                  
                    <div class="form-group">
                        <label for="prenom" class="col-form-label">Prénom :</label>
                        <input type="text" class="form-control" name="prenom" id="prenomAjout">
                    </div>
                    <div class="form-group">
                        <label for="nom" class="col-form-label">Nom :</label>
                        <input type="text" class="form-control" name="nom" id="nomAjout">
                    </div>
                    <div class="form-group">
                        <label for="pseudo" class="col-form-label">Pseudo :</label>
                        <input type="text" class="form-control" name="pseudo" id="pseudoAjout">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email :</label>
                        <input type="email" class="form-control" name="email" id="emailAjout">
                    </div>
                    <input type="hidden" name="id" id="idAjout" value="">
                    <p class="text-center">
                        <i>
                            Un mot de passe généré aléatoirement sera envoyé par mail à l'utilisateur qui devra ensuite le modifier en se connectant à son compte.
                        </i>
                    </p>
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

    document.getElementById("formAjout").addEventListener("submit", function (e) {

        var erreur;
        var modifPrenomAjout = document.getElementById("prenomAjout")
        var modifNomAjout = document.getElementById("nomAjout")
        var modifPseudoAjout = document.getElementById("pseudoAjout")
        var modifEmailAjout = document.getElementById("emailAjout")

        if ((!modifEmailAjout.value) || (modifEmailAjout.value.length <= 2)) {
            erreur = "Veuillez renseigner un email valide."
        }

        if ((!modifPseudoAjout.value) || (modifPseudoAjout.value.length <= 2)) {
            erreur = "Veuillez renseigner un pseudo valide."

        }

        if ((!modifNomAjout.value) || (modifNomAjout.value.length <= 2)) {
            erreur = "Veuillez renseigner un nom valide ."
        }

        if ((!modifPrenomAjout.value) || (modifPrenomAjout.value.length <= 2)) {
            erreur = "Veuillez renseigner un prénom valide."
        }

        if (erreur) {
            e.preventDefault()
            document.getElementById("messageAjout").className = "alert alert-danger"
            document.getElementById("messageAjout").role = "alert"
            document.getElementById("messageAjout").innerHTML = erreur
        } else {
            document.getElementById("messageAjout").className = ""
            document.getElementById("messageAjout").role = ""
            document.getElementById("messageAjout").innerHTML = ""
        }

    })
</script>
