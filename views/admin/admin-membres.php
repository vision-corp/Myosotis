<!--*
    * admin-membres.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Permet d'afficher les membres du sites, les modifier ou les supprimer
-->

<!-- Inclusion de l'entête et du script du modal de suppression d'article -->
<?php require 'includes/header.php';
require 'includes/modals/suppr-membre-modal.php';
require 'includes/modals/ajout-utilisateur.php';
require 'includes/modals/modifiaction-membre.php';
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
                <a class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalAjoutUtilisateur">Ajouter un utilisateur</a>
            </div>
        </div>
    </div>

    <!-- Liste des utilisateurs -->
    <table class="table">
        <tbody>
          <?php
            foreach ($users as $user)
            {
           ?>
        <tr>
            <td><?php echo $user[2] ?></td>
            <td class="cellModifier"><a href="#" data-toggle="modal" data-target="#modalModificationMembre" data-id="<?php echo $user[5]; ?>" data-prenom="<?php echo $user[0]; ?>" data-nom="<?php echo $user[1]; ?>" data-pseudo="<?php echo $user[2]; ?>" data-email="<?php echo $user[3]; ?>" >Modifier</a></td>
            <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#suppreMembreModal" data-id="<?php echo $user[5]; ?>">Supprimer</a></td>
        </tr>
        <?php
          }
         ?>
        </tbody>
    </table>
</main>

<?php
  if ($modal == "ajoutUser") {
    echo "<script>$('#modalAjoutUtilisateur').modal('show')</script>";
  }
  if ($modal == "modifyUser") {
    //echo "<script>$('#modalModificationMembre').modal('show')</script>";
  }
?>


<!-- footer -->
<?php require 'includes/footer.php'; ?>
