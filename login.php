<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Gas</title>
    <link rel="stylesheet" href="stylesin.css">
    <link rel="icon" type="image/x-icon" href="images/car gas.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
   
    <img  id ="im1" src="images/car gas.jpg">
    <h1 id ="hed1">  تسجيل الدخول للوحدة الصحية لموظفى كار جاس </h1>
    <br> <br> 
    <!--form -->

    <div class="form_box">
    <form  id="f1" action="login.php" method="post" >
        
    
   
    <br>
  <b> user name: </b>  <input type="text" name="user" placeholder="Enter user name here" required>
   <br>
   <br> 
  <b> password: </b> <input id="pass"  name ="pass"type="password" placeholder="Enter password here"required>
  <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
   <br>
   <br >
   <input type="submit" value="Sign in"> 

   <input type="button" value="change password" >
   <br><br>
   
   <b> don't have email? </b>
   <br>
  <a href="http://localhost:8888/almaza/signup.php" target="_blank">Sign up </a>
    </form>
    <script>
   const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
    </script>
    </div>

<?php
   session_start();

   //connect to data base
 $con=mysqli_connect('localhost','root','');
 
//select data base
 mysqli_select_db($con,'Car gas');

 if(isset($_POST['user']) || isset($_POST['pass']) )
 {
 $name=$_POST['user'];
 $pass=$_POST['pass'];
 
 
 $s="select type from registration where username='$name' and password='$pass' ";
 
 $type=mysqli_query($con,$s)->fetch_array()[0] ?? '';;
 
 
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
 echo (string)$type;
 
 
 
 if((string)$type=="Administrator")
 {
 
     
  
     echo '<script language="javascript">';
     echo "window.location.assign('http://localhost:8888/almaza/Administrator.php'); ";
     echo '</script>';
    
     
 }
 else if((string)$type=="Employee")
 {
 
  echo '<script language="javascript">';
  echo "window.location.assign('http://localhost:8888/almaza/Employee.php'); ";
  echo '</script>';
    
 }
 else if((string)$type=="Doctor")
 {
  
  echo '<script language="javascript">';
  echo "window.location.assign('http://localhost:8888/almaza/Doctor.php'); ";
  echo '</script>';


 }
 }

?>
</body>
</html>