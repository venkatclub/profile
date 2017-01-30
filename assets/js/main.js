// adding js for canvas
var canvas = document.querySelector('#canvas');
var ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

for (var i = 0; i < 50; i++) {
  for (var j = 0; j < 50; j++) {
    // Math.floor(255 - 42.5 * i) - first mutliple and adds
    // so if i and 6 values more then some value( here 6 ) it way not work as expected
    // ctx.fillStyle = 'rgb('+ Math.floor(255 - 42.5 * i) +','+ Math.floor(255 - 42.5 * j) +',0)';
    var n = 18;
    var m = 18;

    ctx.fillStyle = 'rgb('+ i*n +',\
                          '+ j*m +',\
                          0 \
                          )';
    ctx.fillRect(j*25+20, i*25+20, 25, 25);
  }
}
