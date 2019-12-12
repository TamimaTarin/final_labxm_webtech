function Name()
{
	var name1=document.getElementById('name').value;
	if(name1=="")
	{
		
		alert("incorrect");
	}
	else if(name1.length<=2)
	{
		alert("incorrect");
	}
	else
	{
		name1=document.getElementById('name').value;
		alert(name1);
	}
   
}
function Email()
{
	var email1=document.getElementById('email').value;
	if(email1=="")
	{
		alert("incorrect");
	}
    else if(email1.includes("@example.com"))
	{
		email1=document.getElementById('email').value;
		alert(email1);
	}
	else{
		alert("invalid");
	}
}
function type(){
	var g1 = document.getElementsById('type');
	
	for (var i = 0; i < g1.length; i++) {
		var detect = "";
		if(g1[i].checked)
		{
			detect += g1[i].value;
			break;
		}
		else
		{
			detect += "No Value";
		}
	}
	return detect;
}
function reset()
{
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var id = document.getElementById('id').value;
	var pass = document.getElementById('password').value;
	var cpass = document.getElementById('cpassword').value;
	var type = document.getElementById('type').value;
    id = "";
	pass = "";
	cpass = "";
	name = "";
	email = "";
	type = "";
	
	
function loadDoc() 
{
  var xhttp = new XMLHttpRequest();
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  //var Uname = document.getElementById('myUname').value;
  var password = document.getElementById('password').value;
  var cpassword = document.getElementById('cpassword').value;
  var Type = type();
  xhttp.open("POST", "Reg.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  if(password==""||cpassword==""||name==""||email==""||type=="")
  {
  	xhttp.send("get=invalid");
  }
  else
  {
	if(type=="No Value")
	  	{
	  		xhttp.send("get=invalid");
	  	}
		 else
		{
		  	if(Pass!=Cpass)
		  	{
		  		xhttp.send("get=invalid");
		  	}

		}
	  
  }
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("show").innerHTML = this.responseText;
     
    }
  };
}

