<div class="modal fade" id="modalModificationSection" tabindex="-1" role="dialog" aria-labelledby="modalModificationSection" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalModificationSection" id="modalModificationSection">Modifier section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModif" method="post" action="/?controller=contenu&mode=admin&action=updateSection">
                    <!-- Message d'erreur si tous les champs ne sont pas valides -->
                    <div class="" role="" id="messageModif"></div>

                    <div class="form-group">
                        <label for="titre" class="col-form-label">Titre :</label>
                        <input type="text" class="form-control" id="titreModif" name="titre">
                    </div>
                    <div class="form-group">
                        <label for="sousTitre" class="col-form-label">Sous-titre :</label>
                        <input type="text" class="form-control" id="sousTitreModif" name="sousTitre">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pos">Sélectionnez un ordre d'affichage</label>
                            <input type="number" class="form-control" id="posModif" name="pos" min="0" max="50">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image">Insérer une image</label>
                            <input type="file" class="form-control-file" id="imageModif" name="image">
                            <p id="imageActuelle">Image actuelle : <span id="imageActuelleModif">Aucune image</span></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Contenu:</label>
                        <textarea id="txtEditor" name="contenu"></textarea>
                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>tinymce.init({selector:'textarea'});</script>
                    </div>
                    <input type="hidden" id="idModif" name="id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <input type="submit" class="btn btn-primary" value="Valider">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="/js/sections.js">

</script>