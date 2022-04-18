function check(input) {
	if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
	} else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	}
}

function sendemail() {
	var url = '/mail.php';

	new Ajax.Request(url, {
		onComplete: function (transport) {
			var feedback = transport.responseText.evalJSON();
			if (feedback.result == 0)
				alert('There was a problem sending the email, please try again.');
		}
	});

}

$(document).ready(function () {
	// Add smooth scrolling to all links
	$("a").on('click', function (event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 900, function () {

				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		} // End if
	});
});

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
	scrollFunction()
};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}