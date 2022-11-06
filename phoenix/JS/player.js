function formcheck()
{
    if(fastnameval() == true && lastnameval() == true && usernameval() == true && nnameval() == true && universitynnameval() == true && collegennameval() == true && Schoolnnameval() == true && gval() == true && getradioval1() == true && emailc() == true && passval() == true && numberval() == true)
    {
        document.getElementById("submit").innerHTML="All fields are ok";
        return true;
    }
    else
    {
        document.getElementById("submit").innerHTML="All filed are required";
        return false;
    }
}


//firstname validation
function fastnameval()
{
  var fname = document.getElementById("fname").value;
  var fname_pattern =  /^[A-Za-z]+$/;
  var fn_check = fname_pattern.test(fname);
  if (fn_check) 
  {
    document.getElementById("nameError").innerHTML="First name  is correct";
    document.getElementById("nameError").style.color="red";
    return true;
  }
  else
  {
      document.getElementById("nameError").innerHTML="First Name must be Alphabets!should not contain numbers and symbols.";
      document.getElementById("nameError").style.color="green";
      return false;
  }
}



//lastname validation
function lastnameval()
{
    var lname = document.getElementById("lname").value;
    var lname_pattern =  /^[A-Za-z]+$/;
    var ln_check = lname_pattern.test(lname);
    if (ln_check) 
    {
      document.getElementById("nameError1").innerHTML="Last name  is correct";
      document.getElementById("nameError1").style.color="red";
      return true;
    }
    else
    {
        document.getElementById("nameError1").innerHTML="Last Name must be Alphabets!should not contain numbers and symbols.";
        document.getElementById("nameError1").style.color="green";
        return false;
    }
}



//username validation
function usernameval(){
    var fnameval=document.getElementById("uname").value;
   if(!isNaN(fnameval)){
       document.getElementById("nameError9").innerHTML="First name  must  alphabets";
       return false;

   }
   else{
       document.getElementById("nameError9").innerHTML="First name  is correct";
       return true;
   }

}



function nnameval()
{
    var nationality = document.getElementById("nationality").value;
    var nationality_pattern =  /^[A-Za-z]+$/;
    var n_check = nationality_pattern.test(nationality);
    if (n_check) 
    {
      document.getElementById("nameError3").innerHTML="Last name  is correct";
      document.getElementById("nameError3").style.color="red";
      return true;
    }
    else
    {
        document.getElementById("nameError3").innerHTML="Last Name must be Alphabets!should not contain numbers and symbols.";
        document.getElementById("nameError3").style.color="green";
        return false;
    }
}



function universitynnameval()
{
    var university = document.getElementById("university").value;
    var university_pattern =  /^[A-Za-z]+$/;
    var uni_check = university_pattern.test(university);
    if (uni_check) 
    {
      document.getElementById("nameError4").innerHTML="Last name  is correct";
      document.getElementById("nameError4").style.color="red";
      return true;
    }
    else
    {
        document.getElementById("nameError4").innerHTML="Last Name must be Alphabets!should not contain numbers and symbols.";
        document.getElementById("nameError4").style.color="green";
        return false;
    }
}

function collegennameval()
{
    var college = document.getElementById("college").value;
    var college_pattern =  /^[A-Za-z]+$/;
    var clg_check = college_pattern.test(college);
    if (clg_check) 
    {
      document.getElementById("nameError5").innerHTML="Last name  is correct";
      document.getElementById("nameError5").style.color="red";
      return true;
    }
    else
    {
        document.getElementById("nameError5").innerHTML="Last Name must be Alphabets!should not contain numbers and symbols.";
        document.getElementById("nameError5").style.color="green";
        return false;
    }
}

function Schoolnnameval()
{
    var School = document.getElementById("School").value;
    var School_pattern =  /^[A-Za-z]+$/;
    var sch_check = School_pattern.test(School);
    if (sch_check) 
    {
      document.getElementById("nameError6").innerHTML="Last name  is correct";
      document.getElementById("nameError6").style.color="red";
      return true;
    }
    else
    {
        document.getElementById("nameError6").innerHTML="Last Name must be Alphabets!should not contain numbers and symbols.";
        document.getElementById("nameError6").style.color="green";
        return false;
    }
}


//radio 
function gval(){
    if(document.getElementById("dot-1").checked==true)
    {
        
        document.getElementById("nameError7").innerHTML="MEN has been checked";
        return true;
    }
    else if(document.getElementById("dot-2").checked==true)
    {
        document.getElementById("nameError7").innerHTML="WOMEN has been checked";
        return true;
        }
    else{
        document.getElementById("nameError7").innerHTML="Please select a radio button";
        return false;
    }
}


function getradioval1(){
    if(document.getElementById("do-1").checked==true)
    {
        
        document.getElementById("nameError8").innerHTML="Single has been checked";
        return true;
    }
    else if(document.getElementById("do-2").checked==true)
    {
        document.getElementById("nameError8").innerHTML="Married has been checked";
        return true;
    }

    else if(document.getElementById("do-3").checked==true)
    {
        document.getElementById("nameError8").innerHTML=" Divorced has been checked";
        return true;
    }
    else{
        document.getElementById("nameError8").innerHTML="Please select a radio button";
        return false;
    }
}

// email validation
function emailc(){
    var emailval=document.getElementById("email").value;
    var pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(emailval.match(pattern)){
        document.getElementById("nameError2").innerHTML="Email is  correct";
        if(nameExists2())
        return true;

    }
    else{
        document.getElementById("nameError2").innerHTML="Email is not correct";
        return false;

    }
}



document.getElementById("nameExists2").innerHTML="";
function nameExists2()
{
    var email=document.getElementById("email").value;
    var myxttp = new XMLHttpRequest();
    myxttp.onreadystatechange=function(){
        if(this.readyState=4 && this.status==200)
        {
            if(this.responseText=="yes")
            {
                
        document.getElementById("nameExists2").innerHTML=this.responseText;
       
                return true;
            }
            else
            {
                
        document.getElementById("nameExists2").innerHTML=this.responseText;
                return false;
            }


        }
    };
    myxttp.open("POST","http://localhost/secf/p/control/ajaxwork1.php",true);
    myxttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myxttp.send("email="+email);
}

function passval(){
    var passval=document.getElementById("password").value;
    var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    if(passval.length>=8 && passval.match(pattern)){
        document.getElementById("nameError10").innerHTML="Password is  correct";
        return true;

    }
    else{

        document.getElementById("nameError10").innerHTML="Password must be more than 6 letters long and must have a alphabets and a number";
        return false;
    }
}
//number validation
function numberval(){
    var pnameval=document.getElementById("number").value;
    if((isNaN(pnameval) || pnameval.length<2))  
      {
        document.getElementById("nameError11").innerHTML="must be a number";
        return false;
    }
    else{
        document.getElementById("nameError11").innerHTML="number is correct";
        return true;
    }
}





// function formcheck()
// {
//     if(fastnameval() == true && lastnameval() == true && usernameval() == true && nnameval() == true && universitynnameval() == true && collegennameval() == true && Schoolnnameval() == true && getradioval() == true && getradioval1() == true && emailc() == true && passval() == true && numberval() == true)
//     {
//         document.getElementById("submit").innerHTML="All fields are ok";
//         return true;
//     }
//     else
//     {
//         document.getElementById("submit").innerHTML="All filed are required";
//         return false;
//     }
// }