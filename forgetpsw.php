<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forget Password</title>
</head>
<body>
<form action="tmFrgtPsw.php" method = "post">
<div>
	<label for="firstName">First Name :</label><input type="text" name="firstName" id="firstName" required autofocus autocomplete ="on"  >
	<br>
	<label for="lastName">Last Name :</label><input type="text" name="lastName" value="" id="lastName" required autocomplete ="on">
	<br>
	<label for="un">E-mail :</label><input type="email" name="email" value="" id="email" required autocomplete="on">
	<br>
	<label for="gender" >Gender :</label>Male:<input type="radio" name="gender" value="Male">
												| Female:<input type="radio" name="gender" value="Female">				
	<br>
	<label for="dob">Date of birth :</label><input type="date" name="dob" id="dob" placeholder="dd/mm/yyyy" required autocomplete="on" >	
	<br>
	<label for="contactno">Mobile :</label> <input type="tel" id="contactno" name="mobile" required onblur="recheckForm();" autocomplete ="on" >
    <br/>
	<input type = "Submit" value = "Submit" onclick = "emailMsg()">
<script> 
function emailMsg(){
confirm("One time password will be send on your email")
}
</script>
</div>
</form>


</body>
</html>