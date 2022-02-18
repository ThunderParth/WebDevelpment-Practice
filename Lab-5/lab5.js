console.log("js works");

function img2() {
	icon.setAttribute("src", "../images/img2.jpg");
}

function img() {
	icon.setAttribute("src", "../images/img.jpg");
}

var icon = document.getElementsByClassName("img")[0];
console.log("icon: ", icon);
icon.addEventListener("mouseover", img2);
icon.addEventListener("mouseout", img);

function validate() {
	if (document.myForm.fname.value == "") {
		alert("Please provide your name!");
		document.myForm.fname.focus();
		return false;
	}

	if (document.myForm.gender.value == "") {
		alert("Please enter your gender");
		return false;
	}

	if (document.myForm.address.value == "") {
		alert("Please enter the Permanent Address");
		document.myForm.address.focus();
		return false;
	}

	if (document.myForm.email.value == "") {
		alert("Please provide your Email!");
		document.myForm.email.focus();
		return false;
	}

	var emailID = document.myForm.email.value;
	atpos = emailID.indexOf("@");
	dotpos = emailID.lastIndexOf(".");

	if (atpos < 1 || dotpos - atpos < 2) {
		alert("Please enter correct email ID");
		document.myForm.EMail.focus();
		return false;
	}

	var password_check = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
	if (document.myForm.password.value == "") {
		alert("Please provide your Password!");
		document.myForm.password.focus();
		return false;
	}

	if (document.myForm.birthday.value == "") {
		alert("Please enter the Birth Date");
		document.myForm.bdate.focus();
		return false;
	}

	if (
		document.myForm.phno.value == "" ||
		isNaN(document.myForm.mob.value) ||
		document.myForm.phno.value.length != 10
	) {
		alert("Please provide a 10 digit Mobile number.");

		document.myForm.mob.focus();
		return false;
	}

	return true;
}
