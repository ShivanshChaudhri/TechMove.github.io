<!DOCTYPE html>
<html lang="en">
<head>
<!--
A URL can be composed of words (w3schools.com), or an Internet Protocol (IP) address (192.68.20.50).
Most people enter the name when surfing, because names are easier to remember than numbers.
-->
  <link rel="shortcut icon" href="tm.ico">
  <title>TechMove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="TechMove.css">
  <link rel="stylesheet" href="load.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
	  margin:0px auto;
  }
  #container{
	background: black;
	  margin:0px auto;
	
  }

  h2 {
      font-size: 24px;
      text-transform: ;
	  font-variant:small-caps;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color:#333;
      color: #fff;
      padding: 100px 25px;
	  background:url("pic/head3.jpg");
	  -webkit-filter:blur(50%);
	  filter: blur(50%);
	  background-size: 100% 100%;
	  background-repeat: no-repeat;
  }
  .jumbotron h1{
        font-family: Algerian;
		font-size:100px;
  }
  
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .nav input[type=text]{
  }
  .jumbotron .button{
      width:200px; 
	  color:white; 
	  background:black; 
	  margin:0px 50px;
	  border-bottom-left-radius:50%;
	  border-top-right-radius:50%;
	  
  } 
	.jumbotron .button button:hover{
	background:white;
	color:black;
	-webkit-transition-duration: 1s;
	transition-duration:1s;
	}
		#middle{
			text-align:center;
			width:100%;
			background: black;
			height: 350px;
			border:1px solid white;
		}
		#middle center{
		font-size:30px;
		color:white;
		}
		.p_logo{
		border:3px solid black;
		border-radius:20px;
		height:270px;
		width:19.3%;
		background:black;
		color:white;
		float:left;
		padding:0px;
		margin:5px;
		}
		.p_logo img{
			width:100%;
			height:100px;
			border-radius:20px;
			border:1px solid black;
		}
#game{
margin-top:40px;
font-size:20px;
color:black;
border:1px solid black;
background:white;
}
#game_type1{
border:2px groove white;
border-radius:10px;
height:210px;
width:19%;
background:black;
color:white;
float:left;
padding:5px;
margin:5px;
}
#game_type1 img{
width:100%;
height:160px;
border-radius:5px;
border:1px solid white;
box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;
 
}
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: black;
  }
  .carousel-indicators li {
      border-color: black;
  }
  .carousel-indicators li.active {
      background-color: black;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid black; 
      border-radius:0 ;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff ;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff ;
      background-color: black ;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white ;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color:black ;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: black;
      z-index: 9999;
      border: 0;
      font-size: 12px;
      line-height: 1.42857143 ;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: white;
	  
  }
  .navbar li a{
  background:linear-gradient(to right,black, #202020)  
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: black ;
      background-color: white ;
	  -webkit-transition-duration:0.8s;
    transition-duration: 1.5s;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: white;
  }
  .glyphicon{
  color:black;
  }
  footer .glyphicon {
      font-size: 50px;
      margin-bottom: 20px;
      color:white;
  }
  footer{
	background:black;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
#myNavbar ul li:hover{
}
#myNavbar  input[type=text], select {
    float:right;
    width:50%;
	height:;
    padding: 5px 5px;
    margin: 10px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    -webkit-transition: width 0.8s ease-in-out;
    background-image: url('searchicon.png');
    transition: width 0.4s ease-in-out;
}
#myNavbar input[type=text]:focus {
    width: 100%;
	background-color: #3CBC8D;
    color: white;
    border: 1px solid #555;
}
<!--****Portfolio****-->
 p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: black;
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  #portfolio{
  border:solid 2px black;
  margin: 0px 20px;
  }
  #top{
  position:fixed;
  right:10px;
   font-size: 40px;
   line-height:0px;
  bottom:400px;
  color:white;
  }
#share{
height:200px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 300px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

    
  </style>
    <style media="screen" type="text/css">
      .load_class { position: absolute; z-index: 1; top: 100px; left: 0px; visibility: visible;}
      .layer2_class { position: absolute; z-index: 2; top: 10px; left: 10px; visibility: hidden;}
    </style>
    <script language="JAVASCRIPT">
      function downLoad(){
        if (document.all){
            document.all["load"].style.visibility="hidden";
            document.all["layer2"].style.visibility="visible";
        } else if (document.getElementById){
            node = document.getElementById("load").style.visibility='hidden';
            node = document.getElementById("layer2").style.visibility='visible';
        }
      }
    </script>
</head>
<script language=JAVASCRIPT>
    var message = "Dont Think About It... Source Code hide by SHIVANSH !!!";
    function clickIE4() {
        if (event.button == 2) {
            alert(message);
            return false;
        }
    }

    function clickNS4(e) {
        if (document.layers || document.getElementById && !document.all) {
            if (e.which == 2 || e.which == 3) {
                alert(message);
                return false;
            }
        }
    }

    if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = clickNS4;
    }
    else if (document.all && !document.getElementById) {
        document.onmousedown = clickIE4;
    }

    document.oncontextmenu = new Function("alert(message); return false");
</script>
<script src="js6.1.js"> </script>
<body id="myPage"  onload="downLoad(); DoGame()" data-spy="scroll" data-target=".navbar" data-offset="60" ><!--onload="DoGame()"-->
<!--To hide soursecode disable right click by oncontextmenu="return false"-->
	<div id="load" class="load_class">
		<div id="circle1">
		</div>
		<div id="circle2">
		</div>
		<div id="circle3">
		</div>
	</div>
	
<div id="layer2" class="layer2_class">
<div id="container">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage" style="font-variant:small-caps;"> <img src="tm.ico" alt="TechMove.com" style="height:150%"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#game">GAMES</a></li>
        <li><a href="#about1">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#contact">CONTACT</a></li>
		<li><input type="text" name="search" placeholder="Search.." 
		style="background-image: url('search2.png');background-repeat: no-repeat; text-align:center;">
		</li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1 style="font-variant:small-caps">TechMove</h1> 
  <p>The World of Real Gamers</p>
  <a href="TechMoveSignUp.php"><button class="button" onclick="alert('You are redirecting on UNSECURED Page')" > Sign Up</button></a><button class="button" id = "myBtn">Sign In</button>
  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="tmLoginDB.php" method = "post">
	User Name: <input type="text" name="user_name" style="color:black;">
	Password: <input type="password" name="password" style="color:black;"> 
	<input type="submit" value = "Sign In">
</form>

<a href="forgetpsw.php" style = "color:black;">Forget password?</a>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
<br>
		<div id = "middle">
			<center style="text-decoration:underline;">Our Partners</center>
			<div class="p_logo">
				<img src="rockstar.svg" alt="">	
				GTA ONLINE: HVY NIGHTSHARK AND OVERTIME SHOOTOUT ADVERSARY MODE NOW AVAILABLE, GTA$ & RP BONUSES AND MORE
			</div>
			<div class="p_logo">
				<img src="pic/ea.jpg" alt="">
                ELECTRONI ARTS, We exist to inspire the world through Play. Electronic Arts is a leading publisher of games on Console, PC and Mobile.				
			</div>
			<div class="p_logo">
				<img src="pic/valve.jpg" alt="">	
				Valve is the essence of quality over quantity. Although it has very few releases each one seems worth the wait! When your think of the "best fps" or "best multiplayer game" 
			</div>
			<div class="p_logo">
				<img src="pic/ubisoft.jpg" alt="">
					Ubisoft, creator of Assassin's Creed, Just Dance, Tom Clancy's video game series, Rayman, Far Cry, Watch Dogs and many
			</div>
			<div class="p_logo">
				<img src="pic/activision.png" alt="">	
				ACTIVISION It became the first third-party developer for video game consoles, and is responsible ... Destiny 2
			</div>
		</div>

	<div id="game"> <center style="font-size:30px"><b>Games</b></center>
		
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>Super Hero</center>
			<img src="pic/heroes4.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1">
			<center>Multiplayer</center>
			<img src="pic/heroes5.jpg" alt="">
		</div></a> 
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>Cars</center>
			<img src="pic/race.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1">
			<center>Shooting</center>
			<img src="pic/shooting.jpg" alt="">
		</div></a> 
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>Car</center>
			<img src="pic/race.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1">
			<center>Zombies</center>
			<img src="pic/zombies.jpeg" alt="">
		</div></a> 
		<a href="http//:www.rockstargames.com"><div id="game_type1">
			<center>Sky War</center>
			<img src="pic/skywar.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>Mission</center>
			<img src="pic/mission.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>Animals Fight</center>
			<img src="pic/heroes6.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>Wars</center>
			<img src="pic/war2.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>Animal</center>
			<img src="pic/animal1.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1">
			<center>Fight</center>
			<img src="pic/fight.jpg" alt="">
		</div></a> 
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>Kingdom</center>
			<img src="pic/fight2.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1"> 
			<center>God War</center>
			<img src="pic/girls1.jpg" alt="">
		</div></a>
		<a href="http//:www.rockstargames.com"><div id="game_type1">
			<center>Adventure</center>
			<img src="pic/adventure4.jpg" alt="">
		</div></a> 
	</div>
</div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row" id="about1">
    <div class="col-sm-8">
      <h2>About TechMove</h2><br>
      <h4 >TechMove The Gamers's World is website made by <a href="Shivansh's page/WebPage.html"><b>आशा The Virtual World</b></a> With the partnership 
	  of<b> Amritanshu Aniket Shivansh Harsh Anshuman</b> THE MASTERS of cyber world</h4><br>
      <p>A game is a structured form of play, usually undertaken for enjoyment and sometimes used as an educational tool. Games are distinct from work, 
	  which is usually carried out for remuneration, and from art, which is more often an expression of aesthetic or ideological elements. However, the 
	  distinction is not clear-cut, and many games are also considered to be work (such as professional players of spectator sports or games) or art 
	  (such as jigsaw puzzles or games involving an artistic layout such as Mahjong, solitaire, or some video games).</p>
      <br><a href="Shivansh's page/WebPage.html" ><button class="btn btn-default btn-lg" id="getInTouch">Get in Touch</button></a>
    </div>
    <div class="col-sm-4">
      <br/><br/><br/><span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

		

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>Any time access</h4>
      <p>We give you powers</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>24*7 Active</h4>
      <p>We Love to help you </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Home Delivery</h4>
      <p>Game source is on your door now.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Enviroment freindly</h4>
      <p>Available in every country throught the world</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Real Copyright</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Maintainence</h4>
      <p>Be Updated</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="pic/shiv.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
 <h2 style="font-family:Brush Script MT; color:white">Hello!!! I'm Shivansh</h2>
			
			    <h3 style="font-family:Brush Script MT; color:white">
				We are ready to help you...
				We've a team of masters of cyber world to solve your problems...
				</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <p>I'm a man of self confidence about my subjects besides full working ability for my ambition </p>
  <a href="http://about.me/shivanshchaudhri" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-hrat"></span>Be In Touch!!!
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="">Where To Find Me?</h3><br>
<div id="googleMap" style="height:400px;width:100%; border:5px solid black;"></div>
<div id="share">
<br><h3>On Social Media</h3><br>
<img src="pic/fb.png" alt="" width="100px" height="100px">
<img src="pic/gmail.png" alt="" width="100px" height="100px">
<img src="pic/twitter.jpg" alt="" width="100px" height="100px">
<img src="pic/insta.jpg" alt="" width="100px" height="100px">
</div>
</div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(26.886888, 81.057528);
var mapProp = {center:myCenter, zoom:16, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkyeC-ZoJ4n3I05gBu72HmM9cJrvgqcKw&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<br>
<br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="pic/shivansh2.jpg" alt="Paris" width="400" height="300">
        <p><strong>Freindship</strong></p>
        <p>Yes, we built Freindship</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="pic/anonymous.jpg" alt="New York" width="400" height="300">
        <p><strong>Anonymous</strong></p>
        <p>Sorry, We are still Anonymous</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="pic/shivansh3.jpeg" alt="San Francisco" width="400" height="300">
        <p><strong>Union</strong></p>
        <p>Yes, We have Union</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Bahubali, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>Devsena, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Katappa, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Lucknow, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9807965750</p>
      <p><span class="glyphicon glyphicon-envelope"></span> gmail@shivansh.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->


<footer id="footer" class="container-fluid text-center">
  <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" title="Visit shivworld.com"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>
	<br>Copyright &copy; 2017 Shivansh Chaudhri &trade;
	<br>
	  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>
<div id="top"> 
	<a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br>	
	<a href="#footer" title="To Bottom">
    <span class="glyphicon glyphicon-chevron-down"></span>
    </a>
</div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</div>
</body>
</html>
























