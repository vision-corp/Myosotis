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
                <form>
                    <div class="form-group">
                        <label for="titre" class="col-form-label">Titre :</label>
                        <input type="text" class="form-control" id="titreModif">
                    </div>
                    <div class="form-group">
                        <label for="sousTitre" class="col-form-label">Sous-titre :</label>
                        <input type="text" class="form-control" id="sousTitreModif">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pos">Sélectionnez un ordre d'affichage</label>
                            <input type="number" class="form-control" id="pos" name="pos">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image">Insérer une image</label>
                            <input type="file" class="form-control-file" id="imageModif">
                            <p id="imageActuelle">Image actuelle : <span id="imageActuelleModif">Aucune image</span></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Contenu:</label>
                        <textarea id="txtEditor"></textarea>
                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>tinymce.init({selector:'textarea'});</script>
                    </div>
                    <input type="hidden" id="idModif" name="idModif">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#modalModificationSection').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        let titre = button.data('titre');
        let sousTitre = button.data('sousTitre');

        console.log(sousTitre)
        document.getElementById('titreModif').value = titre;
        document.getElementById('sousTitreModif').value = sousTitre;
        // document.getElementById('sousTitreModif').value = sousTitre;
        // document.getElementById('imageActuelleModif').innerText = image;
        // document.getElementById('pos').value = pos;
        // document.getElementById('idModif').value = id;
        // tinymce.activeEditor.setContent(txtEditor);
        // console.log(image)
    })
    // document.getElementById("formModif").addEventListener("submit", function (e) {
    //
    //     var erreur;
    //     var modifTitreModif = document.getElementById("titreModif")
    //     var modifSousTitreModif = document.getElementById("sousTitreModif")
    //     var modifImageModif = document.getElementById("imageModif")
    //     //var modifTxtEditorModif = document.getElementById("txtEditorModif")
    //     var modifTxtEditorModif = tinymce.activeEditor.getContent()
    //     console.log(modifTxtEditorModif)
    //     if ((!modifTxtEditorModif) || (modifTxtEditorModif.length <= 2)) {
    //         erreur = "Veuillez ajouter du contenu à l'article."
    //     }
    //
    //     if ((!modifSousTitreModif.value) || (modifSousTitreModif.value.length <= 2)) {
    //         erreur = "Veuillez renseigner un sous-titre valide."
    //     }
    //
    //     if ((!modifTitreModif.value) || (modifTitreModif.value.length <= 2)) {
    //         erreur = "Veuillez renseigner un titre valide."
    //     }
    //
    //     if (erreur) {
    //         e.preventDefault()
    //         document.getElementById("messageModif").className = "alert alert-danger"
    //         document.getElementById("messageModif").role = "alert"
    //         document.getElementById("messageModif").innerHTML = erreur
    //     } else {
    //         document.getElementById("messageModif").className = ""
    //         document.getElementById("messageModif").role = ""
    //         document.getElementById("messageModif").innerHTML = ""
    //     }
    //
    // })

</script>