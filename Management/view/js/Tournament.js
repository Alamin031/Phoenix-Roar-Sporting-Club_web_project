function isValid(pForm) {

    let tnameErr = document.getElementById("tnameErr");
	let typeErr= document.getElementById("typeErr");
    let snameErr= document.getElementById("snameErr");
	let dateErr = document.getElementById("dateErr");
	let ttimeErr = document.getElementById("ttimeErr");
	let tplaceErr= document.getElementById("tplaceErr");
	

    let tname= pForm.tname.value;
	let ttype= pForm.ttype.value;
	let sname= pForm.sname.value;
	let date= pForm.tdate.value;
	let ttime= pForm.ttime.value;
	let tplace= pForm.tplace.value;
	
 
    tnameErr.innerHTML = "";
	typeErr.innerHTML = "";
	snameErr.innerHTML = "";
	dateErr.innerHTML = "";
	ttimeErr.innerHTML = "";
	tplaceErr.innerHTML = "";
	



let flag = true;

	if (tname === "") {
		tnameErr.innerHTML = "[Tournament Name can not be empty]";
		flag = false;
	}
	if (ttype === "") {
		typeErr.innerHTML = "[Tournament Type can not be empty]";
		flag = false;
	}

	if (sname === "") {
		snameErr.innerHTML = "[Sports Name can not be empty]";
		flag = false;
	}
	if (date === "") {
		dateErr.innerHTML = "[Date can not be empty]";
		flag = false;
	}

	if (ttime === "") {
		ttimeErr.innerHTML = "[Tournament Time can not be empty]";
		flag = false;
	}
	if (tplace === "") {
		tplaceErr.innerHTML = "[Tournament Place can not be empty]";
		flag = false;
	}
	
	return flag;



}