<?php
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TechMove Database</title>
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
	<thead> 
		<tr>
			<th>S.no</th>
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
	</tr>
</thead>
<tbody>
<?php
mysql_connect('localhost','root','');
mysql_select_db("tmdb");


$query1="select password from tmtable where s_no = 1;";
$res1=mysql_query($query1);
while($row1=mysql_fetch_array($res1,MYSQL_BOTH)){
	$admin_password = $row1['password'];
}


$input_password = $_POST['password'];


if( $input_password != $admin_password){
	echo 'Wrong Username Or Password';
}


else if($admin_password == $input_password){
$query2="select * from tmtable";
$res2=mysql_query($query2);
}

while($row=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
	<tr>
		<td><?php echo $row['S_no'];?></td>
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
        <td><?php echo $row['password'];?></td>
    </tr>
<?php
}
?>
</tbody>
</table>
	
</body>
</html>




