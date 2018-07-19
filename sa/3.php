<?php
session_start();
?>

<html>
<head>

<title>Sports Adda</title>
<link rel="shortcut icon" type="image/png" href="pic.jpg"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="widtd=device-widtd, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="navigation/css/reset.css">
	<link rel="stylesheet" href="navigation/css/style.css">
	<script src="navigation/js/modernizr.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<style>
table td {    
    border: 2px solid black;
    text-align: center;
	padding: 25px;
	margin-left:200px
	width:600px
	align="center"
}

table {
    border-collapse: collapse;
    widtd: 100%;
	align="center";
	
	
	  background-color: white
}

td, td {
	border: 2px solid black;
    padding: 25px;
	text-align: center;
}


h2 {
  font-size:300px; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:3em;
  padding-bottom: 2em;
  color: #FB007A;
}


     h1
     {
     color:white;
     font-size:80px;
     text-align:center;
     }
   
     body{
     background-color: powderblue;
     }
 

 </style>
<!--end slider --><script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(tdis).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
							<li><a href="http://localhost/sa/index.html">Home</a></li>
						    	<li><a href="http://localhost/sa/news.php">News</a></li>
						    	<li><a href="http://localhost/sa/fixtures.html">Fixtures</a></li>
						    	<li><a href="http://localhost/sa/ranking.html">Ranking</a></li>
						    	<li><a href="http://localhost/sa/players.html">Players</a></li>
						    	<li><a href="http://localhost/sa/LiveScore.html">Live Scores</a></li>
									<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  
				          	
						  <div class="login_buttons">
							 <div class="login_button"><a href="4.php">Logout</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>
<!--YAHA SE SHURU-->
        
		<?php

   $username = ($_POST['uname2']);
  $password = ($_POST['pass2']);
  $_SESSION['favo'] = $username;
    
      $con = new MongoClient();
     // Select Database
     if($con)
      {
      $db = $con->sport;
      // Select Collection
    $collection = $db->profile;
     $qry = array("username" => $username,"password" => $password );
      $result = $collection->findOne($qry);
    if($result){
		
		
		
     $Query = array('username' => $_SESSION["favo"]);
$cursor = $collection->find($Query);
   // iterate cursor to display title of documents
	if($_SESSION['CHECK']!='me')
		echo"<p style='font-size:20px;width:1200px; margin-left:600px;padding-top:150px;padding-bottom:150px'>YOU ARE LOGGED OUT . CLICK HERE TO <a href='1.php'>LOGIN</a> </p>";
		else{


if($cursor)
{
	
	foreach ($cursor as $document) {
		
		
      echo "<h2 style='font-size:30px; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:3em;
  padding-bottom: 2em;
  color: #00AA7A'> YOUR PROFILE </h2><div style='margin:auto;width:800px'><table ><tr><td>Profile picture</td><td>Username</td><td>Name</td><td>E-mail id</td><td>Place</td><td>Contact</td></tr><tr><td><img src=".$document['pic']."><br><a href='pic.php'>edit</a></td><td>".$document['username']."<br><a href='uname.php'>edit</a></td><td>".$document['name']."<br><a href='name.php'>edit</a></td><td>".$document['email']."<br><a href='email.php'>edit</a></td><td>".$document['place']."<br><a href='place.php'>edit</a></td><td>".$document['contact']."<br><a href='contact.php'>edit</a></td></tr>";
	  echo "</table></div>";
     
	}
}


 
$Query1 = array('username' => $_SESSION["favo"]);
$cursor1 = $collection->findOne($Query1);
$Query = array('place' => $cursor1["place"]);
$cursor = $collection->find($Query);
if($cursor)
{

	foreach ($cursor as $document) {
		if($document["username"]!=$_SESSION["favo"]){
      //echo"<table  id='t01'>";
	  echo "<h2 style='font-size:30px; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:3em;
  padding-bottom: 2em;
  color: #FB007A'> <br>YOUR NEARBY FRIEND </h2>
<div style='margin:auto;width:800px'><table ><tr><td>Profile picture</td><td>Username</td><td>Name</td><td>E-mail id</><td>Place</td><td>Contact</td></tr><tr><td><img src=".$document['pic']."></td><td>".$document["username"]."</td><td>".$document["name"]."</td><td>".$document["email"]."</td><td>".$document["place"]."</td><td>".$document["contact"]."</td></tr>";
	  echo "</table></div><br><br>";
		}
     //<td>".$document["email"]."</td></tr>";
	}
		}}
      


	  }
    else
     { 
 echo "<h2 style='font-size:30px; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:3em;
  padding-bottom: 2em;
  color: #00AA7A'> unsuccessful !! Check you username and password and Try again<a href='1.php'> Log in</a> </h2>";
     }

      } else { 
      die("Mongo DB not connected");
      } 
        
      
?> 
      

	<script src="navigation/js/jquery-2.1.4.js"></script>
<script src="navigation/js/main.js"></script> <!-- Resource jQuery -->
	

	
	
	<!--YAHA SE END-->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>About</h4>
							<li><a href="http://localhost/sa/career.html">Careers and internships</a></li>
							<li><a href="http://localhost/sa/sponser.html">Sponserships</a></li>
							<li><a href="http://localhost/sa/team.html">team</a></li>
							<li><a href="http://localhost/sa/contact.html">Contact Us</a></li>
						</ul>
					</div>
					
				</div>
				
			</div>
		</div>
</body>	
</html>	