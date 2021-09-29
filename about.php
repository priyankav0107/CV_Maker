<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Navigation_bar.css">
	<meta name="viewport" content="width=device-width initial-scale=1">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background: white;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 50px;
  background: white;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>

<body>



  
  <div id="header">
    <ul id="navbar">
      <li class="lists"><a class="options" href="index_In.php">Home</a></li>
      <li class="lists"><a class="options" href="My_CV.php">CV</a>
        <ul id="sub_bar">
          <li class="sub_lists"><a class="sub_options" href="My_CV.php">My CV</a></li>
          <li class="sub_lists"><a class="sub_options" href="Update_CV.php">Update CV</a></li>
        </ul>
      </li>
      <li class="lists"><a class="options" href="about.php">About</a></li>
     
      <li id="log_list"><a id="log_option" href="Login_dbo.php?logout='1'">
        <?php if(isset($_SESSION['username'])) echo $_SESSION['username']." "?>Logout
      </a></li>
    </ul>
  </div>




<div class="about-section">
  <h1>About Us</h1>
  <p>Custom Resume Maker  to Make an Impression
A professionally created resume is the foremost requirement to land your dream job. This piece of document summarizes a person’s background, education, skills, and accomplishments. A resume can decide whether you are eligible for a job or not. A professional resume creates a long lasting impression but unfortunately, many people face difficulty in creating a good resume. If you are one of them then no need to worry as free online resume maker for freshers and experienced Resumemaker.in is here to help you in this task.

        Resume making is no longer a daunting task as all your resume related problems are solved here. It is the best free resume maker that you will find. It's clean and easy to use interface makes it a reliable online resume maker platform for freshers and experienced. The distinguishing feature of this platform is that it is absolutely free to download a resume .</p>
  
</div>
<br> <br>
<h2 style="text-align:center">By Team Data Pirates</h2>
<br><br>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Hrunmana B.N</h2>
        <p class="title">Usn: 1JS19CS402</p>
       
        
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
<div class="container">
        <h2>Nithish Kumar G</h2>
        <p class="title">Usn: 1JS19CS409</p>
      </div>
    </div>
  </div>
 
  <div class="column">
    <div class="card">
<div class="container">
       <h2>Pavithra K S</h2>
        <p class="title">Usn: 1JS19CS410</p>
      </div>
 </div>
    </div>


 <div class="column">
    <div class="card">
<div class="container">
       <h2>Priyanka V</h2>
        <p class="title">Usn: 1JS19CS412</p>
      </div>
    </div>
  </div>

</div>

</body>
</html>