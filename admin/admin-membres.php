<!-- header -->
<?php require 'includes/header.php';
      require 'includes/modals/suppr-membre-modal.php';

?>


<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <!-- Entête corps -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <!-- Titre de la page -->
    <h1 class="h2">Gestion des utilisateurs</h1>

    <!-- Boutons pour ajouter un utilisateur -->
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <form action="/admin/admin-ajout-user.php" method="post">
          <input type="submit" name="ajoutUser" value="Ajouter un utilisateur" class="btn btn-sm btn-outline-secondary">
        </form>
      </div>
    </div>
  </div>


  <!-- Liste des utilisateurs -->
  <table class="table">
    <tbody>
      <tr>
        <td>User 1</td>
        <td class="cellModifier"><a href="/admin/admin-modifier-user.php">Modifier</a></td>
        <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#suppreMembreModal">Supprimer</a></td>
      </tr>
      <tr>
        <td>User 2</td>
        <td class="cellModifier"><a href="/admin/admin-modifier-user.php">Modifier</a></td>
        <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#suppreMembreModal">Supprimer</a></td>
      </tr>
      <tr>
        <td>User 3</td>
        <td class="cellModifier"><a href="/admin/admin-modifier-user.php">Modifier</a></td>
        <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#suppreMembreModal">Supprimer</a></td>
      </tr>
      <tr>
          <td>User 4</td>
          <td class="cellModifier"><a href="/admin/admin-modifier-user.php">Modifier</a></td>
          <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#suppreMembreModal">Supprimer</a></td>
      </tr>
      <tr>
          <td>User 5</td>
          <td class="cellModifier"><a href="/admin/admin-modifier-user.php">Modifier</a></td>
          <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#suppreMembreModal">Supprimer</a></td>
      </tr>
      <tr>
          <td>User 6</td>
          <td class="cellModifier"><a href="/admin/admin-modifier-user.php">Modifier</a></td>
          <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#suppreMembreModal">Supprimer</a></td>
      </tr>
    </tbody>
  </table>

</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
