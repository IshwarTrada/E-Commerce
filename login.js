// Slider
let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".slider");
let formSection = document.querySelector(".form-section");

signup.addEventListener("click", () => {
	slider.classList.add("moveslider");
	formSection.classList.add("form-section-move");
});

login.addEventListener("click", () => {
	slider.classList.remove("moveslider");
	formSection.classList.remove("form-section-move");
});

// Password Check
function validate_pwd(){
	let password = document.getElementById("u_pwd").value;
	let cnf_password = document.getElementById("cnf_pwd").value;
	if(password!=cnf_password){
		alert("Please enter same password");
		event.preventDefault();
	}
}