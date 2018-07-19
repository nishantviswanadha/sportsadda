<!DOCTYPE html>
<html>
<head>
<title>Sports Adda</title>
<link rel="shortcut icon" type="image/png" href="pic.jpg"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css1/style.css">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider --><script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
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
	 <style>

   
     body{
     background-color: powderblue;
     }
 

 </style>
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
							 <div class="login_button"><a href="1.php">Login</a></div>
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
	<!-- YAHA SE SHURU-->
	

	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $con = new MongoClient();
     // Select Database
	 
     if($con)
      {
      $db = $con->sport;
      // Select Collection
    $collection = $db->profile;
$Query = array('username' => $_POST["uname"]);
$cursor = $collection->findOne($Query);
   // iterate cursor to display title of documents
	
   
   
if($cursor)
{

	
      echo"<h1>Your password has been sent to your mail id:  ".$cursor["email"]."</h1>";
	  
     
	}

else{
echo"<h1>No such account exists</h1>";}
} else { 
      die("Mongo DB not connected");
}}
?>
<br><br><br><br>
   <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Get your Password</a></li>
        
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1> Forgot Password</h1>
          
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          
          

          <div class="field-wrap">
            <label>
              Enter your Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="uname"/>
          </div>
		  
		   
          
          <button type="submit" class="button button-block"/>Get Password</button>
          
          </form>

        </div>
        
        
        
      </div>
      
</div> 
<br><br><br><br><br><br>
<script src="navigation/js/jquery-2.1.4.js"></script>

    <script  src="js/index.js"></script>
	
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