/**
 * perso.js
 * author Info2 IUT Rodez 2019-2020
 *
 * code javascript utile pour toutes les pages du site
 */

// Initialise l'utilisation des Popover de bootstrap
$(function () {
  $('[data-toggle="popover"]').popover({html:true})
  $('.toast').toast(true)
})


function msgErreur() {
  alert("Article non enregistrer")
}