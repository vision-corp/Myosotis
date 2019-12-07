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
                <form>
                    <div class="form-group">
                        <label for="prenom" class="col-form-label">Prénom :</label>
                        <input type="text" class="form-control" id="prenom">
                    </div>
                    <div class="form-group">
                        <label for="nom" class="col-form-label">Nom :</label>
                        <input type="text" class="form-control" id="nom">
                    </div>
                    <div class="form-group">
                        <label for="pseudo" class="col-form-label">Pseudo :</label>
                        <input type="text" class="form-control" id="pseudo">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email :</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <a href="" class="text-danger" data-toggle="modal" data-target="#modifMdp">Réinitialiser le mot de passe</a>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </div>
</div>
