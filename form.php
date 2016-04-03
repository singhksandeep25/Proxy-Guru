<?php
session_start();
if(isset($_SESSION['user'])=="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$date = mysql_real_escape_string($_POST['date']);
	$treat = mysql_real_escape_string($_POST['treat']);
	$user_id = mysql_real_escape_string($_POST['user_id']);
	$teacher = mysql_real_escape_string($_POST['teacher']);
	$other = mysql_real_escape_string($_POST['other']);
	$batch = mysql_real_escape_string($_POST['batch']);
	$section = mysql_real_escape_string($_POST['section']);

	$date = trim($date);
	$treat = trim($treat);
	$user_id = trim($user_id);
	$teacher = trim($teacher);
	$other = trim($other);
	$batch = trim($batch);
	$section = trim($section) ;

	if(mysql_query("INSERT INTO request(date,treat,user_id,teacher,other,batch,section) VALUES('$date','$treat','$user_id','$teacher','$other','$batch','$section')"))
	{
		?>
		<script>alert('successfully submitted');</script>
		<?php
			
	}
	else
	{
		?>
		<script>alert('error while registering you...');</script>
		<?php
	}		

	
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="images/new.png" sizes="32x32">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Submit Request</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

</head>
<body style="background-color:#e0f2f1">
<center>
<div id="login-form">
<form method="post">
<table style="background-color:#ffffff" align="center" width="60%" border="0">
<tr>
<td colspan="50"><input type="text" id="datepicker" name="date" placeholder="DD/MM/YYYY" required /></td>
</tr>
<tr>
<td colspan="50"><input type="text" name="user_id" placeholder="User Id" required /></td>
</tr>
<tr>
<td colspan="50"><input type="teacher" name="teacher" placeholder="Teacher" required /></td>
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
<td colspan="50"><a><span style = "color :black ">Treat Options</span></a></td>
</tr>
<tr>
<td><input type="radio" name="treat" value="Cafeteria" style="height:15px; width:15px;vertical-align: middle;" checked>Cafeteria</td>
<td><input type="radio" name="treat" value="Old Canteen" style="height:15px; width:15px;vertical-align: middle;">Old Canteen</td>
<td><input type="radio" name="treat" value="Night Canteen" style="height:15px; width:15px;vertical-align: middle;">Night Canteen</td>
<td><input type="radio" name="treat" value="None" style="height:15px; width:15px;vertical-align: middle;">None</td>
<tr>
<td colspan="100"><input type="textarea" name="other" placeholder="Other Treat Options"></td>
</tr>
<tr>
<td colspan="50"><button type="submit" name="btn-signup">Add Proxy Request</button></td>
</tr>
<tr>
<td><a href="home.html">Go Back</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
