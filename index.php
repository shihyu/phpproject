<html>
<head>
	<title>Login page</title>
	<link rel = "stylesheet" type = "text/css" href = "common/css/ind.css">
	<link rel = "stylesheet" type = "text/css" href = "common/css/head_bottom.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src = "common/js/reg.js"></script>
	<!-- script execute after java script is off done by browser -->
	<noscript>
		<style type = "text/css">
			#checkvalue {display:none;}
		</style>
		<div class = "noscriptmsg">
			You don't have javascript enabled.  Good luck with that.
			<br>
			Please Enable your java Sript.
		</div>
	</noscript>
</head>

<body>


	
    <!--include the header file -->
    <?php
      include 'common/html/header.html';
    ?>
     <!--login form -->
    <div class = "formdes" id="page">
    <h2><p id = "formloginid"> Please Login From Here </p></h2> 
    <p align="center">
       <em>Login with your username or email</em>
    </p>
        <div class = "formbackground">
		
		<form  action = "admin/php/loginval.php" method = "POST" >
			<input type = "text" name = "mail1" class = "textbox" placeholder = "Enter Email"><br>
			<input type = "password" name = "pass" class = "textbox" placeholder = "Enter password"><br>
			<?php 
			  echo '<div class = "loginerror">';
			  echo '<br>';
			  $reasons = array("password" => "Wrong Username or Password", "blank" => "You have left one or more fields blank."); 
			  if ($_GET["loginFailed"]) 
			  echo $reasons[$_GET["reason"]];
			  echo '</div>'; 
			?>			
			<input type = "submit" name = "submit" value = "Login"  id = "loginid">
		</form>
		</div>
   </div>
    <!--include the bottom file -->
    <?php
      include 'common/html/bottom.html';
    ?>
</body>
</html>
