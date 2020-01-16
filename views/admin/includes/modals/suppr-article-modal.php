<!-- Modal -->
<div class="modal fade" id="supprArticleModal" tabindex="-1" role="dialog" aria-labelledby="supprArticleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Suppression article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Voulez-vous vraiment supprimer cet article ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <a href="#" class="btn btn-danger" id="suppr">Supprimer</a>
      </div>
    </div>
  </div>
</div>

<script>
    $('#supprArticleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        document.getElementById('suppr').href='?controller=ArticlesAdmin&mode=admin&action=supprimerArticle&id=' + id
    })
</script>