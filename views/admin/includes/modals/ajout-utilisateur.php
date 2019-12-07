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
                </form>
                <p class="text-center">
                    <i>
                        Un mot de passe généré aléatoirement sera envoyé par mail à l'utilisateur qui devra ensuite le modifier en se connectant à son compte.
                    </i>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </div>
</div>
