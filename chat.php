<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
CHATBOT </title>
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

			<h1 class="site-title"><a href="" rel="home">ChatBot</a></h1>
			<h2 class="site-description">CHAT for YOU</h2>

		</div>

		</header>


		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				
				<article class="hentry">
				<header class="entry-header">
				<h1 class="entry-title">CHAT with your ChatBot</h1>	
				</header>


				<!-- .entry-header -->

				<div class="entry-content">


<?php

include "databaseConnection.php";

$user= $_GET['id'];

$table= "hk$user";
$table1= "welcom_note";

$sqluser = "SELECT * FROM user WHERE user_id= '$user'";

$resultuser = mysqli_query($conn, $sqluser);
mysqli_num_rows($resultuser);
$rowuser = mysqli_fetch_array($resultuser);

$email= $rowuser['email'];

if(isset($_POST['submit'])){}
else{

$sql = "SELECT * FROM $table1 WHERE email= '$email'";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){

echo"<h3> ".$row['welcome_note']." </h3>";

}



mysqli_free_result($result);

} else{
echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}

?>

<?php

if(isset($_POST['submit'])){
$question=mysqli_real_escape_string($conn,$_POST['question']);

echo'<br/> you say ';
echo'<h1>';
echo$question;
echo'</h1>';
echo' we say ';

$sql1 = "SELECT * FROM $table WHERE question='$question'";

if($result1 = mysqli_query($conn, $sql1)){
if(mysqli_num_rows($result1) > 0){


while($row1 = mysqli_fetch_array($result1)){

echo"<h1> ".$row1['answer']." </h1>";

}


echo"</table>";


mysqli_free_result($result1);

} else{
echo "<h1>
I'm not able to understand You, try again with differente querry 
</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
}
?>

<div class="bodypart">

<div class="contact-us">
  <form method="POST">

<label for="Question from user ">
User Question 
<em>&#x2a;</em>
</label>
<input name="question" required="" ></input>

<h3 class="heading3">
ASK YOUR QUERRY 
</h3>

<button name="submit">SUBMIT</button>

  </form>
</div>

</div>

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