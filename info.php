<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines | Flight Info</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body id="page4">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">AirLines</a><span id="slogan"> Airlines</span></h1>
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
              <li id="menu_active"><a href="info.php">Flight Info</a></li>
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
        <div class="bg left">
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
        </form><p><p><p>
        <h2>Comfort and attention to deatil you can rely on whenever you travel</h2></p></p></p>
      </div>
    </article>
    <article class="col2 pad_left1">
		<h2>Flight Info</h2>
        <div class="bg left">
        <form id="form_1" action="query.php" method="post">
          <div class="wrapper pad_bot1">
            <div class="radio marg_right1">
              <input type="radio" name="type" value="fair">
              Fair<br>
              <input type="radio" name="type" value="schedule">
              Schedule</div>
          </div>
          <div class="wrapper"> Leaving From:
            <div class="bg">
              <input type="text" name="from" class="input input1" placeholder="Enter City">
            </div>
          </div>
          <div class="wrapper"> Going To:
            <div class="bg">
              <input type="text" name="to" class="input input1" placeholder="Enter City">
            </div>
          </div>
			<br><button type="submit" class="button1">query</button></br></div>
        </form>
		</div>
    </article>
  </section>
</div>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <p class="lf">Copyright &copy; 2015 ES_Bangla AirLines  - Powered by Enam</p>
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