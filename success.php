<?php
	session_start();
	$flight_type=$_SESSION['temp1'];
	$l_from=$_SESSION['temp2'];
	$g_to=$_SESSION['temp3'];
	$d_date=$_SESSION['temp4'];
	$r_date=$_SESSION['temp5'];
	$passenger=$_SESSION['temp6'];
	
	require('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines | Book</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page5">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">AirLines</a><span id="slogan">Airlines</span></h1>
        <div class="right">
          <nav>
            <ul id="top_nav">
              <li><a href="home.php"><img src="images/img1.gif" alt=""></a></li>
              <li><a href="info.php"><img src="images/img2.gif" alt=""></a></li>
              <li class="bg_none"><a href="contact.php"><img src="images/img3.gif" alt=""></a></li>
            </ul>
          </nav>
          <nav>
            <ul id="menu">
              <li><a href="home.php">Home</a></li>
              <li><a href="aircrafts.php">Our Fleet</a></li>
              <li><a href="safety.php">Safety</a></li>
              <li><a href="info.php">Flight Info</a></li>
              <li><a href="about.php">About</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="main">
  <div id="banner">
    <div class="text1"> SAFETY<span>Guaranteed</span>
      <p>fly with us</p>
    </div>
  </div>
</div>
<div class="main">
  <section id="content">
    <article class="col1">
      <div class="pad_1">
        <p><h2>Ticket Info</h2>
        AirLines International AirWays<br>
        123/A, Road No. 12<br>
		Banani, Dhaka-1220<br>
		Bangladesh<br>
        Telephone: +123 45 6789<br>
        Email: info@airlines.com<br>
        </p><p>
        <h2>Make sure your flight is ready for you...</h2></p>
      </div>
    </article>
    <article class="col2 pad_left1">
	<?php
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone_no=$_POST['phone_no'];
		if(!$name || !$email || !$phone_no)
		{
			
		}
		else
		{
			if($flight_type=="Round Trip")
			{
				echo "<p><h3>Sucessful!</h3></p>";
				mysql_query("INSERT INTO book VALUES (NULL, '$flight_type', '$l_from', '$g_to', '$d_date', '$r_date', '$passenger', '$name', '$email', '$phone_no')") or die(mysql_error());
			}
			else if($flight_type=="One Way")
			{
				echo "<p><h3>Sucessful!</h3></p>";
				mysql_query("INSERT INTO book VALUES (NULL, '$flight_type', '$l_from', '$g_to', '$d_date', 'N.A', '$passenger', '$name', '$email', '$phone_no')") or die(mysql_error());
			}
		}
	?>
    </article>
  </section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <p class="lf">Copyright &copy; 2015 ES_Bangla AirLines - Powered by Enam</p>
		<p class="rf">Hotline: +880 12 3456789</p>
        <div style="clear:both;"></div>
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>