<?php 
// define variables and set to empty values
$name = $email = $gender = $address = $website = $mobile = $password = "";
$name=test_input($_POST["firstName"] . " " . $_POST["lastName"]);
$email= test_input($_POST['email']);
$gender = test_input($_POST['gender']);
$dob = test_input($_POST['dob']);
$mobile = test_input($_POST['mobile']);
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
function random_string($length) {
$key = '';
$keys = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
for ($i = 0; $i < $length; $i++) {
	$key .= $keys[array_rand($keys)];
    }
return $key;
}

$passcode = random_string(6);

$to = $email;
$subject = 'TechMove.com :ResetPassword ';
$txt = "Hello $name Your one time password is " . $passcode . "Your mobile number is : " . $mobile;
$headers = 'From: shivanshchaudhry@gmail' ;

if(mail($to,$subject,$txt,$headers))
echo "Check Your email";
else {
	echo"Email can't be sent";
}

//Although it may be look cool in your mind to use javascript, try not to. This will surely result in having your email marked as spam.
mysql_connect('localhost','root','');
mysql_select_db('tmdb');
$query = "UPDATE tmtable 
SET password = '$passcode'
WHERE name = '$name' AND email = '$email'";
mysql_query($query);
//header("Location: http://localhost/TechMove/index.html"); /* Redirect browser */
//exit();
?>
