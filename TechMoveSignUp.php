<?php 


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TechMove Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style> 
body{
	padding:0px;
	margin : 0px auto;
}

ul.topnav {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;
}
ul.topnav li {float: left;}
ul.topnav li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}
ul.topnav li a:hover:not(.active) {background-color: #111;}
ul.topnav li a.active {background-color: #4CAF50;}
ul.topnav li.right {float: right;}
@media screen and (max-width: 600px){
ul.topnav li.right, 
ul.topnav li {float: none;}
}


.form_sect{
	float:left;
	width:40%;
    font-family: Georgia, "Times New Roman", Times, serif;
	padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}

form{
line-height:2;
margin:10px;
padding:10px;
}

fieldset{
border:5px solid green;
border-radius:10px;
margin-bottom:10px;
width:90%;
}

h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
h1 > span{
    display: block;
    margin-top: 2px;
    font: 15px Arial, Helvetica, sans-serif;
}

.inner_wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}



label{
	width:180px;
    display: inline-block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
	text-align:left;
	text-align:top;
}

input[type="text"], input[type="password"], textarea, input[type="email"],input[type="url"], input[type="url"], input[type="tel"]{
	font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
	}
	
input[type="date"], select{
	font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
}

	
input[type="text"]:hover, input[type="password"]:hover, input[type="email"]:hover, input[type="url"]:hover, input[type="date"]:hover, input[type="tel"]:hover, textarea:hover {
	background: #d2d9dd;
}
select{
    height:35px;
}
#recheck_form{
display:none;
float:right; 
width:46.5%; 
line-height:2;  
    font-family: Georgia, "Times New Roman", Times, serif;
	padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);


}
.recheck_data{
}
.ddata{
color:red;
font-size:20px;
width:;
display:inline-block;
text-align:left;
text-align:top;
}

input[type=submit]{
  float:right;
  display: inline-block;
  border-radius: 5px;
  background-color: #2A88AD;
  border: none;
  color: #FFFFFF;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  font-size: 15px;
  padding: 10px;
  width: 100px;
  transition: all 1s;
  cursor: pointer;
  margin: 2px;
  box-shadow: 0 3px #999;
}
input[type=submit]:hover {
    box-shadow: 0 6px 8px 0 rgba(0,0,0,0.24),0 8px 25px 0 rgba(0,0,0,0.19);
    background-color: #3e8e41;
}

.button {
  display: inline-block;
  border: none;
  font-size: 16px;
  width: 150px;
  margin: 5px;
  
  
  padding: 10px 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #2A88AD;
  border-radius: 10px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
	
  position: relative;
	overflow: hidden;
    
}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	background-color: #4CAF50;
    color: white;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button:after {
    content: "";
    background: #f1f1f1;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 2s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.privacy-policy{
    float: left;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}
</style>
    <style media="screen" type="text/css">
      
    </style>
	    <script>
		//auto expand textarea
		function adjust_textarea(h) {
			h.style.height = "20px";
			h.style.height = (h.scrollHeight)+"px";
			}
        function recheckForm() {
			document.getElementById("dname").innerHTML = document.getElementById("firstName").value + " "+ document.getElementById("lastName").value;
			document.getElementById("demail").innerHTML = document.getElementById("email").value;
			document.getElementById("dwebsite").innerHTML = document.getElementById("website").value;
			document.getElementById("dcontactno").innerHTML ="+91 "+ document.getElementById("contactno").value;
			document.getElementById("ddob").innerHTML = document.getElementById("dob").value;
			document.getElementById("dmobile").innerHTML = document.getElementById("Mobile").value;
		//	document.getElementById("button").disabled = true;
				
				
				
			/*var x = document.getElementById("myForm");
			var text="";
			var i;
			for(i = 0; i < x.length; i++){
				text += i + ". " + x.elements[i].value + "<br>";
			}
			document.getElementById("myForm").innerHTML = text;
			*/
	}
	function showSignup(){
		var x = document.getElementById('signup');
				if(x.style.display==='none'){
					x.style.display='block';
				}
				/*else{
					x.style.display='none';
				}*/
		}
  
	function check_name() {
		var x, message;
		 message = document.getElementById("message");
         message.innerHTML = "";
         x = document.getElementById("pw1").value;    
		try { 
			if(x == "")  throw "is empty";
            if(isNaN(x)) throw "is not a number";
            x = Number(x);
            if(x > 10)   throw "is too high";
            if(x < 5)    throw "is too low";
        }
        catch(err) {
			message.innerHTML = "Input " + err;
        }
        finally {
       // document.getElementById("firstName").value = "";
        }
		
	}
	function showForm(){
		  
		document.getElementById('recheck_form').style.display='block';
		alert("You won't be edit info after final Submission");
	}

    var x = document.forms["myForm"]["mobile"].value;
    if (x == "") {
		document.getElementById("msg").innerHTML = "Empty"; 
        return false;
    }
	</script>
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="TechMove.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="#about">About</a></li>
</ul>
	
	<form id="myForm" method="post" action="tmdb.php" > <!-- "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>",  autocomplete="on" name="myForm" enctype="text/plain" accept-charset="" oninput="" target="" -->
<div class = "form_sect">
	<h1>Sign Up Now!<span>Sign up and tell us what you think of the site!</span></h1>
		
			<div class="section"><span class="number">1</span>General Information</div>
				<div class = "inner_wrap">
				<label for="firstName" value="First Name">First Name :</label><input type="text" name="firstName" id="firstName" required autofocus autocomplete ="on" onblur="recheckForm();" >
				<br>
				<label for="lastName">Last Name :</label><input type="text" name="lastName" value="" id="lastName" required autocomplete ="on" onblur="recheckForm();">
				<br>
				<label for="un">E-mail :</label><input type="email" name="email" value="" id="email" size="" required autocomplete="on" onblur="recheckForm();">
				<br>
				<label for="ws">Website :</label><input type="url" name="website"  id="website" size="" required autocomplete="on" onblur="recheckForm();">
				<br>
				<label for="gender" >Gender :</label>Male:<input type="radio" name="gender" value="Male" id="">
												       | Female:<input type="radio" name="gender" value="Female" id="">				
				<br>
				<label for="dob">Date of birth :</label><input type="date" name="dob" id="dob" placeholder="dd/mm/yyyy" required autocomplete="on" onblur="recheckForm();">	
				<br>
				<label for="country">Country :</label>
				<select name="country" required size="" onblur="recheckForm();">
					<option value="USA" id="usa" name="country" >USA</option>
					<option value="India" id="ind" name="country" selected>India</option>
					<option value="Pakistan" id="pak" name="country" >Pakistan</option>
					<option value="Srilanka" id="sl" name="country">Sri Lanka</option>		
				</select>
			</div>
		
			<div class="section"><span class="number">2</span>Your Contact Information</div>
			<div class = "inner_wrap">
			<label for="email">Email :</label> <input type="email" id="email" name="email" required onblur="recheckForm();" autocomplete ="on">
			<br>
			<label for="contactno">Mobile :</label> <input type="tel" id="contactno" name="mobile" required onblur="recheckForm();" autocomplete ="on" > <div id="msg"></div>
            <br>			
			<label for="address">Address :</label> <textarea id="address" name="address" rows="1" cols="10" value="" required onkeyup="adjust_textarea(this)" onblur="recheckForm();" autocomplete ="on"></textarea> 
			<br>
			<label for="method">Method to cantact you :</label>
            <input type="checkbox"  name="method" value="E-mail">Email
            <input type="checkbox" name="method" value="WhatsApp">Whatsapp
            <input type="checkbox"  name="method" Value="In-app chat">In-app chat
		</div>
	 <button  class="button" id="button" style="vertical-align:middle;" onclick="showForm(); showSignup(); recheckForm();" ><span>Proceed</span></button>
</div>



		<!--<input type="submit" value="Submit" formaction="" onclick="recheckForm()" formenctype="multipart/form-data" formmethod="post" formaction="action_form_post.asp" 
		formtarget="" >-->


   

    <!-- <script>
            function myFunction() { 
			document.getElementById("myForm").style.fontSize="";
			document.getElementById("myForm").style.color ="red";
		    document.getElementById("myForm").innerHTML = url('TechMove.html');
			
	        }
     </script> -->
<div id="recheck_form">

	
	<div class="section"><span class="number">3</span>Recheck Your Information</div>
		<div class = "inner_wrap">
	<label for="bname">Name :</label><div id="dname" style="font-family:small-caps;"class="ddata"> </div>
	<br>
	<label for="demail">E-mail :</label><div id="demail" class="ddata"> </div>
	<br>
	<label for="dwebsite">Website Name :</label><div id="dwebsite" class="ddata"> </div>
	<br>
	<label for="dcontactno">Contact Number :</label><div id="dcontactno" class="ddata"> </div>
	</div>
<div id="signup" style="display:none"> 
	 
			<div class="section"><span class="number">4</span>Sign Up</div>
<div class = "inner_wrap">			
			<label for="un">User Name :</label> <input type="text" id="un" name="user_name" required>
				<div id="message" style="float:right"></div>
			<br>
			<label for="pw1">Password :</label> <input type="password" id="pw1" name="pw1" required autocomplete="off"  onblur="check_name()">
			<br>
			<label for="pw2">Confirm Password :</label> <input type="password" id="pw2" name="pw2" required autocomplete="off">
</div>
	<!--<input type="submit" value="Submit" formaction="" onclick="recheckForm();" formenctype="" method="" formaction="" formtarget="" > -->	
	<span class="privacy-policy">
     <input type="checkbox" name="field7" required>You agree to our Terms and Policy. 
     </span>
	 <input type = "Submit" value = "Submit">
</div>
</div>
</div>
</form>	

</body>
</html>