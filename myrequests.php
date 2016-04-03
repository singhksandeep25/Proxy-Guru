marke<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user'])!="")
{
    header("Location: login.php");
}
?>

<!DOCTYPE html>

<html lang="en">
  <head>
  <!--<style> #bar{ font-family: "Roboto", sans-serif;}</style>-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title>Profile</title>
    <!-- Favicons-->
   <link rel="icon" href="images/new.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/new.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/prism.css" rel="stylesheet">
     <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/reset.css">

   <link rel='stylesheet prefetch' href='css/default.css'>

       <link rel="stylesheet" href="css/style1.css">

    
    
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
     <script type = "text/javascript">
    function hide(i){
     //alert(i);
    document.getElementById("accept"+i).style.visibility="hidden";
     document.getElementById("already"+i).style.visibility="visible";
    
   
    }
    function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     //document.getElementById("demo").innerHTML = xhttp.responseText;
    	console.log("jhrllo");
    }
  };
  xhttp.open("GET", "req.php?accept_id=2", true);
  xhttp.send();
} 
    </script>
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body>
    <header>
      <nav class="top-nav" >
        <div class="container">
          <div class="nav-wrapper"><a href = "home.php" class="page-title">Home</a></div>
        </div>
      </nav>
      
      <ul id="nav-mobile" class="side-nav fixed">
        
       <img src ="images/new.png" height="225" width="225" >
        
       <!-- <a id = "bar" style="font-family: Roboto, sans-serif">-->


        <li class="bold"><a class=fo href="home.html" class="waves-effect waves-teal">Home</a></li>
        <li class="bold"><a href="marketplace.php" class="waves-effect waves-teal">The Proxy Place</a></li>
        
        <li class="bold"><a href="myrequests.php" class="waves-effect waves-teal">My Requests</a></li>
        <li class="bold"><a href="contact.php" class="waves-effect waves-teal">Contact Us</a></li>
      </ul>

      </a>
    </header>
    <main>
        <h2 class="header">My Requests</h2>

        

          
              <?php
session_start();
include_once 'dbconnect.php'; 
$servername = "localhost";
$username = "restles6_12345";
$password = "12345";
$dbname = "restles6_1";
$conn = new mysqli($servername, $username, $password, $dbname);
$user_id_2 = $_SESSION['user'];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo '<script>var y[100][100];</script>';
$sql = "SELECT request_id, user_id,request_users,request_no, date,teacher,treat,other,color,batch,section from request";
$sql2 = "SELECT my_requests from users where user_id = ".$user_id_2;
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
while($row2 = mysqli_fetch_array($result2))
{
$my_requests = $row2['my_requests'];
}

$x = 1;
       while($row = mysqli_fetch_array($result))
 {
 	$date = $row['date'];
 	$user_id = $row['user_id'];
 	$request_id = $row['request_id'];
 	$request_users = $row['request_users'];
 	$request_no = $row['request_no'];
 	$teacher = $row['teacher'];
 	$treat = $row['treat'];
 	$section = $row['section'];
 	$batch = $row['batch'];
 	$other = $row['other'];
 	$status = $row['color'];
 	$quo = explode(" ",$request_users);
 	if($user_id==$user_id_2){
  	//echo '<script type = "text/javascript">document.getElementById("'.$x.'").className = "card light-green accent-3";</script>';
 	
 	
 	

         echo'<div class="row">
        <div class="col s12 m24">
          <div class="card red darken-1" id = "'.$x.'">
            <div class="card-content white-text">';
            echo'<span class="card-title">'.$status.'</span>';
                         echo"<p> <b>Date</b> : ".$date." || <b>Teacher</b> : ".$teacher." || ".$apple." || <b>Section</b> : ".$section."  || ". $batch."</p><br>";
                         echo"<p> Treat : ". $row['treat']." Other Treat Options : ".$other." Requested By : ".$user_id."</p>";
                          for($j=0;$j<$request_no;$j++)
                         {
                         echo '<script>    function loadDoc(x,y) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     //document.getElementById("demo").innerHTML = xhttp.responseText;
    	console.log("jhrllo");
    }
  };
 // var z = <?php echo $request_id;?>;
 // alert(z);
  xhttp.open("GET", "both_accept.php?request_id="+x+"&user_id="+y, true);
  xhttp.send();
}                    var btn = document.createElement("a");btn.className = "waves-effect waves-light btn";var t = document.createTextNode('.$quo[$j].'); btn.appendChild(t);
document.getElementById("'.$x.'").appendChild(btn);onclick = function(){

var x = '.$user_id.';
var y = '.$request_id.';
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     //document.getElementById("demo").innerHTML = xhttp.responseText;
    	console.log("jhrllo");
    }
  };
 // var z = <?php echo $request_id;?>;
 // alert(z);
  xhttp.open("GET", "both_accept.php?request_id="+y+"&user_id="+x+"", true);
  xhttp.send();
  xhttp.open("GET", "anon_mail.php?request_id="+y+"&user_id="+x+"", true);
  xhttp.send();






};
</script>  '  ;             // Append <button> to <body>';
                         }
                        
            echo'</div>
            <div class="card-action">
              <a id = "accept'.$x.'" > <button class="ctrl-standard is-reversed typ-subhed fx-sliderIn" onclick="loadDoc()">Yes</button></a>
              <a  id = "already'.$x.'"> <button class="ctrl-standard is-reversed typ-subhed fx-bubbleDown">No
         </button></a>
            </div>
          </div>
        </div>
      </div>';$x++;
 	}}
?>
<script type = "text/javascript">
        //alert(<?php echo $quo[1] ?>);</script>
            
    <!--  Scripts-->
   
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="js/jquery.timeago.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="jade/lunr.min.js"></script>
    <script src="jade/search.js"></script>
    <script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>
    </body>
</html>
