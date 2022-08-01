
<?php
//note: Weight and Height will be added through the doctor
//require_once 'cargas_project/database.php';
//require_once 'cargas_project/emp_add.php';
require_once 'database.php';
require_once 'get_info.php';
?>



<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body align="center">
<!--<form action="emp_add.php" method="post" enctype="multipart/form-data" >-->
   <label>ID:</label>
   <input type="text" name="ID" disabled value="<?php if(isset($ID)) echo $ID;?>">
   </br>
   </br>
   
   <label>Name:</label>
   <input type="text" name="Name" disabled value="<?php if(isset($Name)) echo $Name;?>">
   </br>
   </br>
   
   <label>Gender:</label>
   <input type="text" name="Gender" disabled value="<?php if(isset($Gender)) echo $Gender;?>">
<!--
  <select name="Gender" disabled>
      <option>Male</option>
      <option>Female</option>
  </select>
-->
   </br>
   </br>
   
   <label>Date_of_Birth:</label>
   <input type="date" name="DofB" disabled value="<?php if(isset($DofB)) echo $DofB;?>">
   </br>
   </br>
    
    <label>Address:</label>
   <input type="text" name="Address" disabled value="<?php if(isset($Address)) echo $Address;?>">
   </br>
   </br>
    
    <label>Type:</label>
   <input type="text" name="Type" disabled value="<?php if(isset($Type)) echo $Type;?>">
<!--
   <select name="Type" disabled>
      <option>Admin </option>
      <option>Doctor</option>
      <option>Employee</option>
  </select>
-->
   </br>
   </br>
   
   <label>Salary:</label>
   <input type="text" name="Salary" disabled value="<?php if(isset($Salary)) echo $Salary;?>">
   </br>
   </br>
    
    <label>Station:</label>
   <input type="text" name="Station" disabled value="<?php if(isset($Station)) echo $Station;?>">
     
    </br>
   </br>  
     <label>Mobile1:</label>
   <input type="text" name="Mobile1" disabled>
     
     </br>
   </br>  
     <label>Mobile2:</label>
   <input type="text" name="Mobile2" disabled>
     
   </br>
   </br>  
     <label>user name:</label>
       <input type="text"  name="user" disabled value="<?php if(isset($username)) echo $username;?>"> 
<!--     placeholder="Enter user name here"  >-->
   <br>
   <br>
   
    <label>password:</label>
     <input type="text"  name="pass" disabled value="<?php if(isset($password)) echo $password;?>"> 
     
<!--     health info-->
    <br><br>
     Weight: <input type="text" value="<?php if(isset($Weight)) echo $Weight;?>" disabled> 
     <br><br>
Height: <input type="text" value="<?php if(isset($Height)) echo $Height;?>" disabled> 
<br><br>
Pressure: 
<input type="text"  name="Pressure" value="<?php if(isset($Pressure)) echo $Pressure;?>" disabled>
<!--
    <option value="pYes">Yes </option>
    <option value="pNo">No</option>
-->
<br><br>
Diabetes:
<input type="text"  name="Diabetes" value="<?php if(isset($Diabetes)) echo $Diabetes;?>" disabled>
<!--
    <option value="dYes">Yes </option>
    <option value="dNo">No</option>
-->



<br><br>
Drug Allergy: <input type="text"  value="<?php if(isset($Drug_Allergy)) echo $Drug_Allergy;?>" disabled>  
<br><br>
Heart Problem: <input type="text" value="<?php if(isset($Heart_Problem)) echo $Heart_Problem;?>" disabled> 
<br><br>

<!--
    </br>
   </br>   
    <input type="submit" name="submit" value="GET">
-->


<!--  </form>-->
  
<?php

   ?>
</body>
</html>