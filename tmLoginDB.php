<?php
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<style> 
		*{
			margin: 0px auto;
			
			
		}
		#wlcm{
			height:50px;
			background-color:brown;
			font-size: 25px;
			color:silver;
			
			
		}
		table{
			border: 1px solid black;
			text-align: center;
			font-family:;
			border-collapse:collapse;
						
		}
		table tr th {
			color:silver;
			background-color:brown;
			padding: 10px;
			text-transform:capitalize;
			font-variant:small-caps;
			word-spacing:;
			line-height:;
			font-weight:solid;
			text-align:center;
			vertical-align:middle;
			
		}
		table tr td {
			text-transform:lowercase;
			border-bottom: 1px solid brown;
			padding:5px;
			color:brown;
			background-color:silver;
			font-weight:solid;
			text-align:center;
			vertical-align:middle;
			
		}
	</style>
</head>
<body>
<form method = "post" action="EditProfile.php">
<?php
mysql_connect('localhost','root','');
mysql_select_db("tmdb");
$input_password = $_POST['password'];
$input_user_name = $_POST['user_name'];

$queryForAdmin = "select user_name, password from tmtable where s_no = 1";
$resForAdmin=mysql_query($queryForAdmin);
while($rowForAdmin=mysql_fetch_array($resForAdmin,MYSQL_BOTH)){
	$admin_password = $rowForAdmin['password'];
	$admin_user_name = $rowForAdmin['user_name'];
}


$queryForUser = "select user_name, password from tmtable";
$resForUser=mysql_query($queryForUser);
while($rowForUser=mysql_fetch_array($resForUser,MYSQL_BOTH)){
	if($input_password == $rowForUser['password'] and  $input_user_name == $rowForUser['user_name']){
		$user_password = $rowForUser['password'];
        $user_name = $rowForUser['user_name'];	
		
	}
}
if($input_password == $admin_password and $input_user_name == $admin_user_name){
	$query = "select * from tmtable"; 
	$resForAdmin=mysql_query($query);
	$res = $resForAdmin;	
}
		
else if($input_password == $user_password and $input_user_name == $user_name){
	$query = "select * from tmtable where password = '$user_password'"; 
	$resForUser=mysql_query($query);
	$res = $resForUser;	
}	
	
?>
<div id = "wlcm"> 
Welcome <?php echo $_POST["user_name"] . ' !!!'; ?><br>
</div>

<table align = "center">
<tr>

<?php if($input_password == $admin_password)
{
	?>
<th>S.No</th>
<?php
}
?>
<th>Name</th>
<th>Email</th>
<th>Website</th>
<th>Gender</th>
<th>DOB</th>
<th>Mobile</th>
<th>Address</th>
<th>Country</th>
<th>Method To Contact</th>
<th>User Name</th>
<th>Password</th>
<th>Edit Profile</th>
</tr>

<?php

while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>

<?php if($input_password == $admin_password)
{
	?>
<td><?php echo $row['S_no'];?></td>
<?php
}
?>
<td><input type="text" value = "<?php echo $row['name'];?>"></td>
<td><input type="text" value = "<?php echo $row['email'];?>" ></td>
<td><input type="text" value = "<?php echo $row['website'];?>" ></td>
<td><input type="text" value = "<?php echo $row['gender'];?>" ></td>
<td><input type="text" value = "<?php echo $row['dob'];?>" ></td>
<td><input type="text" value = "<?php echo $row['mobile'];?>" ></td>
<td><input type="text" value = "<?php echo $row['address'];?>" ></td>
<td><input type="text" value = "<?php echo $row['country'];?>" ></td>
<td><input type="text" value = "<?php echo $row['method_to_contact'];?>" ></td>
<td><input type="text" value = "<?php echo $row['user_name'];?>" name = "user_name"></td>
<td><input type="text" value = "<?php echo $row['password'];?>" name ="password" ></td>


<td><button type = "submit">Edit</button></td>
</tr>
<?php
}
?>


</table>
</form>
</body>
</html>
