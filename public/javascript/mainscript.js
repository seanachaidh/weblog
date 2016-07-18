//Een globale variable. Misschien geen goed idee
var images = ['blank.JPG', 'bliksem.JPG', 'boom.JPG', 'gras.JPG',
			  'op_weg.JPG', 'veld.JPG', 'ver_weg.JPG'];
var current = 1;

function imageCycle() {
	
	$('#topbox').fadeOut(800, function() {
		var l = images.length;
		if (current == l) {
			current = 0;
		}
		$('#topbox').css('background', "url('afbeeldingen/" + images[current] + "') no-repeat center center fixed");
		$('#topbox').css('background-size', 'cover');
		$('#topbox').fadeIn(800);
		current = current + 1;
	});
	
	
}
