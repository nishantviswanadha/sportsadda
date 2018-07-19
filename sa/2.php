

<head>
<title>Sports Adda</title>
<link rel="shortcut icon" type="image/png" href="pic.jpg"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $placeErr = $passErr = $contactErr =  $unameErr = "" ;
$name = $email = $place = $pass = $uname = $contact = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z][a-zA-Z ]{2,}/",$name)) {
      $nameErr = "Only letters and white space allowed and must contain atleast 3 characters"; 
    }
  }
  
  if (empty($_POST["uname"])) {
    $unameErr = "User name is required";
  } else {
    $uname = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]{2,}/",$uname)) {
      $unameErr = "Usern ame must contain atleast 3 characters and must start with a letter"; 
    }
  }
  
  if (empty($_POST["contact"])) {
    $contactErr = "Name is required";
  } else {
    $contact = test_input($_POST["contact"]);
    // check if contact only contains digits
    if (!preg_match("/^[789][0-9]{9}/",$contact)) {
      $contactErr = "Not a valid mobile no."; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["place"])) {
    $placeErr = "place no. is required";
  } else {
    $place = test_input($_POST["place"]);
    // check if place is well-formed
    if (!preg_match("/^[a-zA-Z ]{3,}/",$place)) {
      $placeErr = "Invalid place"; 
    }
  }
    
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check if password is well-formed
    if (!preg_match("/^[A-Za-z]\w{7,15}/",$pass)) {
      $passErr = "Invalid Password"; 
    }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($emailErr != "" || $placeErr != "" || $nameErr != "" || $passErr != "" || $unameErr!="" || $contactErr != "")
{
	echo $nameErr."<br>". $emailErr. "<br>". $placeErr. "<br>". $passErr. "<br>".$unameErr."<br>".$contactErr."<br>"."Try again <a href='index.php'> Sign up</a>";
	
}
else
{
	 $m = new MongoClient();
   
	
   // select a database
   $db = $m->sport;
  
   $collection = $db->profile;
  
	$qry = array("username" => $_POST["uname"] );
      $result = $collection->findOne($qry);
    if($result){
     echo  "<p style='font-size:20px;width:1200px; margin-left:550px;padding-top:150px;padding-bottom:150px'>User name already exists </p>";
       }
    else
     { 

           $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       
		$document = array( 
      "name" => $_POST["name"], 
      "username" => $_POST["uname"], 
      "email" => $_POST["email"],
      "place" => $_POST["place"],
      "contact" => $_POST["contact"],
	   "password" => $_POST["pass"],
	   "pic" => $target_file
   );
	
   $collection->insert($document);
  


	
  echo  "<p style='font-size:20px;width:1200px; margin-left:550px;padding-top:150px;padding-bottom:150px'>Your account has been created successfully click here to login <a href='1.php'> Log in </p>";
   

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	 
		
	
    } 
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
