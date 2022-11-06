function isValid(pForm) {

	let fnameErr = document.getElementById("fnameErr");
	let lnameErr = document.getElementById("lnameErr");
	let genderErr = document.getElementById("genderErr");
	let dobErr = document.getElementById("dobErr");
	let addressErr = document.getElementById("addressErr");
	let emailErr = document.getElementById("emailErr");

	let firstname = pForm.firstname.value;
	let lastname = pForm.lastname.value;
	let gender = pForm.gender.value;
	let dob = pForm.dob.value;
	let address = pForm.address.value;
	let email = pForm.email.value;


	fnameErr.innerHTML = "";
	lnameErr.innerHTML = "";
	genderErr.innerHTML = "";
	dobErr.innerHTML = "";
	addressErr.innerHTML = "";
	emailErr.innerHTML = "";

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

	if (flag === true) {

		const actionURL = pForm.action;
		const actionMethod = pForm.method;

		let xhttp = new XMLHttpRequest();
		xhttp.onload = function() {
			document.getElementById("doneMessage").innerHTML = this.responseText;
		}
		xhttp.open(actionMethod, actionURL);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("firstname=" + firstname + "&lastname=" + lastname + "&gender=" + gender + "&dob=" + dob +
							"&address=" + address	+ "&email=" + email);
		
	}
}