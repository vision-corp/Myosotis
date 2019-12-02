<!-- header -->
<?php require 'includes/header.php'; ?>

    <!-- Corps de la page -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

      <!-- Entête corps -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

       <div class="container">
           <div class="row">
               <div class="col">
                   <!-- Titre de la page -->
                   <h1 class="h2">Modifier le contenu du site</h1>
                   <!-- Boutons d'actions sur la page -->

               </div>

               <!-- Bouton de retour -->
               <div class="btn-toolbar mb-2 mb-md-0">
                   <div class="btn-group mr-2">
                       <form action="/admin/admin-articles.php">
                           <input type="submit" name="retour" value="retour" class="btn btn-sm btn-outline-secondary">
                       </form>
                   </div>
               </div>


           </div>
            <br/>

           <!-- Liste des posibilités de personalisaiton du site -->
           <form action="">
               <div class="row">
                   <h5>Accueil</h5>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple1">Exemple 1</label>
                           <textarea id="exemple1" class="form-control"></textarea>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple1">Exemple 2</label>
                           <textarea id="exemple2" class="form-control"></textarea>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple3">Exemple 3</label>
                           <textarea id="exemple1" class="form-control"></textarea>
                       </div>
                   </div>
               </div>
               <br/><br/>
               <div class="row">
                   <h5>Présentation</h5>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple4">Exemple 4</label>
                           <textarea id="exemple1" class="form-control"></textarea>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple5">Exemple 5</label>
                           <textarea id="exemple1" class="form-control"></textarea>
                       </div>
                   </div>
               </div>

               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple5">Exemple 5</label>
                           <textarea id="exemple1" class="form-control"></textarea>
                       </div>
                   </div>
               </div>
               <br/><br/>
               <div class="row">
                   <h5>Contact</h5>
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple5">Exemple 5</label>
                           <textarea id="exemple1" class="form-control"></textarea>
                       </div>
                   </div>
               </div>

               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple5">Exemple 5</label>
                           <textarea id="exemple1" class="form-control"></textarea>
                       </div>
                   </div>
               </div>

               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <label for="exemple5">Exemple 5</label>
                           <textarea id="exemple1" class="form-control"></textarea>
                       </div>
                   </div>
               </div>

               <div class="row">
                   <div class="col-md-12">
                       <div class="form-group">
                           <button type="button" class="btn btn-primary">Modifier</button>

                       </div>
                   </div>
               </div>
           </form>
       </div>

    </main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
