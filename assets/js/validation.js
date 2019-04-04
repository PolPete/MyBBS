var valid;
function validateForm( form ) {
	// This function deals with validation of the form fields
	var x, y, i;
	valid = true;
	x = document.getElementsByClassName("checked-input");
	var checkForEmpty = document.getElementsByClassName("checked-input");

	if (checkForEmpty.length > 0) {
		y = document.getElementsByTagName("input");
		// A loop that checks every input field in the current tab:
		for (i = 0; i < y.length; i++) {

			// If a field is empty...
			if (y[i].value == "") {
				// add an "invalid" class to the field:
				y[i].className += " invalid";
				// and set the current valid status to false
				valid = false;
			} else if (y[i].value != ""){
				// Check regular expressions
				validateReExp(y[i]);
			}
		}
		var z = document.getElementById("textarea");
		if (z) {
			// If a field is empty...
			if (z.value == "") {
				// add an "invalid" class to the field:
				z.className += " invalid";
				// and set the current valid status to false
				valid = false;
			} else {
				validateText(z);
			}
		}
		return valid; // return the valid status
	}
}

function validateReExp(input) {
	// regular expression to match only alphanumeric characters and spaces
	var re = /[^\x00-\x7F]+/;
	var reEng = /[A-Za-z]/;
	var reKana = /^[\u30a0-\u30ff]+$/;
	// regular expression to check if there are not html special characters
	var iChars = /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/;
	// regular expression to check emails
	var reEmail = /^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/;
	// regular expression to match password
	var rePass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,15}$/;

	// Checking name
	if (input.name == "name") {
		// Empty error-box
		document.getElementById("name-error").innerHTML = "";
		// validation fails if the input doesn't match our regular expression
		if ( iChars.test( input.value ) ) {
			input.className += " invalid";
			document.getElementById("name-error").innerHTML = "ひらがな・カタカナで入力してください";
			valid = false;
		} else {
			if ( !re.test( input.value ) ) {
				if ( !reEng.test( input.value ) ) {
					input.className += " invalid";
					document.getElementById("name-error").innerHTML = "ひらがな・カタカナで入力してください";
					valid = false;
				}
			}
		}
	}

	// Checking e-mail
	if (input.name == "email") {
		// Empty error-box
		document.getElementById("email-error").innerHTML = "";
		// validation fails if the input doesn't match our regular e-mail expression
		if ( !reEmail.test( input.value ) ) {
			input.className += " invalid";
			document.getElementById("email-error").innerHTML = "正しいメールアドレスを入力してください";
			valid = false;
		}
	}

	// Checking password
	if (input.name == "pswd") {
		// Empty error-box
		document.getElementById("password-error").innerHTML = "";
		input.className -= " invalid";
		// validation fails if the input doesn't match our regular expression
		if ( !rePass.test( input.value ) ) {
			input.className += " invalid";
			document.getElementById("password-error").innerHTML = "パスワードは8〜15文字の間で、小文字・大文字・数字を組み合わせて下さい（全て半角）";
			valid = false;
		}
	}

	// Checking re-password
	if (input.name == "repswd") {
		// Empty error-box
		document.getElementById("repassword-error").innerHTML = "";
		// validation fails if the input doesn't match our regular expression
		var pwsd = document.getElementById("pswd");
		if ( input.value !== pwsd.value ) {
			input.className += " invalid";
			document.getElementById("repassword-error").innerHTML = "パスワードは間違っています";
			valid = false;
		}
	}

	return valid;
}

function validateText(input) {
	if (input.name == "content") {
		// Empty error-box
		document.getElementById("content-error").innerHTML = "";
		input.className -= " invalid";
		// validation fails if the input doesn't match word limit
		if ( input.length > '2000' ) {
			input.className += " invalid";
			document.getElementById("content-error").innerHTML = "2000文字以内入力してください";
			return valid = false;
		}
	}
}
