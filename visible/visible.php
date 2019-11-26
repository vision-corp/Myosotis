<?php require 'includes/header.php';?>

<!-- Carousel -->
  <div id="myCarousel" class="carousel slide pointer-event" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
      <img src="/images/batiment.jpg">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 class="titreSlide">Bienvenue sur le site de l'associaiton Les Myosotis</h1>
            <p class="shadow">Cette association accueillle des personnes dépendantes quelques jours par semaine. Cela leur permet de sortir et entretenir une vie sociale malgrès les coups dur de la vie.</p>
            <p><a class="btn btn-lg btn-success" href="/visible/presentation.php" role="button">En savoir plus</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/exterieur.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Un espace chalereur</h1>
            <p>Les accueillis disposent de locaux récents et adaptés et d'un extérieur fleuri et aéré pour leur permettre de passer du bon temps, dans un confort plus qu'exceptionnel.</p>
            <p><a class="btn btn-lg btn-success" href="/visible/presentation.php" role="button">En savoir plus</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="/images/animation.jpg">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Des animations diversifiés</h1>
            <p>De la musique en passant par la danse ou le théâtre, un tas d'activités de qualié sont proposées et animées par un personnel hautement qualifié.</p>
            <p><a class="btn btn-lg btn-success" href="/visible/presentation.php" role="button">En savoir plus</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="/visible/visible.php" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="/visible/visible.php" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  <div class="container marketing">




    <hr class="featurette-divider">

<!-- Images textes présentation -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img src="/images/photoCorps1.JPG" class="img-thumbnail rounded">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-6 order-md-1">
        <img src="/images/photoCorps2.jpeg" class="img-thumbnail rounded">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img src="/images/photoCorps3.jpg" class="img-thumbnail rounded">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <?php require 'includes/footer.php';?>
