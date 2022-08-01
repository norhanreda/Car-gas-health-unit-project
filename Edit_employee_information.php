<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car gas</title>
    
    <link rel="icon" type="image/x-icon" href="images/car gas.jpg">
    <style>
        /* *{
            background-color:;
        } */
 #box
 {
    position:absolute; top:15%; left:38%;

 }
</style>

</head>
<body>
<?php
  session_start();

  //connect to data base
$con=mysqli_connect('localhost','root','');

//select data base
mysqli_select_db($con,'Car gas');

if(isset($_POST['id'])  )
{
$id=$_POST['id'];



$s="select * from employee where ID='$id' ";

$name=mysqli_query($con,$s)->fetch_array()[1] ?? '';;
$gender=mysqli_query($con,$s)->fetch_array()[0] ?? '';;
$now  = new DateTime();
$current_year=$now->format('Y');
$birth=$gender=mysqli_query($con,$s)->fetch_array()[3] ?? '';;
$explode=explode("-",$birth);  
$age= $explode[0];
$gender=mysqli_query($con,$s)->fetch_array()[2] ?? '';;

 $age=(int)$current_year - (int)$birth;
 $height=mysqli_query($con,$s)->fetch_array()[6] ?? '';;
 $weight=mysqli_query($con,$s)->fetch_array()[5] ?? '';;

 $s1="select * from employee_health_state where ID='$id' ";

 $pressure=mysqli_query($con,$s1)->fetch_array()[1] ?? '';;
 $diabetes=mysqli_query($con,$s1)->fetch_array()[2] ?? '';;
 $allergy=mysqli_query($con,$s1)->fetch_array()[3] ?? '';;
 $heart=mysqli_query($con,$s1)->fetch_array()[4] ?? '';;

 //check
echo (string)$name;
echo "<br>";
echo (string)$gender;
echo "<br>";
echo (string)$current_year;
echo "<br>";
echo (string)$age;
echo "<br>";
echo (string)$height;
echo "<br>";
echo (string)$weight;
echo "<br>";

echo (string)$pressure;
echo "<br>";
echo (string)$diabetes;
echo "<br>";

echo (string)$allergy;
echo "<br>";
echo (string)$heart;
echo "<br>";

if(isset($_POST['weight']) || isset($_POST['height'])  )
{
    echo "hello";
$weight= $_POST['weight'];
$height=$_POST['height'];

$edit="update employee
SET Weight = '$weight', Height ='$height' ;
WHERE ID='$id';";
echo "<br>";
echo $edit;

mysqli_query($con,$edit);

}

}
?>
    <img   style="position:absolute;top:0%; left:88%;"id ="im1" src="images/car gas.jpg">
    <h1 style="color:green; position:absolute; top:1%; left:38%;"">Edit employee information </h1>
    <div id="box">
 <form action="Edit_employee_information.php" method="post">
  ID: <input type="text" name="id" required > 
<button  >search </button> 
</form>
<br> <br>
<hr>
<br> 
<form action="Edit_employee_information.php" method="post">
<h3>info</h3>
Name: <input type="text" name="name" id="name" value="<?php if(isset($name)) echo $name;?>" disabled> 

<br><br>
Age: <input type="text" value="<?php if(isset($age)) echo $age;?>" disabled> 
<br><br>
Gender: <input type="text" value="<?php if(isset($gender)) echo $gender;?>" disabled> 
<br>
<hr>
<br><br>
Weight: <input type="text"  name="weight" value="<?php if(isset($weight)) echo $weight;?>" > 

<br><br>
Height: <input type="text"  name="height" value="<?php if(isset($height)) echo $height;?>" > 

<br><br>
Pressure: 

<select name="Pressure" >
<option value="">--Please choose an option--</option>
    <option selected="<?php if(isset($pressure))  if($pressure==1)echo 'selected';?>" value="pYes">Yes </option>
    <option selected="<?php if(isset($pressure))  if($pressure==1)echo 'selected';?>" value="pNo">No</option>
    </select>
<br><br>
Diabetes:

<select name="Diabetes" >
<option value="">--Please choose an option--</option>
    <option selected="<?php if(isset($diabetes))  if($diabetes==1)echo 'selected';?>" value="dYes">Yes </option>
    <option selected="<?php if(isset($diabetes))  if($diabetes==1)echo 'selected';?>" value="dNo">No</option>


</select>

<br><br>
Drug Allergy: <input type="text"  value="<?php if(isset($allergy)) echo $allergy;?>"> 

<br><br>
Heart Problem: <input type="text" value="<?php if(isset($heart)) echo $heart;?>" > 

<br><br>
<button style="position:relative; width:100px; height:20px; left:30%;" >Edit </button> 
</div>
</form>

    <!-- <script language="javascript">
 document.getElementById("name").value =(string)$name  ;
  </script> -->
</body>
</html>

