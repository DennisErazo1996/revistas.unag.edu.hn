window.onload = function () {
  $("#loading").fadeOut();
};

var rellax = new Rellax(".parallax");

$(document).ready(function () {
  $("li.inicio").addClass("uk-active");
});

$(".btn-enviar").click(function (e) {
  location.href = "./normas-para-publicacion.php";
});
