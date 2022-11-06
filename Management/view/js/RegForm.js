function isValid(pForm) {

	let fnameErr = document.getElementById("fnameErr");
	let lnameErr = document.getElementById("lnameErr");
	let genderErr = document.getElementById("genderErr");
	let dobErr = document.getElementById("dobErr");
	let addressErr = document.getElementById("addressErr");
	let emailErr = document.getElementById("emailErr");
	let unameErr = document.getElementById("unameErr");
	let passErr = document.getElementById("passErr");
	let cpassErr = document.getElementById("cpassErr")

	let firstname = pForm.firstname.value;
	let lastname = pForm.lastname.value;
	let gender = pForm.gender.value;
	let dob = pForm.dob.value;
	let address = pForm.address.value;
	let email = pForm.email.value;
	let uname = pForm.uname.value;
	let password = pForm.password.value;
	let cpassword = pForm.cpassword.value;




	fnameErr.innerHTML = "";
	lnameErr.innerHTML = "";
	genderErr.innerHTML = "";
	dobErr.innerHTML = "";
	addressErr.innerHTML = "";
	emailErr.innerHTML = "";
	unameErr.innerHTML = "";
	passErr.innerHTML = "";
	cpassErr.innerHTML = "";

	let flag = true;

	if (firstname === "") {
		fnameErr.innerHTML = "[First name can not be empty]";
		flag = false;
	}
	if (lastname === "") {
		lnameErr.innerHTML = "[Last name can not be empty]";
		flag = false;
	}

	if (gender === "") {
		genderErr.innerHTML = "[Gender can not be empty]";
		flag = false;
	}
	if (dob === "") {
		dobErr.innerHTML = "[DOB can not be empty]";
		flag = false;
	}

	if (address === "") {
		addressErr.innerHTML = "[Address can not be empty]";
		flag = false;
	}
	if (email === "") {
		emailErr.innerHTML = "[Email can not be empty]";
		flag = false;
	}
	if (uname === "") {
		unameErr.innerHTML = "[Username can not be empty]";
		flag = false;
	}
	if (password === "") {
		passErr.innerHTML = "[Password can not be empty]";
		flag = false;
	}
	if (cpassword === "") {
		cpassErr.innerHTML = "[Password was not confirmed]";
		flag = false;
	}
	if (password !== cpassword) {
		cpassErr.innerHTML = "Password did not match!";
		flag = false;
	}

	return true;
}