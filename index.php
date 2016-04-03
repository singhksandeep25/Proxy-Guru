<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$active=$userRow['active'];
if($active==0)
{
		header("Location: verify.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Home</title>
  <link rel="icon" href="images/new.png" sizes="32x32">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<a id="home">
<div class="navbar-fixed">
</a>
  <nav class="#5f5f5f black-we-want" role="navigation">

    <div class="nav-wrapper container">
      <a id="logo-container" href="#home" class="brand-logo">Home</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#mission">Mission</a></li>
        <li><a href = "#about_us">About Us</a></li>
  <li><a href = "#services">Privacy Policy</a></li>
  <li><a href = "#contact">Contact Us</a></li>
  <li><a href = "login.php">Login</a></li>
  <li><a href = "register.php">Signup</a></li>

      </ul>

   


  
  <ul id="slide-out" class="side-nav">
     <li><a href="#mission">Mission</a></li>
        <li><a href = "#about_us">About Us</a></li>
  <li><a href = "#services">Privacy Policy</a></li>
  <li><a href = "#contact">Contact Us</a></li>
  <li><a href = "login.php">Login</a></li>
  <li><a href = "register.php">Signup</a></li>
  </ul>
  <a href="#home" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu" style="color:black;"></i></a>

      
    </div>

  </nav>
</div>

  <div id="index-banner" class="parallax-container">

    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 style="color:black;"  class="header center cyan.lighten-3" font-weight=800 >Welcome To Proxy Solutions</h1>
        <div class="row center">
          <h5 class="header col s12  black-text text-accent-3">Post your requests and help others</h5>
        </div>
        <div class="row center">
          <a href="register.php" id="download-button" class="btn-large waves-effect waves-light black-we-want">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax" id="over"><img src="images/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

<a name="overview">
  <div class="container">
    <div class="section">

      
      

    </div>
  </div>

<a id="overview">
  <div class="parallax-container valign-wrapper">
</a>
    
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>
<a id="mission">
  <div class="container">
</a>
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="material-icons"></i></h3>

          <h4>Mission</h4>
          <p class="left-align light"> As fellow college students we understand the miseries students have to undergo everyday while attending boring lectures. But no worries cause we are here. So want to go to a movie date with your girfriend and attend first day first show, go ahead!! We got you covered. Want to grab some extra sleep, sure why not. Just setup an account and send proxy requests, we will hook you up with the right peeps!! Whats more, the service is absolutely free </p>
        </div>
      </div>

    </div>
  </div>
 <div class="parallax-container valign-wrapper">
    
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 2"></div>
  </div>
<a id="about_us">
  <div class="container">
</a>
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="material-icons"></i></h3>
          <h4>About Us</h4>
          <a href="https://www.facebook.com/khareabhinav"><p class="left-align light">Abhinav Khare</p></a>
  <a href="https://www.facebook.com/sandeepksingh25"><p class="left-align light">Sandeep Kumar Singh</p></a>
  <a href="https://www.facebook.com/padiashubham?fref=ts"><p class="left-align light">Shubham Padia</p></a>

  <p class="left-align light"> We three are college students currently pursuing Bachelors in Technology from Indian Institute of Information Technology, Allahabad
</p>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
        <div class="parallax"><img src="background4.png" alt="Unsplashed background img 2"></div>
  </div>
<a id="services">
  <div class="container">
</a>
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="material-icons"></i></h3>
          
        <h4>Privacy Policy</h4>
       <p class="left-align light"> This privacy policy sets out how Proxy Solution uses and protects any information that users give Proxy Solutions when they use this website. Proxy Solutions is committed to ensuring that your privacy is protected. If we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement. Proxy Solutions may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes.
</p>
<h5>Security</h5>
<p class="left-align light"> We are committed to ensuring that your information is secure. In order to prevent unauthorized access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.
</p>
<h5>Want to know more?</h5>
<p class="left-align light"> Click <a href ="contact.php">here!</a>
</p>

        </div>
      </div>

    </div>
  </div>


<a id="contact">
  <div class="parallax-container valign-wrapper">
</a>
    
    <div class="parallax"><img src="background6.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer black-we-want">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Contact Us</h5>
          <p class="white-text" >For hugs and bugs, shoot an email to any of us: </p>
          <p class="white-text" >Abhinav Khare : iit2015036@iiita.ac.in</p>
<p class="white-text">Sandeep Kumar Singh : iit2015014@iiita.ac.in</p>
<p class="white-text">Shubham Padia : iit2015074@iiita.ac.in</p>
</div>
        

      </div>
    </div>
    
  </footer>


  

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
