  $(".ss2").keyup(function(e){
    this.value = this.value.replace(/[^0-9\.]/g, '');
  });

  const input = document.querySelector(".test_inpit");
  input.onpaste = (e) => e.preventDefault();
  input.addEventListener("keyup", e => {
  if (e.keyCode !== 8 && e.keyCode != 46) {
    let newValue = e.target.value.replace(/\D/g, "");
    newValue = newValue.replace(/(.{4})/g, "$1 ");
    e.target.value = newValue;
  }
});

$(document).ready(function(){
  var mouseX, mouseY;
  var ww = $( window ).width();
  var wh = $( window ).height();
  var traX, traY;
  $(document).mousemove(function(e){
    mouseX = e.pageX;
    mouseY = e.pageY;
    traX = ((4 * mouseX) / 570) + 40;
    traY = ((4 * mouseY) / 570) + 50;
    console.log(traX);
    $(".title").css({"background-position": traX + "%" + traY + "%"});
  });

});

