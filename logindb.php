<?php
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<style> 
		table{
			border: 1px solid black;
			text-align: center;
			font-family:;
			border-collapse:collapse;
						
		}
		table tr th{
			color:silver;
			background-color:brown;
			padding: 10px;
			text-transform:capitalize;
			font-variant:small-caps;
			word-spacing:;
			line-height:;
			font-weight:solid;
			text-align:center;
			padding:10px;
			vertical-align:middle;
			
		}
		table tr td {
			text-transform:lowercase;
			border-bottom: 1px solid brown;
			color:brown;
			background-color:silver;
			padding: 5px;
			font-weight:solid;
			text-align:center;
			vertical-align:middle;
			
		}
	</style>
</head>
<body>
	<table align = "center">
<tr>
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
</tr>
<?php
mysql_connect('localhost','root','');
mysql_select_db("tmdb");
$password = $_POST['password'];
$query = "select * from tmtable where password = '$password' ";
$res=mysql_query($query);

while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['website'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['country'];?></td>
<td><?php echo $row['method_to_contact'];?></td>
<td><?php echo $row['user_name'];?></td>
</tr>
<?php
}
?>


</table>
</body>
</html>
