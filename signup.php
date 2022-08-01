<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car gas</title>
    <link rel="stylesheet" href="stylesup.css">
    <link rel="icon" type="image/x-icon" href="images/car gas.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>
 
    <img  id ="im1" src="images/car gas.jpg">
    <h1 id ="hed1"> انشاء حساب فى الوحدة الصحية لموظفى كار جاس</h1>
  
   
  <!--form -->

  <div class="form_box">
    <form id="f1"  action="signup.php" method="post">
        
    
   
    <br>
   user name:  <input type="text"  name="user" placeholder="Enter user name here"  required>
   <br>
   <br>
   password: <input type="password" id ="pass"name="pass" placeholder="Enter password here" required>
   <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
   <br>
   <br >
  
   type: 
   <select name="types">
    <option value="Employee">Employee </option>
    <option value="Doctor">Doctor</option>
    <option value="Administrator">Administrator</option>

</select>
<br>
<br>
<button type="submit"  >sign up </button>

   <br>
   <br>
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

/*if($con)
{
    echo '<script language="javascript">';
echo 'alert("successfully connected to data base")';
echo '</script>';

echo "<br>";
}
else
{
    echo '<script language="javascript">';
    echo 'alert("canot connect to data base")';
    echo '</script>';

echo "<br>";
}*/
mysqli_select_db($con,'Car gas');
if(isset($_POST['user']) || isset($_POST['pass']) || isset($_POST['types']) )
{
$name=$_POST['user'];
$pass=$_POST['pass'];
$type=$_POST['types'];

$s="select * from registration where username='$name'  ";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);



if($num==1)
{

    echo '<script language="javascript">';
    echo 'alert("user name already exists in data base !")';
   
    echo '</script>';

    echo '<script language="javascript">';
    echo "window.location.href = 'hhttp://localhost:8888/almaza/signup.php'";
    echo '</script>';
    
}
else
{
    $reg="insert into registration(username,password,type) values ('$name','$pass','$type')";
    mysqli_query($con,$reg);
  /*  echo '<script language="javascript">';
    echo 'alert("registration successfully ")';
    echo '</script>';*/
    echo '<h3 style="color:green;">registration successfully </h3>';
   
    echo " hello ";
    echo $name;
    echo ' <h6 style="color:green;">you have now an e-mail in our system :)</h6> ';
    
    echo "<br>";
}


}
    ?>


</body>
</html>