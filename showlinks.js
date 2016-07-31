$(document).ready(function () {
    var counter = 10;
    var id = setInterval(function() {
       counter--;
       if(counter > 0) {
            var msg = 'You can downnload the file in ' + counter + ' seconds';
            $('#notice').text(msg);
       } else {
            $('#notice').hide();
            $('#download').show();
            clearInterval(id);
      }
    }, 1000);
});
