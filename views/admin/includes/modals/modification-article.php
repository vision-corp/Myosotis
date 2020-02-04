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
                <form method="POST" action="/?controller=articlesAdmin&mode=admin&action=modifierArticle" id="formModif">

                    <!-- Message d'erreur si tous les champs ne sont pas valides -->
                    <div class="" role="" id="messageModif"></div>


                    <!-- Fin message d'erreur -->
                    <div class="form-group">
                        <label for="titre" class="col-form-label">Titre :</label>
                        <input type="text" class="form-control" id="titreModif" name="titreModif">
                    </div>
                    <div class="form-group">
                        <label for="sousTitre" class="col-form-label">Sous-titre :</label>
                        <input type="text" class="form-control" id="sousTitreModif" name="sousTitreModif">
                    </div>

                    <div class="form-group">
                        <label for="image">Insérer une image</label>
                        <input type="file" class="form-control-file" id="imageModif" name="imageModif">
                        <p>Image actuelle: <span id="imageactuelle">texte</span></p>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Contenu:</label>
                        <textarea id="txtEditorModif" name="txtEditorModif"></textarea>
                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>tinymce.init({selector:'textarea'});</script>
                    </div>
                    <input type="hidden" name="idModif" id="idModif">

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
    })
    document.getElementById("formModif").addEventListener("submit", function (e) {

        var erreur;
        var modifTitreModif = document.getElementById("titreModif")
        var modifSousTitreModif = document.getElementById("sousTitreModif")
        var modifImageModif = document.getElementById("imageModif")
        var modifTxtEditorModif = document.getElementById("txtEditorModif")

        if ((!modifTxtEditorModif.value) || (modifTxtEditorModif.value.length <= 2)) {
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
</script>
