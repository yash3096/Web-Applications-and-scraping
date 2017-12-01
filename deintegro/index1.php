
<!DOCTYPE html>
<html>
<head>
<style>
body, html {
	 background-color:#FFF9C4;
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Comic Sans MS", sans-serif;
  color: #777;
  
}

table{
	margin-top: 50px;
}
table tr th img{
	width: 70%;
}
.first
{
	 background-color:#FFF9C4;
	height: 500px; 
	 white-space:nowrap;
    overflow:hidden;
	padding-bottom: 0;
}
.inner1-first
{
	display: inline-block;
	min-width: 200px;
	width: 60%;
	height: auto;
	
}
.inner1-second
{
	display: inline-block;
	overflow: auto;
	position: top;
	min-width: 200px;
	height: 100%;
}

.bgimg2{
	
  height:100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 1020px 600px;	
   background-image: url("image/DE INTEGRO PRODUCTLINE  .jpg");
  min-height: 100%;
}
/*
.bgimg-1, .bgimg-2{
  position: relative;
 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 720px 300px;
}
.bgimg-1 {
	
  background-image: url("image/BACKGROUND.PNG");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("image/DE INTEGRO PRODUCTLINE  .jpg");
  min-height: 100%;
}
*/
.bgimg-3 {
  background-image: url("image/DE INTEGRO  banner2- Audio Products.jpg");
  min-height: 100%;
}
.bgimg-3{
	position: relative;
  
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 1000px  500px;
} 


h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

.topnav {
  overflow: hidden;
  background-color: #333;
 
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
.text{
	padding-left:100px;
	padding-right:100px;
	text-height: 30px; 	
	word-spacing:5px;
	font-size: 20px;
	text-align:justify; 	 
	letter-spacing: 2px;
	background: #282E34;
	color: #FBE9E7;
}
div ul li{
	background: #222222;	
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
 
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.ss{
	 background: #F4FF81;
}
/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}
.circle-container {
				    position: relative;
				    min-width: 50%;
				    min-height: 50%;
				    padding: 2.8em;
				    /*2.8em = 2em*1.4 (2em = half the width of a link with img, 1.4 = sqrt(2))*/
				    border-radius: 50%;
				    margin: 1.75em auto 0;
				}
				.circle-container a {
				    display: block;
				    position: absolute;
				    top: 0%; left: 50%;
				    min-width: 4em;min-height: 4em;
				    margin: -2em;
				}
				.circle-container a img { display: block; min-width: 70%; width: 50%;  }
				.deg0 { transform: translate(12em); } /* 12em = half the width of the wrapper */
				.deg30 { transform: rotate(30deg) translate(12em) rotate(-30deg); }
				.deg60 { transform: rotate(60deg) translate(12em) rotate(-60deg); }
				.deg180 { transform: translate(-12em); }
				.deg90 { transform: rotate(90deg) translate(12em) rotate(-90deg); }
				.deg120 { transform: rotate(120deg) translate(12em) rotate(-120deg); }
				.deg150{ transform: rotate(150deg) translate(12em) rotate(-150deg); }
				.deg210 { transform: rotate(210deg) translate(12em) rotate(-210deg); }
				.deg240 { transform: rotate(240deg) translate(12em) rotate(-240deg); }
				.deg270 { transform: rotate(270deg) translate(12em) rotate(-270deg); }
				.deg300 { transform: rotate(300deg) translate(12em) rotate(-300deg); }
				.deg330 { transform: rotate(330deg) translate(12em) rotate(-330deg); }
				.deg{desired_angle} {
 	  transform: rotate({desired_angle}) translate(12em) rotate(-{desired_angle});
}
.logo{
	width: 20%;
	position: absolute;
	top: -10%; left: 40%;
				    
}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Deintegro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li><a href="#">Telecom Products</a></li>
            <li><a href="#">Conference Room Products</a></li>
            <li><a href="#">Paging/Pipeline Music Products</a></li>
            <li><a href="#">CCTV Camera Surveillance Products</a></li>
          </ul>
        </li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Clients</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="first">
  	<div class="inner1-first circle-container">
				<img class="logo" src='image/de-header-logo.png'>
			    <a href='#'   class='deg0 frfi'><img src='image/uploadDir/logo1.jpg'></a>
			    <a href='#'  class='deg30 frfi'><img src='image/uploadDir/logo2.jpg'></a>
			    <a href='#'  class='deg60 frfi'><img src='image/uploadDir/logo3.jpg'></a>
			    <a href='#'  class='deg90 frfi'><img src='image/uploadDir/logo4.jpg'></a>
			    <a href='#'  class='deg120 frfi'><img src='image/uploadDir/logo5.jpg'></a>
			    <a href='#'  class='deg150 frfi'><img src='image/uploadDir/logo6.jpg'></a>
			    <a href='#'  class='deg180 frfi'><img src='image/uploadDir/logo7.jpg'></a>
			    <a href='#'  class='deg210 frfi'><img src='image/uploadDir/logo8.jpg'></a>
			    <a href='#'  class='deg240 frfi'><img src='image/uploadDir/logo9.jpg'></a>
			    <a href='#'  class='deg270 frfi'><img src='image/uploadDir/logo10.png'></a>
			    <a href='#'  class='deg300 frfi'><img src='image/uploadDir/logo11.png'></a>
			    <a href='#'  class='deg330 frfi'><img src='image/uploadDir/logo15.jpg'></a>
  	</div>
  	<div class="inner1-second">
  		<img src="images/layout.jpg" />
  	</div>
</div>

<div class="text" color: #777;text-align: justify;">
	<p class="text-success lead">
  <font style="font-size:25px;font-weight:600;">De Integro</font> is a company with vision of satisfactory customer service in
 installation & maintenance. The founder has been involved with development of customer service and marketing continuously.We are providing solutions for today&#8217s conferencing and Audio visual (Video/Audio ) 
 equipments, we can help your Organization save time and money by optimizing our business communication environment, whether your company is looking
for a turnkey Audio Visual conferencing solution for Presentation room, Seminar or Meeting room, Video Conferencing, Presentation room, 
including hardware, network and services; an installed and Managed an integrated audio/visual solution or a Combination solution of the above etc...
</p>
</div>
<div class="bgimg2">

</div>
  



<div class="text" style="position:relative;">
  <div style="color:#ddd;text-align:center;padding:50px 80px;text-align: justify;">
    <p class="text-info lead">
    	<font style="font-size:25px;font-weight:600;">De Integro</font> 
    	is the one of the choice for your organization&#8217s conferencing 
		requirements and integration. In today&#8217s business climate, companies are 
		highly concerned with safety, time and cost-related issues. As a 
		result, Video conferencing is more relevant than ever,
		And the benefits are significant. 
	</p>
  </div>
</div>

<div class="bgimg-3">
 
 
</div>

<div class="text" style="position:relative;">
  <div style="color:#ddd;text-align:center;padding:50px 80px;text-align: justify;">
    <p class="text-primary lead">We work closely with you to design your company&#8217s 
	customized Video conferencing environment. 

	<font style="font-size:25px;font-weight:600;">De Integro</font> delivers solutions to meet all your requirement of 
	Video conferencing and Audio &#8209 Video solution needs.
</p>
  </div>
</div>


<div class="ss">
	<br/><br/>
	<h2 align="center">OUR PRODUCTS</h2>
  	<br/><br/>
  <div class="slideshow-container">
		  <div class="mySlides fade">
		    <div class="numbertext">1 / 3</div>
		    <img src="image/header-border.jpg" style="width:100%">
		   <div align="center" ><h3>Conferencing products</h3></div>
		  </div>
		
		  <div class="mySlides fade">
		    <div class="numbertext">2 / 3</div>
		    <img src="image/telecom-product.jpg" style="width:100%">
		      <div align="center" ><h3>Telecom products</h3></div>
		   
		  </div>
		
		  <div class="mySlides fade">
		    <div class="numbertext">3 / 3</div>
		    <img src="image/music-product.jpg" style="width:100%">
		      <div align="center" ><h3>Paging/Pipeline Audio products products</h3></div>
		  </div>
		
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<script type="application/javascript">
	$( document ).ready(function() {
		$('.frfi').css({ width: "12%", height: "12%" });
		  	$(document).on({
		    mouseenter: function () {
		        $(this).css({ width: "14%", height: "20%" });
		    },
		
		    mouseleave: function () {
		        $(this).css({ width: "12%", height: "12%" });
		    }
		}, '.frfi');
		
	});
	
	function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}[]
var slideIndex = 0;
showSlides();

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n-1);
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000); 
}

</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>