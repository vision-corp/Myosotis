<?php require "modification-mdp.php"; ?>
<div class="modal fade" id="modalModificationMembre" tabindex="-1" role="dialog" aria-labelledby="modalModificationMembre" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalModificationMembre" id="modalModificationMembre">Modifier un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/?controller=utilisateurs&mode=admin&action=modifyUser" id="formModif">
                  <!-- Message d'erreur si tous les champs ne sont pas valides -->
                            <div class="" role="" id="message"></div>


                  <!-- Fin message d'erreur -->
                    <div class="form-group">
                        <label for="prenom" class="col-form-label">Prénom :</label>
                        <input type="text" class="form-control" id="prenomModif" name="prenomModif">
                    </div>
                    <div class="form-group">
                        <label for="nom" class="col-form-label">Nom :</label>
                        <input type="text" class="form-control" id="nomModif" name="nomModif">
                    </div>
                    <div class="form-group">
                        <label for="pseudo" class="col-form-label">Pseudo :</label>
                        <input type="text" class="form-control" id="pseudoModif" name="pseudoModif">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email :</label>
                        <input type="email" class="form-control" id="emailModif" name="emailModif">
                    </div>
                    <input type="hidden" name="id" id="id" value="">
                    <a href="" class="text-danger" data-toggle="modal" data-target="#modifMdp">Réinitialiser mot de passe</a>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Annuler</button>
                      <input type="submit" class="btn btn-primary" name="Valider" />
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<script>
    $('#modalModificationMembre').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var prenom = button.data('prenom')
        var nom = button.data('nom')
        var pseudo = button.data('pseudo')
        var email = button.data('email')

        document.getElementById('prenomModif').value = prenom
        document.getElementById('nomModif').value = nom
        document.getElementById('pseudoModif').value = pseudo
        document.getElementById('emailModif').value = email
        document.getElementById('id').value = id
    })
    document.getElementById("formModif").addEventListener("submit", function (e) {

        var erreur;
        var modifPrenom = document.getElementById("prenomModif")
        var modifNom = document.getElementById("nomModif")
        var modifPseudo = document.getElementById("pseudoModif")
        var modifEmail = document.getElementById("emailModif")

        if ((!modifEmail.value) || (modifEmail.value.length <= 2)) {
            erreur = "Veuillez renseigner un email valide."
        }

        if ((!modifPseudo.value) || (modifPseudo.value.length <= 2)) {
            erreur = "Veuillez renseigner un pseudo valide."

        }
        
        if ((!modifNom.value) || (modifNom.value.length <= 2)) {
            erreur = "Veuillez renseigner un nom valide ."
        }

        if ((!modifPrenom.value) || (modifPrenom.value.length <= 2)) {
            erreur = "Veuillez renseigner un prénom valide."
        }
        console.log(modifPrenom.length)

        if (erreur) {
            e.preventDefault()
            document.getElementById("message").className = "alert alert-danger"
            document.getElementById("message").role = "alert"
            document.getElementById("message").innerHTML = erreur
        } else {
            document.getElementById("message").className = ""
            document.getElementById("message").role = ""
            document.getElementById("message").innerHTML = ""
        }

    })
</script>
