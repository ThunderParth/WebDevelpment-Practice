var icon = document.getElementById("img");
icon.addEventListener("click", function (icon) {
	icon.target.classList.toggle("image2");
});
function verifyPassword() {
	var pw = document.getElementById("pid").value;
	if (pw == "") {
		alert("**Fill the password please!");
	}
	if (pw.length < 8) {
		alert("**Password length must be atleast 8 characters");
	}
}