function form_check()
{
    if(fname_check() == true && lname_check()==true && username_check()==true && age_check()==true && email_check()==true && num_check()==true && getradiovalue()==true)
    {
        document.getElementById("errorform").innerHTML="All fields are good! :D";
        return true;
    }
    else
    {   
		
        document.getElementById("errorform").innerHTML="Fill up everthing correctly!! ";
	
        return false;
    }
}

function fname_check()
  {
    var fname = document.getElementById("fname").value;
    // var fname_pattern =  /^[A-Za-z]+$/;
    // var fn_check = fname_pattern.test(fname);
    if (fname.length>4) 
    {
        document.getElementById("errorfname").innerHTML = "Name seems good! :D";
		document.getElementById("fname").style.backgroundColor="green";
		
        return true;
    }
    else
    {
        document.getElementById("errorfname").innerHTML = "First Name must be at least 4 !";
		document.getElementById("fname").style.backgroundColor="red";
        return false;
    }
}


function lname_check()
  {
    var lname = document.getElementById("lname").value;
    // var fname_pattern =  /^[A-Za-z]+$/;
    // var fn_check = fname_pattern.test(fname);
    if (lname.length>4) 
    {
        document.getElementById("lerror").innerHTML = "Name seems good! :D";
		document.getElementById("lname").style.backgroundColor="green";
		
        return true;
    }
    else
    {
        document.getElementById("lerror").innerHTML = "Last Name must be at least 4 !";
		document.getElementById("lname").style.backgroundColor="red";
        return false;
    }
}



function username_check()
  {
    var username = document.getElementById("username").value;
    // var letterNumber = /^[0-9a-zA-Z]+$/;
    var fname_pattern = /^[0-9a-zA-Z]/;
    var user_check = fname_pattern.test(username);
    if (user_check) 
    {
        document.getElementById("usererror").innerHTML = "UserName seems good! :D";
		document.getElementById("username").style.backgroundColor="green";
		
        return true;
    }
    else
    {
        document.getElementById("usererror").innerHTML = "UserName must be at least Number & charecter !";
		document.getElementById("username").style.backgroundColor="red";
        return false;
    }
}

function age_check()
  {
    var age = document.getElementById("age").value;
    var age_pattern = /^[0-9]+$/;
    var age_check = age_pattern.test(age);
    if (age_check) 
    {
        document.getElementById("ageerror").innerHTML = "Age seems good! :D"
        document.getElementById("age").style.backgroundColor = "green";
        return true;
    }
    else
    {
        document.getElementById("ageerror").innerHTML = "Age contains alphabets!";
        document.getElementById("age").style.backgroundColor = "red";
        return false;
    }
  }
function getradiovalue()
    {
        if(document.getElementById("male").checked==true)
        {
            document.getElementById("radio1").innerHTML="Male has been checked";
            return true;
        }
        else if (document.getElementById("female").checked==true)
        {
            document.getElementById("radio1").innerHTML="Female has been checked";
            return true;
        }
        else if (document.getElementById("other").checked==true)
        {
            document.getElementById("radio1").innerHTML="Other has been checked";
            return true;
        }
        else
        {
            document.getElementById("radio1").innerHTML="Please select a radio!";
            return false;
        }
    }

function passcheck(){

    var adpass = document.getElementById("pass").value;
    document.getElementById("passerror").innerHTML = adpass;
    if (adpass.length >= 5) {
        // document.getElementById("errorpass").innerHTML = "Password is  correct";
        document.getElementById("passerror").innerHTML = "Password is correct";
      
        document.getElementById("pass").style.backgroundColor="green";
        return true;
    }
    else {
        document.getElementById("passerror").innerHTML = "password should be more than 5 charecter!";
        document.getElementById("pass").style.backgroundColor="red";
        return false;
    }
    // var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
}

function conpasscheck(){

    var adpass1 = document.getElementById("conpassword").value;
    document.getElementById("conerror").innerHTML = adpass1;
    if (adpass1.length >= 5) {
        // document.getElementById("errorpass").innerHTML = "Password is  correct";
        document.getElementById("conerror").innerHTML = "Password is correct";
      
        document.getElementById("conpassword").style.backgroundColor="green";
        return true;
    }
    else {
        document.getElementById("conerror").innerHTML = "password should be more than 5 charecter!";
        document.getElementById("conpassword").style.backgroundColor="red";
        return false;
    }
    // var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
}

function num_check()
  {
    var num = document.getElementById("number").value;
    var age_pattern = /^[0-9]+$/;
    var num_check = age_pattern.test(num);
    if (num_check) 
    {
        document.getElementById("numerror").innerHTML = "Number seems good! :D"
        document.getElementById("number").style.backgroundColor = "green";
        return true;
    }
    else
    {
        document.getElementById("numerror").innerHTML = "Number contains alphabets!";
        document.getElementById("number").style.backgroundColor = "red";
        return false;
    }
}
  
function email_check()
{
  var email = document.getElementById("email").value;
  var email_pattern = /^\w+([-+.']\w+)*@[A-Za-z\d]+\.com$/;
  var em_check = email_pattern.test(email);
  if (em_check) 
  {
      document.getElementById("emailerror").innerHTML = "EMail seems good! :D";
      document.getElementById("email").style.backgroundColor = "green";
      return true;
  }
  else
  {
      document.getElementById("emailerror").innerHTML = "Email format is not correct!";
      document.getElementById("email").style.backgroundColor = "red";
      return false;
  }
}

