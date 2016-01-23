<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/single.css">
</head>
<body>
	<div id="header">
		<div id="nav">
			<span class="nav-icon"></span>
			<div class="nav-menu-box">
				<div class="nav-bg"></div>
				<ul class="nav-menu">
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">PROTFOLIO</a></li>
					<li><a href="#">BLOG</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
				<div class="nav-close"></div>
			</div>
		</div>
	</div>
	<div id="container">
		<div class="wrap">
			<div class="wrap-left">
				<form method="post" action="welcome/message">
					<p>
						<span>YOUR NAME:</span>
						<input class="textbox" name="username" type="text" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
					</p>
					<p>
						<span>EMAIL:</span>
						<input class="textbox" name="email" type="text" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
					</p>
					<p class="message">
						<span>MESSAGE:</span>
						<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
					</p>
					<input class="button" type="submit" value="submit">
				</form>
			</div>
			<div class="wrap-right">
				<h3>ADDRESS</h3>
				<p>
					Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
				</p>
				<p>1-25-2568-897</p>
				<a href="">mail@portfolio.com</a>
			</div>
		</div>
	</div>
	<div id="map">
		<div class="map-">
           <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"></iframe> -->
        </div>
	</div>
	
	<div id="footer">
		<div class="footer-wrap">
			<div class="footer-bot">
				<p>Template by W3layouts</p>
				<ul>
					<li class="footer-bot1"></li>
					<li class="footer-bot2"></li>
					<li class="footer-bot3"></li>
					<li class="footer-bot4"></li>
				</ul>
			</div>
		</div>
	</div>
	<span id="move-top"></span>
	<script src="js/require.js" data-main="js/index.js"></script>
</body>
</html>