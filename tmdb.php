<?php 
// define variables and set to empty values
$name = $email = $gender = $address = $website = $mobile = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  

/*
The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. 
This way, the user will get error messages on the same page as the form.
*/
	$name=$_POST['firstName'] ." ". $_POST['lastName'];
	echo $name;
$email= test_input($_POST['email']);
$website = test_input($_POST['website']);
$gender = test_input($_POST['gender']);
$dob = test_input($_POST['dob']);
$mobile = test_input($_POST['mobile']);
$address = test_input($_POST['address']);
$country = test_input($_POST['country']);
$method_to_contact = test_input($_POST['method']);
$user_name = test_input($_POST['user_name']);

$password = test_input($_POST['pw1']);
}

function test_input($data) {
  $data = trim($data);//Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
  $data = stripslashes($data);//Remove backslashes (\) from the user input data (with the PHP stripslashes() function) 
  $data = htmlspecialchars($data);
  //When we use the htmlspecialchars() Function then if a user tries to submit the following in a text field:
  //<script>location.href('http://www.hacked.com')</script>
  //- this would not be executed, because it would be saved as HTML escaped code, like this:
  //&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;
  return $data;
}



mysql_connect('localhost','root','');
mysql_select_db('tmdb');
$query="insert into tmtable(name, email, website, gender,dob, mobile,address, country,method_to_contact, user_name,password ) values('$name','$email','$website','$gender','$dob','$mobile','$address','$country','$method_to_contact','$user_name','$password')";
mysql_query($query);

header("Location: http://localhost/TechMove/index.html"); /* Redirect browser */
exit();
?>