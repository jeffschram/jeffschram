/**

   Skyline Dev Guides
--------------------------------------------------------

  Show grid guides by pressing the 'g' key

  NOTE: The relative CSS for this plugin should be in vendor/_grid-guide.scss

-----------------------------------------------------  */

// ADD MARKUP TO PAGE
$("body").prepend("<section class='skyline-grid-guide'><div class='skyline-grid-guide__baselines'></div><div class='container'></div></section>");
$(".skyline-grid-guide .container").append("<div class='gw sm-six-up md-twelve-up'/>");
var i = 0,
    glines = "";
while( i < 12) {
  i++;
  glines += "<div class='g'><div></div></div>";
}

var i = 0,
    blines = "";
while( i < 800) {
  i++;
  blines += "<div class='skyline-grid-guide__baseline'></div>";
}

$(".skyline-grid-guide .container .gw").append(glines);
$(".skyline-grid-guide .skyline-grid-guide__baselines").append(blines);

// TOGGLE ACTIVE CLASS
$(document).keypress(function(e){
  if(e.which == 103) {
    $("body").toggleClass("skyline-dev-guides");
  }
});