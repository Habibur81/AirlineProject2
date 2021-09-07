<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines | Aircrafts</title>
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
              <li id="menu_active"><a href="aircrafts.php">Our Fleet</a></li>
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
  <section id="content">
    <article class="col1">
      <div class="pad_1">
                <h2>Book your Flight</h2>
        <form id="form_1" action="#" method="post">
          <div class="wrapper pad_bot1">
            <div class="radio marg_right1">
              <input type="radio" name="name1">
              Round Trip<br>
              <input type="radio" name="name1">
              One Way </div>
          </div>
          <div class="wrapper"> Leaving From:
            <div class="bg">
              <input type="text" class="input input1" value="Enter City or Airport Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Going To:
            <div class="bg">
              <input type="text" class="input input1" value="Enter City or Airport Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Departure Date:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
              </div>
            </div>
          </div>
          <div class="wrapper"> Return Date:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
              </div>
            </div>
          </div>
          <div class="wrapper">
            <p>Passenger(s):</p>
            <div class="bg left">
              <input type="text" class="input input2" value="# passengers" onBlur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''">
            </div>
            <a href="book.php" class="button2">go!</a> </div>
  
      </div>
    </article>
    <article class="col2 pad_left1">
      <h2>Your comfort comes first</h2>
      <div class="wrapper">
        <figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
        <p>Our fleet is one of the youngest in the world, meaning that along with exceptional service and inflight entertainment, you can rely on the utmost in comfort and the latest in cabin design no matter where you’re seated.</p>
		<P>Most of our fleet is now made up of ultra-modern A380s and spacious Boeing 777s, making your experience world class in every class.</
      </div>
      <h2>Entertainment</h2>
      <div class="wrapper">
        <figure class="right marg_left1"><img src="images/page2_img2.jpg" alt=""></figure>
        <p>Our fleet is equipped with various kinds of entertaining services and it has home like environment. Thats why you will never get bored while you are on board.</p>
		<p>Enjoy hours of music, the latest Hollywood, Bollywood and World Cinema movies, and even episodes of your favourite TV shows. Or keep your mind alert by playing one of our many interactive games.</p>
      </div>
    </article>
  </section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <p class="lf">Copyright &copy; 2015. ES_Bangla AirLines Bangladesh - Powered By Enam</p>
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