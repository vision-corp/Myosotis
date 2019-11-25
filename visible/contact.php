<?php require 'includes/header.php';?>


  <div class="container marketing">
    <br/>
    <h1>Nous contacter</h1>
      <div class="row">
        <div class="col-md-6">
          <form>

            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="nom" aria-describedby="aideNom" placeholder="John Doe">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="john.doe@mail.fr">
            </div>
            <div class="form-group">
              <label for="object">Objet</label>
              <input type="text" class="form-control" id="object" aria-describedby="aiudeObjet" placeholder="Ex :Demande d'accueil">
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" rows="8" cols="80" class="form-control"></textarea>
              </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">
              J'accepte les   <a href="#" class="">conditions d'utilisation</a>
              </label>
            </div>
            <button type="submit" class="btn btn-success">Envoyer</button>
          </form>
        </div>

        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23551.649258475583!2d2.557043796550918!3d44.3635656386586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b27d9d6875ad6d%3A0x9b8b9a75d5317ec2!2sIUT%20(Institut%20Universitaire%20de%20Technologie)!5e0!3m2!1sfr!2sfr!4v1574679373671!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    <hr class="featurette-divider">
  </div><!-- /.container -->

  <?php require 'includes/footer.php';?>
