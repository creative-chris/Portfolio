

if($(window).width() < 350) {
			window.location.replace('error.html');
}


$.ajax({
 statusCode: {
  404: function() {
    window.location.replace('error.html');
  }
 }
});