﻿<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Browse your ChatBot 
</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
  <link rel="stylesheet" href="input.css">
<link rel="stylesheet" href="table.css">

</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">

<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">

			<h1 class="site-title"><a href="index.html" rel="home">ChatBot</a></h1>
			<h2 class="site-description"> Create Chatbot for You </h2>

		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>

<?php
session_start();


if(isset($_SESSION['user'])){
?>

<li><a href="welcome.php">Welcome Note</a></li>
<li><a href="create.php">Create ChatBot</a></li>
<li><a href="browse.php">Browse ChatBot</a></li>
<li><a href="test.php">Test ChatBot</a></li>

<li><a href='signup.php'> logOut </a></li>

<?php
}else{

?>

<script>

window.location.assign('index.html');

</script>

<?php


}
?>


			</ul>
		</div>
		</nav>
		</header>


		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				
				<article class="hentry">
				<header class="entry-header">
				<h1 class="entry-title">Create your ChatBot</h1>	
				</header>


				<!-- .entry-header -->

				<div class="entry-content">


<?php

include "databaseConnection.php";


$user= $_SESSION['user'];
$table= "hk$user";
$table1= "welcom_note";
$email= $_SESSION['email'];


echo" browse or edit chatbot <br/>";
echo' your welcome note <br/>';


$sql = "SELECT * FROM $table1 WHERE email= '$email'";
if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo"<div class='tablebody'>";

echo" <table>
      <thead>
        <tr>


          <th class='email'>E-Mail</th>
          <th class='welcome_note'>Welcome_note</th>
          <th class='edit'>EDIT</th>

        </tr>
      </thead>
";
echo"<tbody>";

while($row = mysqli_fetch_array($result)){

echo"<tr> 


<td> " .$row['email']. " </td> <td> " .$row['welcome_note']. " </td> <td> <a href='welcome.php'> Edit </a> </td> </tr>";

}


echo"</tbody></table></div>";


mysqli_free_result($result);

} else{
echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

echo' <hr/>';
$sql1 = "SELECT * FROM $table";

if($result1 = mysqli_query($conn, $sql1)){
if(mysqli_num_rows($result1) > 0){

echo"<div class='tablebody'>";

echo" <table>
      <thead>
        <tr>
          <th>Question</th>
          <th>Answer</th>
          <th>DELETE</th>

        </tr>
      </thead>
";
echo"<tbody>";

while($row1 = mysqli_fetch_array($result1)){

echo"<tr> <td> " .$row1['question']. " </td> <td> " .$row1['answer']. " </td> <td> <a href='browse_delete.php?idnum=" .$row1['id']. "&table=".$table."'> Delete </a> </td> </tr>";

}


echo"</tbody></table></div>";


mysqli_free_result($result1);

} else{
echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}

?>


				</div><!-- .entry-content -->
				</article>
				
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">
ChatBot

</h1>


	 <a target="blank" href="https://www.myprabandhak.com/">&copy; 
<?php $date=date('Y'); echo$date; ?>

 ChatBot by Myprabandhak.com</a>
		</div>
	</div>	
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
</body>
</html>
