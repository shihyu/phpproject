<?php
  //manage the session
  include 'session.php';
?>
<html>
<head>
	<title>full Content</title>
	<link rel = "stylesheet" type = "text/css" href = "ind.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>

<body >
	<?php
	  include 'header.html' ;
	?>
	<div class="formdes">
		<div class="subheader">
		  <span style="color:#FACF1C;">Welcome &nbsp; <?php echo ucwords($_SESSION['uname2']) ?></span>
		  <a href="logout.php"><span class="logout">Logout</span></a>
			
		</div>
		<div style = "width:700px; height:auto; background-color:#FFF1A8; margin-left: auto;
		margin-right:auto; text-align:center;" id="cdiv">

		<?php
        //get the id from url
		$aid=$_GET['aid'];

        // include mysql connection file
		include 'mysql.php';

        // Retriving the value from article table
		$sql = "SELECT * FROM contents  where contentid='$aid' ";
		$result = mysql_query( $sql,$conn);
		while( $row = mysql_fetch_array( $result, MYSQL_ASSOC ))
		{
			echo '<b>' . $row['title'] . '</b>';
			echo '<br>';
			echo $row['content_text'];

		}
		mysql_close($conn);
		?>
		<!-- design of bottom border  -->
		<br>
		<div style = "width:700px;height:40px;background-color:#B6B6B6;margin-top:20px;" id="aa"></div>
	    </div>
    </div>
    <?php 
     include 'bottom.html';
    ?>
</body>
</html>