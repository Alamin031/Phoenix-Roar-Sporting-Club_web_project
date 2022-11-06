// function search()
// {
//     var search=document.getElementById("searchdata").value;
//     var myxttp = new XMLHttpRequest();
//     myxttp.onreadystatechange=function(){
//         if(this.readyState=4 && this.status==200)
//         {
//             document.getElementById("showdata").innerHTML=this.responseText;
//         }
//     };
//     myxttp.open("GET","http://localhost/secf/p/control/ajaxwork2.php?search="+search,true);
//     myxttp.send();
// }



function search()
 {
    var uname=  document.getElementById("uname").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
  
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("showdata").innerHTML = this.responseText;
      }
      else
      {
           document.getElementById("showdata").innerHTML = this.status;
      }
    };
    xhttp.open("POST", "../Control/ajaxwork3.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("uname="+uname);
  
  
  }