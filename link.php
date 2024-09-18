<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

link your ChatBot 

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

<p>
Here you will know how to use our service into your website, So read carefully below instructions and do as given.</p></br>

<h3 class='heading3'>Step 1st </h3>
copy the CHATBOT Link given below from steps and...
</hr>

<h3 class='heading3'>Step 2nd </h3>
Paste this Link into your website page or where ever you want to show CHATBOT for example any what'sapp chat or business page or sociale media account etc. . . . . 
</hr>
<h1>YOUR LINK </h1>

<?php
$id=$_SESSION['user'];
$link= "https://www.myprabandhak.com/chat".$id;

echo"<h1 class='heading3'>";
echo$link;
echo'</h1>';

?>
<h4> Details </h4>
<p><b>
whenever anybody click on given link of your chatbot he or she will land on our sitepage which is created for your custmors or whoever you want to show your CHATBOT, this id help system to retrive your data so if you want to hide your id from your visiters so you can use any type of link shortners to shorten your link . . . . . . .
</b></p>
<h6>CHATBOT Team</h6>


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
