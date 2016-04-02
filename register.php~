<?php
/*session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$gender = mysql_real_escape_string($_POST['gender']);
	$batch = mysql_real_escape_string($_POST['batch']);
	$section = mysql_real_escape_string($_POST['section']);
	$s_code = md5(mysql_real_escape_string($_POST['s_code']));
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$first_name = mysql_real_escape_string($_POST['first_name']);
	$last_name = mysql_real_escape_string($_POST['last_name']);
	$ver_code = rand(100000,999999);

	
	$email = trim($email);
	$upass = trim($upass);
	$first_name = trim($first_name);
	$last_name = trim($last_name);
	$ver_code = trim($ver_code);
	$gender = trim($gender);
	$batch = trim($batch);
	$section = trim($section);
	$s_code=trim($s_code);


	// email exist or not
	$query = "SELECT user_email FROM users WHERE user_email='$email'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if email not found then register
	
	if($count == 0){
		
		if(mysql_query("INSERT INTO users(user_email,user_pass,first_name,last_name,ver_code) VALUES('$email','$upass','$first_name','$last_name','$ver_code')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
				header("Location: mail.php");
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');</script>
			<?php
	}
	
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link rel="icon" href="images/new.png" sizes="32x32">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr width="400">
<td colspan="50"><input type="text" name="first_name" placeholder="First Name" required /></td>
</tr>
<tr>
<td colspan="50"><input type="text" name="last_name" placeholder="Last Name" required /></td>
</tr>
<tr>
<td colspan="50"><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td colspan="50"><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td colspan="50"><a><span style = "color :black ">Gender</span></a></td>
</tr>
<tr>
<td><input type="radio" name="gender" value="male" style="height:15px; width:15px;vertical-align: middle;" checked>Male</td>
<td><input type="radio" name="gender" value="female" style="height:15px; width:15px;vertical-align: middle;"> Female</td>
<td><input type="radio" name="gender" value="other" style="height:15px; width:15px;vertical-align: middle;"> Other</td>
</tr>

<tr>
<td colspan="50"><a><span style = "color :black ">Batch</span></a></td>
</tr>
<tr>
<td><input type="radio" name="batch" value="15" style="height:15px; width:15px;vertical-align: middle;" checked>B2K15</td>
<td><input type="radio" name="batch" value="14" style="height:15px; width:15px;vertical-align: middle;"> B2K14</td>
<td><input type="radio" name="batch" value="13" style="height:15px; width:15px;vertical-align: middle;"> B2K13</td>
<td><input type="radio" name="batch" value="12" style="height:15px; width:15px;vertical-align: middle;"> B2K12</td>
<td><input type="radio" name="batch" value="11" style="height:15px; width:15px;vertical-align: middle;"> B2K11</td>
</tr>

<tr>
<td colspan="50"><a><span style = "color :black ">Section</span></a></td>
</tr>
<tr>
<td><input type="radio" name="section" value="a" style="height:15px; width:15px;vertical-align: middle;" checked>A</td>
<td><input type="radio" name="section" value="b" style="height:15px; width:15px;vertical-align: middle;">B</td>
<td><input type="radio" name="section" value="c" style="height:15px; width:15px;vertical-align: middle;">C</td>
</tr>
<tr>
<td colspan="50"><input type="password" name="s_code" placeholder="Type In Your Secret Code" required /></td>
</tr>
<tr>
<td colspan="50"><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td colspan="50"><a href="login.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>


