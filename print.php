<?php
include_once("My_CV_dbo.php");
include_once("Login_dbo.php");

if(!isset($_SESSION['username'])){
	header("Location:Login.php");
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>My CV</title>
	<link rel="stylesheet" type="text/css" href="Navigation_bar.css">
	<link rel="stylesheet" type="text/css" href="CV.css">
	<meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body style=background-image:url('Image/Background.jpg');>
	<form method="post">
		<div id="container">
			<div id="left-div">
				<img src="<?php echo "$image";?>"class="left-top-image"></br>
				<div id="left-middle-div">
					<h2 id="name"><?php echo "$name";?></h2>
					<p><img src="Image/home-logo.png" class="left-logo"><?php echo " $address";?></p>
					<p><img src="Image/phone-logo.png" class="left-logo"><?php echo " $phone";?></p>
					<p><img src="Image/email-logo.png" id="email-logo"><?php echo " $email";?></p>
				</div></br>
				<div id="left-bottom-div">
					<h2 id="skills"><img src="Image/skills-logo.png" id="skills-logo"> Skills</h2>
					<p id="skills-dtl"><?php echo "$skill";?></p>
				</div>
				<div id="left-bottom-languages-div">
					<h2 id="skills"><img src="Image/language-logo.png" id="language-logo"> Languages</h2>
					<p id="skills-dtl"><?php echo "$language";?></p>
				</div>
			</div>
			<div id="right-div">
				<div id="right-top-div">
					<h1><img src="Image/working-logo.png" class="right-logo"> Work Experience</h1>
					<h2 id="name-institute"><?php echo "$companyname";?></h2>
					<h5 class="description"><?php echo "$cposition";?></h5>
					<p class="description"><?php echo "$cstartdate";?></p>
					<a href="Delete_info.php" class="description" name="deletew" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
				</div></br>
				<div id="right-bottom-div">
					<h1><img src="Image/cap-logo.png" class="right-logo"> Education</h1>
					<div id="varsity-div">
						<h2 id="name-institute"><?php echo "$varsityname";?></h2>
						<h4 class="description">CGPA: <?php echo "$cgpa";?></h4>
						<h5 class="description"><?php echo "$varsitypyear";?></h5>
					</div></br>
					<div id="college-div">
						<h2 id="name-institute"><?php echo "$collegename";?></h2>
						<h4 class="description">GPA: <?php echo "$hscgpa";?></h4>
						<h5 class="description"><?php echo "$clgpyear";?></h5>
					</div></br>
					<div id="school-div">
						<h2 id="name-institute"><?php echo "$schoolname";?></h2>
						<h4 class="description">GPA: <?php echo "$sscgpa";?></h4>
						<h5 class="description"><?php echo "$sclpyear";?></h5>
					</div>
				</div>
			</div>
			  <div class="text-center">
               <button onclick="window.print();" class="btn btn-primary" >Print</button>
			   <a href="index.php" class="btn btn-primary">Home</a>

            </div>
		</div>
        
	</form>
    

	
</body>
</html>