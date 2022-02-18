console.log("js is working");

function login() {
	console.log("login called");
	var uname = document.getElementsByName("uname")[0];
	var mail = document.getElementsByName("mail")[0];
	var pwd = document.getElementsByName("pwd")[0];
	var cpwd = document.getElementsByName("cpwd")[0];
	console.log(uname);
	console.log(cpwd);
	var filter =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var filterpwd = /^(?=.*[0-9])(?=.*[&$#@])(?=.*[a-z])(?=.*[A-Z])+$/;
	if (uname.value == "") {
		alert("Please provide your name!");
		uname.focus();
		return false;
	}
	if (mail == "") {
		alert("Enter a Mail");
		return false;
	}
	if (pwd == "") {
		alert("Enter a password");
		return false;
	}
	if (cpwd == "") {
		alert("Enter a Confirm Password");
		return false;
	}
	if (!filter.test(mail)) {
		alert("Enter a correct mail");
		return false;
	}
	if (pwd.length < 7) {
		alert("Password Length should be atleast 7");
		return false;
	}
	if (!filterpwd.test(pwd)) {
		alert(
			"Password length must be at least 7 and it should contain at least one capital letter, one digit and one special character from the set (&,$,#@)"
		);
		return false;
	}
	if (!pwd.test(cpwd)) {
		alert("COnfirm password does not match");
		return false;
	}
	return true;
}

