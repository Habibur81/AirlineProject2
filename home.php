<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body id="page2">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">AirLines</a><span id="slogan"></kbd>Airlines</kbd></span></h1>
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
              <li id="menu_active"><a href="home.php">Home</a></li>
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
    <div class="text1">SAFETY<span>always</span>
      <p><marquee><kbd>Fly with the most preferred Bangladeshi airlines.</kbd></marquee></p>

    </div>
</div>
</div>
<div class="main">
  <section id="content">
    <article class="col1">
      <div class="pad_1">
        <h2>Book your Flight</h2>
        <form id="form_1" action="book.php" method="post">
          <div class="wrapper pad_bot1">
            <div class="radio marg_right1">
              <input type="radio" name="flight_type" value="Round Trip">
              Round Trip<br>
              <input type="radio" name="flight_type" value="One Way">
              One Way </div>
          </div>
          <div class="wrapper"> Leaving From:
            <div class="bg">
              <input type="text" name="l_from" class="input input1" placeholder="Enter City">
            </div>
          </div>
          <div class="wrapper"> Going To:
            <div class="bg">
              <input type="text" name="g_to" class="input input1" placeholder="Enter City">
            </div>
          </div>
          <div class="wrapper"> Departure Date:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" name="d_date" class="input input2" placeholder="mm/dd/yyyy">
              </div>
            </div>
          </div>
          <div class="wrapper"> Return Date:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" name="r_date" class="input input2" placeholder="mm/dd/yyyy">
              </div>
            </div>
          </div>
          <div class="wrapper">
            <p>Passenger(s):</p>
            <div class="bg left">
              <input type="text" name="passenger" class="input input2" placeholder="Number">
            </div>
            <button type="submit" class="button2">go!</button> </div>
        </form>
        
      </div>
    </article>
    <article class="col2 pad_left1">
      <h2>Welcome to our Website!</h2>
      <p>Welcome to ES_Airlines Bangladesh, where you are made to feel like an honoured guest and not just a passenger.  At ES_AirLines local airways, passenger can reach there destination within 30-40 min in Bangladesh .</p>
      <p>As AirLines International AirWays takes off into the international skies, you can expect a world-class experience. Every ES_Airlines aircraft meets the global standards that we have set in terms of safety and performance.</p>
      <p>We invite you to fly ES_AirLines local AirWays and experience a journey we strive to create difference place in Bangladesh.  A journey like never before.</p>

	  <div class="wrapper">
        <article class="cols">
          <h2>Services & Facilities</h2>
  <div class="marker">
	<p class="pad_bot2"><strong>Advance Air-conditioning System</strong></p>
	</div>
	<div class="marker">
	<p class="pad_bot2"><strong>On-Time Departure</strong></p>
	</div>
	<div class="marker">
	<p class="pad_bot2"><strong>Latest Aircraft</strong></p>
	</div>
        </article>
        
      </div>
    </article>
  </section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <p class="lf">Copyright &copy; 2015. ES_Bangla AirLines Bangladesh - Powered by Enam</p>
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