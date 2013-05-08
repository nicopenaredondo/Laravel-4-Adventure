function Checkemail() {
	var email = $("#email").val();
	if ((/(.+)@(.+){2,}\.(.+){2,}/.test(email)) || !email == "your@email.com") { return true; } else { alert("Enter a valid email address (eg. your@email.com)"); return false; }
}// Checkfields