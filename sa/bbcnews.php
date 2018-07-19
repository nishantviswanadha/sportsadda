<!DOCTYPE HTML>
<html>
<head>
<title>Sports Adda</title>
<link rel="shortcut icon" type="image/png" href="pic.jpg"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<?php echo"<div style=\"background-color:#dc4c46;\"><br><h1 style=\" text-align:center;\"><b>BBC Sport News</b></h1><br> <div style=\"background-color:rgb(230,230,230);border:solid grey 2px;border-radius:50px;width:1000px; margin:0 auto;\">";
	$sportNewsTxt = file_get_contents('https://newsapi.org/v1/articles?source=bbc-sport&sortBy=top&apiKey=9f951101e7954c349e053ea63c2cd820');	// change with your API key
	$sportNews = json_decode($sportNewsTxt);
	foreach($sportNews->articles as $item) { 
	echo "<br><br><img src=\"$item->urlToImage\" height=\"300px\" width=\"300px\" style=\"display:block; margin-left: auto;".
    "margin-right: auto\"><br><br><p style=\"margin-left:10px\"> <a href=\"$item->url\" style=\"color:black;font-size:30px;text-decoration:none; \">$item->title</a></p><br><br><p style=\"margin-left:10px\">$item->description<br><br><hr></p>" ;
     }echo "</div><br></div>"
	?>
	
	
	
	
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