//firstname validation

function formcheck()
{
    if(fastnameval() == true && lastnameval() == true && numberval() == true && getradioval() == true && passval() == true && fileval() == true && emailcheck() == true)
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

// function fastnameval(){
//     var pnameval1=document.getElementById("fname").value;
//     if((!isNaN(pnameval1) || pnameval1.length<2))  
//       {
//         document.getElementById("nameError").innerHTML="First Name must be Alphabets!should not contain numbers and symbols.";
//         document.getElementById("fname").style.backgroundColor="red";

//         return false;
//     }
//     else{
//         document.getElementById("nameError").innerHTML="First name  is correct";
//         document.getElementById("fname").style.backgroundColor="green";
//         return true;
//     }
// }




function fastnameval()
{
  var fname = document.getElementById("fname").value;
  var fname_pattern =  /^[A-Za-z]+$/;
  var fn_check = fname_pattern.test(fname);

  if(fn_check) 
  {
    document.getElementById("nameError").innerHTML="First name  is correct";
    document.getElementById("fname").style.backgroundColor="green";
    return true;
    

    
  }
  else
  {
      document.getElementById("nameError").innerHTML="First Name must be Alphabets!should not contain numbers and symbols.";
      document.getElementById("fname").style.backgroundColor="red";
      return false;
  }
}




// function fname_check()
//   {
//     var fname = document.getElementById("adminname").value;
//     // var fname_pattern =  /^[A-Za-z]+$/;
//     // var fn_check = fname_pattern.test(fname);
//     if (fname.length>4) 
//     {
//         document.getElementById("errorfname").innerHTML = "Name seems good! :D";
// 		document.getElementById("adminname").style.backgroundColor="green";
		
//         return true;
//     }
//     else
//     {
//         document.getElementById("errorfname").innerHTML = "First Name must be at least 4 !";
// 		document.getElementById("adminname").style.backgroundColor="red";
//         return false;
//     }
// }


//lastname validation
function lastnameval()
{
    var lname = document.getElementById("lname").value;
    var lname_pattern =  /^[A-Za-z]+$/;
    var ln_check = lname_pattern.test(lname);
    if (ln_check) 
    {
      document.getElementById("lnameError").innerHTML="Last name  is correct";
      document.getElementById("lname").style.backgroundColor="green";
      return true;
    }
    else
    {
        document.getElementById("lnameError").innerHTML="Last Name must be Alphabets!should not contain numbers and symbols.";
        document.getElementById("lname").style.backgroundColor="red";
        return false;
    }
}



//number validation
function numberval(){
    var pnameval=document.getElementById("phonenumber").value;
    if((isNaN(pnameval) || pnameval.length<2))  
      {
        document.getElementById("nameError1").innerHTML="must be a number";
        document.getElementById("phonenumber").style.backgroundColor="red";

        return false;
    }
    else{
        document.getElementById("nameError1").innerHTML="number is correct";
        document.getElementById("phonenumber").style.backgroundColor="green";
        return true;
    }
}

//age validation
// function ageval(){
//     //age must be a number
//     var ageval=document.getElementById("ag1").value;
//     if((isNaN(ageval) || ageval.length<2)){
//         document.getElementById("nameerror").innerHTML="Age must be a number and you must be above 9 years old";
//         return false;

//     }
//     else{
//         document.getElementById("nameerror").innerHTML="Age is correct";
//         return true;

//     } 
// }



//radio 
function getradioval(){
    if(document.getElementById("dot-1").checked==true)
    {
        
        document.getElementById("nameError4").innerHTML="MEN has been checked";
        return true;
    }
    else if(document.getElementById("dot-2").checked==true)
    {
        document.getElementById("nameError4").innerHTML="WOMEN has been checked";
        return true;
        }
    else{
        document.getElementById("nameError4").innerHTML="Please select a radio button";
        return false;
    }
}


function passval(){
    var passval=document.getElementById("password").value;
    var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    if(passval.length>=8 && passval.match(pattern)){
        document.getElementById("nameError3").innerHTML="Password is  correct";
        document.getElementById("password").style.backgroundColor="green";

        return true;

    }
    else{

        document.getElementById("nameError3").innerHTML="Password must be more than 6 letters long and must have a alphabets and a number";
        document.getElementById("password").style.backgroundColor="red";

        return false;
    }
}

// function fileval(){
//     //file uploading validation
//     var fileval=document.getElementById("myfile").value;
//     var pattern=/\.(jpg|jpeg|png|doc|docx|pdf)$/;
//     if(fileval.match(pattern)){
//         document.getElementById("Fileerror").innerHTML="File is  not correct";
//         return true;

//     }
//     else{
//         document.getElementById("Fileerror").innerHTML="File is  correct";
//         return false;

//     }
// }




// function emailcheck(){
//     var emailval=document.getElementById("email").value;
//     var pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     if(emailval.match(pattern))
//     {
//         document.getElementById("nameError2").innerHTML="Email is  correct";
//         if(nameExists2()==true)
//         {
            
//             document.getElementById("nameError2").innerHTML="Email is  there";
            
//             return true;
//         }
//         else
//         {
//             document.getElementById("nameError2").innerHTML="Email is not there";
//             return false;
//         }

//     }
//     else{
//         document.getElementById("nameError2").innerHTML="Email is not correct";
//         return false;

//     }
// }




// email validation
function emailcheck(){
    var emailval=document.getElementById("email").value;
    var pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(emailval.match(pattern)){
        document.getElementById("nameError2").innerHTML="Email is  correct";
        document.getElementById("email").style.backgroundColor="green";

        if(nameExists2())
        return true;

    }
    else{
        document.getElementById("nameError2").innerHTML="Email is not correct";
        document.getElementById("email").style.backgroundColor="red";

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
    myxttp.open("POST","http://localhost/secf/p/control/ajaxwork.php",true);
    myxttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myxttp.send("email="+email);
}




// function email()
// {
//     var search=document.getElementById("email").value;
//     var myxttp = new XMLHttpRequest();
//     myxttp.onreadystatechange=function(){
//         if(this.readyState=4 && this.status==200)
//         {
//             document.getElementById("nameExists2").innerHTML=this.responseText;
//         }
//     };
//     myxttp.open("GET","http://localhost/secf/p/control/ajaxwork.php?email="+email,true);
//     myxttp.send();
// }















    function validateForm()
    {
        let w = document.forms["SForm"]["email"].value;
        if(w ==""){
            alert("Email must be filled out");
            return false;
        }
        y = document.forms["SForm"]["password"].value;
        if (y == ""){
            alert("Password must be filled out");
            return false; 
        }
    }