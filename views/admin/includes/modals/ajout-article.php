<div class="modal fade" id="modalAjoutArticle" tabindex="-1" role="dialog" aria-labelledby="modalAjoutArticle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalAjoutArticle" id="modalAjoutArticle">Ajouter un article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/?controller=articlesAdmin&mode=admin&action=ajoutArticle" id="formAjout">
                    <div class="" role="" id="messageAjout"></div>
                    <div class="form-group">
                        <label for="titre" class="col-form-label">Titre :</label>
                        <input type="text" class="form-control" id="titre"  name="titre">
                    </div>
                    <div class="form-group">
                        <label for="sousTitre" class="col-form-label">Sous-titre :</label>
                        <input type="text" class="form-control" id="sousTitre" name="sousTitre">
                    </div>

                    <div class="form-group">
                        <label for="image">Insérer une image</label>
                        <input name="image" type="file" id="image" class="form-control-file"/>

                    </div>

                    <input type="hidden" name="MAX_FILE_SIZE" value="40000000" />

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

    document.getElementById("formAjout").addEventListener("submit", function (e) {

        let erreur;
        let modifTitre = document.getElementById("titre")
        let modifSousTitre = document.getElementById("sousTitre")
        let modifImage = document.getElementById("image")
        //let modifTxtEditor = document.getElementById("txtEditor")
        let modifTxtEditor = tinymce.activeEditor.getContent()
        if ((!modifTxtEditor) || (modifTxtEditor.length <= 2)) {
              erreur = "Veuillez ajouter du contenu à l'article."
          }

        if ((!modifImage.value) || (modifImage.value.length <= 2)) {
            erreur = "Veuillez ajouter une image."

        }

        if ((!modifSousTitre.value) || (modifSousTitre.value.length <= 2)) {
            erreur = "Veuillez renseigner un sous-titre valide."
        }

        if ((!modifTitre.value) || (modifTitre.value.length <= 2)) {
            erreur = "Veuillez renseigner un titre valide."
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