
<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-signin-client_id" content="593093071058-4u5drpkk1l3vm2q5gcc7ofnqofeeg6tq.apps.googleusercontent.com">
                <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
<title>
<?php

                if(isset($_SESSION['user'])){
echo"LogOut or Go to Site";
}else{
echo"SignIn";

}

?>

</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>

        </head>
        <body>
                <?php

                if(isset($_SESSION['user'])){


                        ?>

<table>
<tr>
<td>

<div style="background-color:red; color: white;" >
<h1>
                        
<a href="javascript:void(0)" onclick="logout()" >Logout</a>
                        
</h1></div>
</td>
<td>

<h1>
<a href='index.php'>
Go to the Site

</a>
</h1>
</td>
</tr>

<tr>

<td>
<h1>
Your Name
</h1>
</td>
<td>
<h1>
<?php
echo$_SESSION['name'];
?>
</h1>
</td>

</tr>
<tr>

<td>
<h1>
Your E-Mail Id
</h1>
</td>
<td>
<h1>
<?php
echo$_SESSION['email'];
?>
</h1>
</td>

</tr>
<tr>

<td>
<h1>
Your Id number
</h1>
</td>
<td>
<h1>
<?php
echo$_SESSION['user'];
?>
</h1>
</td>

</tr>

</table>

<?php
echo"
<img src=".$_SESSION['image']." class='attachment-post-thumbnail size-post-thumbnail wp-post-image' alt='gmail image'/>
";
?>

<h4>
disclaimer- We took above Data from your GMail.
</h4>

<?php


                }else{
                        ?>
<h1>
<div class="g-signin2" data-onsuccess="gmailLogIn" style="background-color:blue; color: white; width:100%; height:100%; "></div>
</h1>


                        <?php
                }
                ?>
                
                <script>
                
                function logout(){
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut();  
                    jQuery.ajax({
                                url:'logout.php',
                                success:function(result){
                                        window.location.href="signup.php";
                                }
                        });
                    
                }
                
                function onLoad(){
                       gapi.load('auth2',function (){
                              gapi.auth2.init();
                       }); 
                }
                
                function gmailLogIn(userInfo){
                        var userProfile=userInfo.getBasicProfile();
                        
                        
                        jQuery.ajax({
                                url:'login_check.php',
                                type:'post',
                                data:'user_id='+userProfile.getId()+'&name='+userProfile.getName()+'&image='+userProfile.getImageUrl()+'&email='+userProfile.getEmail(),
                                success:function(result){
                                        window.location.href="signup.php";
                                }
                        });
                }
                </script>
                
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        </body>
</html>

