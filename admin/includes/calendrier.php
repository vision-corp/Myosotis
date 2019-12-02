<?php require 'modals/ajout-evenement.php'; ?>

<div class="container-fluid">
  <header>
    <h4 class="display-4 mb-4 text-center">Novembre 2019</h4>
    <div class="row d-none d-sm-flex p-1 bg-dark text-white">
      <h5 class="col-sm p-1 text-center">Lundi</h5>
      <h5 class="col-sm p-1 text-center">Mardi</h5>
      <h5 class="col-sm p-1 text-center">Mercredi</h5>
      <h5 class="col-sm p-1 text-center">Jeudi</h5>
      <h5 class="col-sm p-1 text-center">Vendredi</h5>
      <h5 class="col-sm p-1 text-center">Samedi</h5>
      <h5 class="col-sm p-1 text-center">Dimanche</h5>

    </div>
  </header>
  <div class="row border border-right-0 border-bottom-0">
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">29</span>
        <small class="col d-sm-none text-center text-muted">Dimanche</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">30</span>
        <small class="col d-sm-none text-center text-muted">Lundi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">31</span>
        <small class="col d-sm-none text-center text-muted">Mardi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">
          <a href="" class="text-dark" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" text-decoration-none>1</a>
        </span>
        <small class="col d-sm-none text-center text-muted">Mercredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">
          <a href="" class="text-dark" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" text-decoration-none>2</a>
        </span>
        <small class="col d-sm-none text-center text-muted">Jeudi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">
          <a href="" class="text-dark" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" text-decoration-none>3</a>
        </span>
        <small class="col d-sm-none text-center text-muted">Vendredi</small>
        <span class="col-1"></span>
      </h5>

      <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
         title="John <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
         data-toggle="popover"
         title="Utilisateur 1"
         data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">John Doe </a>

        <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-warning text-white"
           title="Animation musical <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
           data-toggle="popover"
           title="Utilisateur 1"
           data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Animation musicale</a>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">
          <a href="" class="text-dark" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" text-decoration-none>4</a>
        </span>
        <small class="col d-sm-none text-center text-muted">Samedi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="w-100"></div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">5</span>
        <small class="col d-sm-none text-center text-muted">Dimanche</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">6</span>
        <small class="col d-sm-none text-center text-muted">Lundi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">7</span>
        <small class="col d-sm-none text-center text-muted">Mardi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">8</span>
        <small class="col d-sm-none text-center text-muted">Mercredi</small>
        <span class="col-1"></span>
      </h5>
        <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
           title="Tanguy Fenouillot <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
           data-toggle="popover"
           title="Utilisateur 1"
           data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Tanguy Fenouillot</a>

        <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
           title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
           data-toggle="popover"
           title="Utilisateur 1"
           data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">9</span>
        <small class="col d-sm-none text-center text-muted">Jeudi</small>
        <span class="col-1"></span>
      </h5>

        <div class="scroll d-none d-sm-block">
            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-warning text-white"
               title="Animation musical <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Animation musicale</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-warning text-white"
               title="Animation musical <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Animation musicale</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-warning text-white"
               title="Animation musical <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Animation musicale</a>
        </div>

        <div class="d-block d-sm-none">
            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-warning text-white"
               title="Animation musical <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Animation musicale</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-warning text-white"
               title="Animation musical <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Animation musicale</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
               title="Jean-Charles Luans <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Jean-Charles Luans</a>

            <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-warning text-white"
               title="Animation musical <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
               data-toggle="popover"
               title="Utilisateur 1"
               data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Animation musicale</a>
        </div>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">10</span>
        <small class="col d-sm-none text-center text-muted">Vendredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">11</span>
        <small class="col d-sm-none text-center text-muted">Samedi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="w-100"></div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">12</span>
        <small class="col d-sm-none text-center text-muted">Dimanche</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">13</span>
        <small class="col d-sm-none text-center text-muted">Lundi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">14</span>
        <small class="col d-sm-none text-center text-muted">Mardi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">15</span>
        <small class="col d-sm-none text-center text-muted">Mercredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">16</span>
        <small class="col d-sm-none text-center text-muted">Jeudi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">17</span>
        <small class="col d-sm-none text-center text-muted">Vendredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">18</span>
        <small class="col d-sm-none text-center text-muted">Samedi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="w-100"></div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">19</span>
        <small class="col d-sm-none text-center text-muted">Dimanche</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">20</span>
        <small class="col d-sm-none text-center text-muted">Lundi</small>
        <span class="col-1"></span>
      </h5>
        <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white"
           title="Florian Hyver <a href='' class='text-dark text-right close' data-dismiss='toast' aria-label='Close'>X</a>"
           data-toggle="popover"
           title="Utilisateur 1"
           data-content="Texte associé au travail qu'effectuera la personne, ainsi que les horaires.<br/><br/>
                        <a href='admin-modifier-evenement.php'>Modifier</a>
            ">Florian Hyver</a>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">21</span>
        <small class="col d-sm-none text-center text-muted">Mardi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">22</span>
        <small class="col d-sm-none text-center text-muted">Mercredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">23</span>
        <small class="col d-sm-none text-center text-muted">Jeudi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">24</span>
        <small class="col d-sm-none text-center text-muted">Vendredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">25</span>
        <small class="col d-sm-none text-center text-muted">Samedi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="w-100"></div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">26</span>
        <small class="col d-sm-none text-center text-muted">Dimanche</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">27</span>
        <small class="col d-sm-none text-center text-muted">Lundi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">28</span>
        <small class="col d-sm-none text-center text-muted">Mardi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">29</span>
        <small class="col d-sm-none text-center text-muted">Mercredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
      <h5 class="row align-items-center">
        <span class="date col-1">30</span>
        <small class="col d-sm-none text-center text-muted">Jeudi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">1</span>
        <small class="col d-sm-none text-center text-muted">Vendredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">2</span>
        <small class="col d-sm-none text-center text-muted">Samedi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="w-100"></div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">3</span>
        <small class="col d-sm-none text-center text-muted">Dimanche</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">4</span>
        <small class="col d-sm-none text-center text-muted">Lundi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">5</span>
        <small class="col d-sm-none text-center text-muted">Mardi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">6</span>
        <small class="col d-sm-none text-center text-muted">Mercredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">7</span>
        <small class="col d-sm-none text-center text-muted">Jeudi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">8</span>
        <small class="col d-sm-none text-center text-muted">Vendredi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
    <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
      <h5 class="row align-items-center">
        <span class="date col-1">9</span>
        <small class="col d-sm-none text-center text-muted">Samedi</small>
        <span class="col-1"></span>
      </h5>
      <p class="d-sm-none">Pas d'événements</p>
    </div>
  </div>
  </div>
