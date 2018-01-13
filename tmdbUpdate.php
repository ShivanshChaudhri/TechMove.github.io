<?php 
// define variables and set to empty values
$name = $email = $gender = $address = $website = $mobile = $password = $dob = $user_name = $method_to_contact = "";

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = dobErr = $mobileErr = $user_nameErr = $passwordErr = $addressErr = $method_to_contactErr = "";

/*
The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. 
This way, the user will get error messages on the same page as the form.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
   if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }
  
  if (empty($_POST["mobile"])) {
    $mobileErr = "mobile is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }  
  if (empty($_POST["address"])) {
    $addressErr = "Password is required";
  } else {
    $address = test_input($_POST["address"]);
  }
  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country = test_input($_POST["country"]);
  }  
  if (empty($_POST["method"])) {
    $method_to_contactErr = "Input method to contact";
  } else {
    $method_to_contact= test_input($_POST["method"]);
  }
  if (empty($_POST["user_name"])) {
    $user_nameErr = "Username is required";
  } else {
    $user_name = test_input($_POST["user_name"]);
  }
  if (empty($_POST["pw1"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["pw1"]);
  }
  
}




//if ($_SERVER["REQUEST_METHOD"] == "POST") { 

//$email= test_input($_POST['email']);
//$website = test_input($_POST['website']);
//$gender = test_input($_POST['gender']);
//$dob = test_input($_POST['dob']);
//$mobile = test_input($_POST['mobile']);
//$address = test_input($_POST['address']);
//$country = test_input($_POST['country']);
//$method_to_contact = test_input($_POST['method']);
//$user_name = test_input($_POST['user_name']);
//$password = test_input($_POST['pw1']);
//}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 

$query="insert into tmtable(name, email, website, gender,dob, mobile,address, country,method_to_contact, user_name,password ) values('$name','$email','$website','$gender','$dob','$mobile','$address','$country','$method_to_contact','$user_name','$password')";


mysql_connect('localhost','root','');
mysql_select_db('tmdb');
$query = "UPDATE tmtable 
SET email = '$email', website = '$website', gender = '$gender', dob = '$dob', mobile = '$mobile', address = '$address', country = '$country', method_to_contact = '$method_to_contact'
WHERE user_name = '$user_name' AND password = '$password'";
mysql_query($query);
header("Location: http://localhost/TechMove/index.html");
exit();
?>