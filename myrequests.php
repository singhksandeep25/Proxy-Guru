<?php
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
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
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
    </script>
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body>
    <header>
      <nav class="top-nav" >
        <div class="container">
          <div class="nav-wrapper"><a href = "home.html" class="page-title">Home</a></div>
        </div>
      </nav>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        
       <!-- <a id = "bar" style="font-family: Roboto, sans-serif">-->


        <li class="bold"><a class=fo href="about.html" class="waves-effect waves-teal">About</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
        
        <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Mobile</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
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
 	$request_users = $row['request_users'];
 	$request_no = $row['request_no'];
 	$teacher = $row['teacher'];
 	$treat = $row['treat'];
 	$section = $row['section'];
 	$batch = $row['batch'];
 	$other = $row['other'];
 	$status = $row['color'];
 	if($user_id==$user_id_2){
  	echo '<script type = "text/javascript">document.getElementById("'.$x.'").className = "card light-green accent-3";</script>';
 	
 	
 	

         echo'<div class="row">
        <div class="col s12 m24">
          <div class="card red darken-1" id = "'.$x.'">
            <div class="card-content white-text">';
            echo'<span class="card-title">'.$status.'</span>';
                         echo"<p> Date:".$date." || Teacher:".$teacher." || ".$apple." || section: ".$section."  || ". $batch."</p><br>";
                         echo"<p> Treat: ". $row['treat']." Other:".$other." Requested By:".$user_id."</p>";
           echo' </div>
            <div class="card-action">
              <a id = "accept'.$x.'" onclick = "hide('.$x.')"> <button class="ctrl-standard is-reversed typ-subhed fx-sliderIn">Request Proxy</button></a>
              <a  id = "already'.$x.'"style = "visibility:hidden"> <button class="ctrl-standard is-reversed typ-subhed fx-bubbleDown">Proxy Submitted
         </button></a>
            </div>
          </div>
        </div>
      </div>';
   
      
 	
 	
 	}
      
  }          

        ?><script type = "text/javascript">
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
