var canvas = document.getElementById("canvas");

if (canvas.getContext) {
  var ctx = canvas.getContext('2d');
  // drawing code here
  ctx.fillStyle = "#FF0000";
  ctx.fillRect(0, 0, 150, 75);
} else {
  // canvas-unsupported code here
}
