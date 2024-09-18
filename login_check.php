
<?php
session_start();
$con=mysqli_connect('localhost','u526284483_chatbot','Hark1990cb','u526284483_loginuser');

$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$user_id=mysqli_real_escape_string($con,$_POST['user_id']);
$image=mysqli_real_escape_string($con,$_POST['image']);
$table_name1= 'hk'.$user_id;

$_SESSION['user']=$user_id;
$_SESSION['email'] = $email;
$_SESSION['image']= $image;


$res=mysqli_query($con,"select * from user where user_id='$user_id'");
$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        $_SESSION['name']=$row['name'];
        

if($check>0){

}else{
        mysqli_query($con,"insert into user(name,email,image,user_id) values('$name','$email','$image','$user_id')");
        mysqli_query($con,"insert into welcom_note(email,welcome_note) values('$email','not set')");
        mysqli_query($con,"insert into pro_version(email,pro) values('$email','not pro')");
        mysqli_query($con,"CREATE TABLE $table_name1 (id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMp, question TEXT, answer TEXT)");


        $_SESSION['name']=$name;
}

echo "done";
?>