$(document).ready(function(){
    $("#1").click(function(){
      $("#c1").toggle(2000);
    });
  });



  var drop_down = document.querySelector(".drop_down");
  drop_down.addEventListener("click", function(){
document.querySelector("body").classList.toggle("active");
})