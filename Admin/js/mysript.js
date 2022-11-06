




function form_check()
{
    if(fname_check() == true && passcheck() == true )
    {
        document.getElementById("errorform").innerHTML = "All fields are good! :D";
        alert("All fileds are good!");
        return true;
    }
    else
    {   
		
        document.getElementById("errorform").innerHTML = "Fill up everthing correctly!! #_#";
        alert("Fill up everythings !");
	
        return false;
    }
}

function fname_check()
  {
    var fname = document.getElementById("adminname").value;
    // var fname_pattern =  /^[A-Za-z]+$/;
    // var fn_check = fname_pattern.test(fname);
    if (fname.length>4) 
    {
        document.getElementById("errorfname").innerHTML = "Name seems good! :D";
		document.getElementById("adminname").style.backgroundColor="green";
		
        return true;
    }
    else
    {
        document.getElementById("errorfname").innerHTML = "First Name must be at least 4 !";
		document.getElementById("adminname").style.backgroundColor="red";
        return false;
    }
}
function passcheck(){

    var adpass = document.getElementById("mypass").value;
    // document.getElementById("errorpass").innerHTML = adpass;
    if (adpass.length >= 5) {
        // document.getElementById("errorpass").innerHTML = "Password is  correct";
        document.getElementById("errorpass").innerHTML = "Password is correct";
      
        document.getElementById("mypass").style.backgroundColor="green";
        return true;
    }
    else {
        document.getElementById("errorpass").innerHTML = "password should be more than 5 charecter!";
        document.getElementById("mypass").style.backgroundColor="red";
        return false;
    }
    // var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
}

