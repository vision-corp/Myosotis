<div class="modal fade" id="modalModifArticle" tabindex="-1" role="dialog" aria-labelledby="modalModifArticle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalModifArticle" id="modalModifArticle">Modifier un article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/?controller=articlesAdmin&mode=admin&action=modifierArticle">

                    <input type="hidden" value="" id="id" name="id"/>

                    <div class="form-group">
                        <label for="titre" class="col-form-label">Titre :</label>
                        <input type="text" class="form-control" id="titre" name="titre">
                    </div>
                    <div class="form-group">
                        <label for="sousTitre" class="col-form-label">Sous-titre :</label>
                        <input type="text" class="form-control" id="sousTitre" name="sousTitre">
                    </div>

                    <div class="form-group">
                        <label for="image">Insérer une image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Contenu:</label>
                        <textarea id="txtEditor" name="txtEditor"></textarea>
                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>tinymce.init({selector:'textarea'});</script>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <input type="submit" class="btn btn-primary" value="Valider" />
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>

    // Récupere l'id de l'article a modifier et le place un champs hidden du formulaire
    $('#modalModifArticle').on('show.bs.modal', function(event) {

        var button = $(event.relatedTarget)
        var id = button.data('id')
        document.getElementById('id').value = id
    })


</script>
