<!DOCTYPE html>
<html>
<head>
  <title>Van Excel Panguito Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-with, inital-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Slabo+27px" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <style type="text/css" rel="stylesheet">
    *{
      font-family: Poppins;
    }





  </style>
</head>
<body>
  <header class="main-header"> <!--section for header-->
  <div class="header-container">
      <a class="header-logo" href="index.php">VAN EXCEL</a> <!--LOGO-->
      <nav class="navigation">  <!--Navigation links-->
        <ul>
          <li><a href="about.php">About me</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <a class="header-email" href="#contact">Email me</a>
  </div>
  </header>
    <main class="contact-container" >
	<div class="contact-wrapper">
		<h4 class="contact-header">HERE ARE SOME WAYS ON HOW YOU CAN CONTACT GET IN TOUCH WITH ME.</h4>
		<section class="wrap">
			<div class="contact-nums">

				<div class="calls" >
					<img src="img/mobile-logo.png"></img>
					<h3>: 0995-160-0656</h3>
				</div>
				<div class="calls">
					<img src="img/landline-logo.png"></img>
					<h3>: 6365-311</h3>
				</div>
				<div class="calls">
					<img src="img/gmail.png"></img>
				<h3>: <a href="">vaneksel123@gmail</a></h3>
				</div>
				<div class="calls">
					<img src="img/fb.png"></img>
					<h3>: <a href="#">Van Excel Panguito</a></h3>
				</div>
				<div class="calls">
					<img src="img/instagram.png"></img>
					<h3>: <a href="#">Van Excel Panguito</a></h3>
				</div>
			</div>
		</section>
	`	<section class="contact-section">
			<div class="contact-form">
				<form action="includes/contact.inc.php" method="POST">
					<h2 id="contact" >Send a message for me via Email</h2>
					<a class="emaillink" href="#">@vaneksel123@gmail.com</a>
					<p>NOTE: by doing so, you have agreed to the <a href="#">terms and condition</a></p>
						<input class="input-text" id="name" name="name" type="text"  placeholder="INPUT NAME HERE">
						<input class="input-text" id="company" name="company" type="text" id="cname" placeholder="INPUT COMPANY NAME HERE">
						<input class="input-text" id="email" name="email" type="text" id="email" placeholder="INPUT E-MAIL ADDRESS HERE">
						<input class="input-text" id="address" name="address" type="text" id="address" placeholder="COMPANY ADDRESS">
						<textarea name="message" placeholder="COMPOSE A MESSAGE FOR ME" ></textarea> 
						<button style="margin-left: 10px;" name="subemail" type="submit" value="submit">SEND TO E-MAIL</button>
				</form>
			</div>
		</section>
	 </div>
      <!-- section class="contact-section">
			<div class="contact-form">
				<form action="contact.inc.php" method="">
					<h2 style="border-top: 1px solid #9ab08c;">Compose a message for me</h2>
					<p>NOTE: This message will be sent to the database</p>
						<input class="input-text" id="name" name="name" type="text"  placeholder="INPUT NAME HERE">
						<input class="input-text" id="company" name="company" type="text" id="cname" placeholder="INPUT COMPANY NAME HERE">
						<input class="input-text" id="email" name="email" type="text" id="email" placeholder="INPUT E-MAIL HERE">
						<input class="input-text" id="address" name="address" type="text" id="address" placeholder="COMPANY ADDRESS">
						<textarea name="message" placeholder="COMPOSE A MESSAGE FOR ME" ></textarea>
						<button name="submit" type="submit">SEND MESSAGE</button>

				</form>
			</div>
      </section -->
    </main>
    <footer>
      <div class="footer-container">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="about.php">About me</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="socialmedia-links">
          <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><img src="img/gmail.png" ></a>
          <a href="https://www.facebook.com/vanexcel.panguito" target="_blank"><img src="img/fb.png"></a>
          <a href="https://www.instagram.com/vanexcelpanguito/?hl=en" target="_blank"><img src="img/instagram.png"></a>
        </div>
      </div>
    </footer>

</body>
</html>
