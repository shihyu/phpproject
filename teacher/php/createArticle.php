<?php
  //manage the session
  include 'session.php';
?>
<html>
<head>
    <title>create article</title>
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/ind.css">
	<link rel = "stylesheet" type = "text/css" href = "../../common/css/head_bottom.css">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src= "../../common/js/reg.js"></script>
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
<body >

	<!-- include header file-->

	<?php
	  include '../../common/html/header.html';
	?>
	<!-- designing code-->
	<div class = "formdes" id="page">
		<?php
		session_start();
		?>
		<div class="subheader">
			<span class="subheaderwc">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
			<a href="../../common/php/logout.php"><span class="logout">Logout</span></a>
			<a href = "teacher.php" > Home </a>
			<a href = "createArticle.php" >Create Article </a >
			<a href = "content.php" >Create Content </a >
			<a href = "../../common/php/showArticle.php" > Show  Articles </a>
			<a href = "showContent.php" > Show  Contents </a>
		</div>
			<h2><p id = "formloginid">Create Your News Article Here</p></h2>
            <!-- design code for create article page-->
            <div class="formbackground">
			<form  action = "saveArticle.php" method = "POST">
				<input type = "text" name = "title22" class = "textbox" placeholder = "Enter Title "><br>
				<textarea name = "article" class = "articlebox" placeholder = "Enter Article" rows="3" cols="25"></textarea><br>
				<span class = "selectRadio">Select Status Type</span>
				<span class = "statusText">Private<span><input type = "radio" name = "status" value = "private" class="radio" checked="checked">
				<span class = "statusText">Public</span><input type = "radio" name = "status" value = "public" class="radio"><br>
				<?php
				  echo '<div class = "loginerror">';
				  $reasons = array("password" => "Provide All The Field", "blank" => "You have left one or more fields blank.");
				  if ($_GET["loginFailed"])
				  echo $reasons[$_GET["reason"]];
				  echo '</div>';
			    ?>
			    </br>
				<input type = "submit" name = "submit" value = "Submit"  id = "loginid">
            </form>
            </div>

	</div>
			<!-- include bottom file-->
	<?php
	  include '../../common/html/bottom.html';
	?>

</body>
</html>
