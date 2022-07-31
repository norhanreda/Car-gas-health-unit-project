<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car gas</title>
    
    <link rel="icon" type="image/x-icon" href="images/car gas.jpg">

</head>
<body>
    <img   style="position:absolute; left:88%;"id ="im1" src="images/car gas.jpg">
    <?php
session_start();

$con=mysqli_connect('localhost','root','');

if($con)
{
    echo '<script language="javascript">';
echo 'alert("successfully connected to data base")';
echo '</script>';
/*alert ("successfully connected to data base ");*/
echo "<br>";
}
else
{
    echo '<script language="javascript">';
    echo 'alert("canot connect to data base")';
    echo '</script>';

echo "<br>";
}
mysqli_select_db($con,'Car gas');

$name=$_POST['user'];
$pass=$_POST['pass'];


$s="select * from registration where username='$name'  ";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($name=="" || $pass=="")
{
    echo '<script language="javascript">';
    echo 'alert("please enter all values !")';
    echo '</script>';
    echo "<br>";

   
}
else
{
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
    $reg="insert into registration(username,password) values ('$name','pass')";
    mysqli_query($con,$reg);
    echo '<script language="javascript">';
    echo 'alert("registration successfully ")';
    echo '</script>';
    echo "<br>";
    echo "hello ";
    echo $name;
    echo " you have now an emial in our system :) ";
    
    echo "<br>";
}
}




?>
   
</body>
</html>
 -->
