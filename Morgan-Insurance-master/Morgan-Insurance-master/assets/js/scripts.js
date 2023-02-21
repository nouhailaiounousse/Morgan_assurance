
/* Navbar Scripts */
	// JS to collapse the navbar on scroll
window.onscroll = function() {scrollFunction()};
    navbar = document.getElementById("navbar");
function scrollFunction() {
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    navbar.classList.add('nav-collapse');
  } else {
    navbar.classList.remove('nav-collapse');
  }
}
/* end of Navbar */


/* Calculation Devis */
function myCalc() {
  var num_cv = document.getElementById('num_cv').value;
  var price_year = document.getElementById('price_year');
  var price_six_mounth = document.getElementById('price_six_mounth');

  var B46_E = 1944.18;
  var B78_E = 2357.901;
  var B911_E = 3659.355;

  var selection = document.getElementById('list_carburant');
  var carburant = selection.options[selection.selectedIndex].text;

  var y_n = document.getElementById('list_yn');
  var assistance = y_n.options[y_n.selectedIndex].text;

  var dangerAlert = document.getElementById('danger-notification');  

  
  
  // Essence Conditions
  if (carburant == "Essence" && num_cv >= 4 && num_cv <= 6) {
    price_year.innerHTML = B46_E +" Dhs"
    price_six_mounth.innerHTML = Math.round(B46_E-1389) +" Dhs"
  }
  else if (carburant == "Essence" && num_cv > 6 && num_cv <= 8) {
    price_year.innerHTML = B78_E +" Dhs"
    price_six_mounth.innerHTML = Math.round(B78_E-1389) +" Dhs"
  }

  else if (carburant == "Essence" && num_cv > 8 && num_cv <= 11) {
    price_year.innerHTML = B911_E +" Dhs"
    price_six_mounth.innerHTML = Math.round(B911_E-1389) +" Dhs"
  }

  // Diesel Conditions
  if (carburant == "Diesel" && num_cv >= 4 && num_cv <= 6) {
    price_year.innerHTML = ("2357.901 Dhs")
    price_six_mounth.innerHTML = ("2357.901 Dhs")
  }

  else if (carburant == "Diesel" && num_cv > 6 && num_cv <= 8) {
    price_year.innerHTML = ("2556.45 Dhs")
    price_six_mounth.innerHTML = ("2556.45 Dhs")
  }

  else if (carburant == "Diesel" && num_cv > 8 && num_cv <= 11) {
    price_year.innerHTML = ("3659.355 Dhs")
    price_six_mounth.innerHTML = ("3659.355 Dhs")
  }

  // IF OUI ASSISTANCE 
  if (assistance == "OUI") {
    price_year.innerHTML = "3567800 Dhs"
    price_six_mounth.innerHTML = (Math.round(B46_E-1389)+44,84) +" Dhs"
  }

  // Validation
  if (carburant === "-- Type Carburant --") {
      dangerAlert.style.display = 'block';
      dangerAlert.innerHTML = "Choose Cardurant Type";
      return false;
  }

  if (assistance === "-- Assistance --") {
      dangerAlert.style.display = 'block';
      dangerAlert.innerHTML = "Choose Y or N";
      return false;
  }
  
  if (num_cv < 4 || num_cv > 11 ) {
      dangerAlert.style.display = 'block';
      dangerAlert.innerHTML = "enter number Greater than 4 or equal";
      return false;
  }

  dangerAlert.style.display = 'none';
  dangerAlert.innerHTML = "";
  return "ok";

}


