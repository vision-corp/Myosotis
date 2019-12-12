<div class="modal fade" id="modalAjoutSection" tabindex="-1" role="dialog" aria-labelledby="modalAjoutSection" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalAjoutSection" id="modalAjoutSection">Ajouter une section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/?controller=contenu&mode=admin" method="POST">
                    <div class="form-group">
                        <label for="identifiant" class="col-form-label">Identifiant :</label>
                        <input type="text" class="form-control" id="identifiant">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="col-form-label">Titre :</label>
                        <input type="text" class="form-control" id="titre">
                    </div>
                    <div class="form-group">
                        <label for="sousTitre" class="col-form-label">Sous-titre :</label>
                        <input type="text" class="form-control" id="sousTitre">
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pos">Sélectionnez un ordre d'affichage</label>
                            <input type="number" class="form-control" id="pos">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image">Insérer une image</label>
                            <input type="file" class="form-control-file" id="image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Contenu:</label>
                        <textarea id="txtEditor"></textarea>
                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>tinymce.init({selector:'textarea'});</script>
                    </div>

                    <input type="hidden" id="page" value="accueil">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <input type="submit" value="Valider" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>