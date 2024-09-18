
<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Home
</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>

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
}
else{
?>
<script>

window.location.assign('https://www.myprabandhak.com/signup.php');

</script>

<?php
}
?>


			</ul>
		</div>
		</nav>
		</header>



<?php

if(isset($_SESSION['user'])){
$user = $_SESSION['user'];

?>

		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">
				

					<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="create.php"><img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/15/2015/09/30162427/p1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>

					</div>
					<h2 class="entry-title"><a href="create.php" rel="bookmark">

Create ChatBot
</a></h2>

					<a class='portfoliotype' href='create.php'>questions</a>
					<a class='portfoliotype' href='create.php'>answers</a>
					<a class='portfoliotype' href='create.php'>chatbot</a>

					</header>
					</article>
					
					<article class="hentry">
					<header class="entry-header">


					<div class="entry-thumbnail">
						<a href="welcome.php"><img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/15/2015/09/30162427/p1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>

					</div>
					<h2 class="entry-title"><a href="welcome.php" rel="bookmark">

Create ChatBot Welcome Note
</a></h2>

					<a class='portfoliotype' href='welcome.php'>Welcom</a>
					<a class='portfoliotype' href='welcome.php'>Note</a>
					<a class='portfoliotype' href='welcome.php'>chatbot</a>
					</header>
					</article>
					
					<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="browse.php"><img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/15/2015/09/30162427/p1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>

					</div>
					<h2 class="entry-title"><a href="browse.php" rel="bookmark">

Browse ChatBot
</a></h2>

					<a class='portfoliotype' href='browse.php'>questions-delete</a>
					<a class='portfoliotype' href='browse.php'>answers</a>
					<a class='portfoliotype' href='browse.php'>welcome-edit</a>
					</header>
					</article>
					
					<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="test.php"><img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/15/2015/09/30162427/p1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>

					</div>
					<h2 class="entry-title"><a href="test.php" rel="bookmark">

Test your ChatBot
</a></h2>

					<a class='portfoliotype' href='test.php'>questions</a>
					<a class='portfoliotype' href='test.php'>answers</a>
					<a class='portfoliotype' href='test.php'>chatbot</a>
					</header>
					</article>
					
					<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="link.php"><img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/15/2015/09/30162427/p1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>

					</div>
					<h2 class="entry-title"><a href="link.php" rel="bookmark">

Link your ChatBot
</a></h2>

					<a class='portfoliotype' href='link.php'>link</a>
					<a class='portfoliotype' href='link.php'>instructions</a>
					<a class='portfoliotype' href='link.php'>chatbot</a>
					</header>
					</article>
					
					<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="details.php"><img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/15/2015/09/30162427/p1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>

					</div>
					<h2 class="entry-title"><a href="details.php" rel="bookmark">

Your Profile</a></h2>

</hr>
					</header>
					</article>
					
				</div>
				<!-- .grid -->


				<br/>
				
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>

<?php
}
?>


		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">ChatBot</h1>
		


	 <a target="blank" href="https://www.myprabandhak.com/">&copy; 
<?php $date=date('Y'); echo$date; ?>

 ChatBot by Myprabandhak.com</a>
		</div>
	</div>	
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>

<!-- #page -->

                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>

</body>
</html>
