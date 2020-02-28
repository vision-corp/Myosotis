<!--*
    * _modal-MentionsLegales.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Affiche les mentions légales du site
-->
<div class="modal fade" id="modal-mentionsl-legales" tabindex="-1" role="dialog" aria-labelledby="modal-mentionsl-legales-titre" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-mentionsl-legales-titre">Mentions légales</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><?php echo $mentions['valeur'];?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Imprimer</button>
            </div>
        </div>
    </div>
</div>