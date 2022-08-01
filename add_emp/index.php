
<?php
//note: Weight and Height will be added through the doctor
//require_once 'cargas_project/database.php';
//require_once 'cargas_project/emp_add.php';
require_once 'database.php';
require_once 'emp_add.php';
?>



<html>
<head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car gas</title>
    <link rel="stylesheet" href="stylesup.css">
    <link rel="icon" type="image/x-icon" href="images/car gas.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body align="center" >
<form action="emp_add.php" method="post" enctype="multipart/form-data" >
   <label>ID:</label>
   <input type="text" name="ID" required>
   </br>
   </br>
   
   <label>Name:</label>
   <input type="text" name="Name" required>
   </br>
   </br>
   
   <label>Gender:</label>
<!--   <input type="text" name="Gender">-->
  <select name="Gender" required >
      <option>Male</option>
      <option>Female</option>
  </select>
   </br>
   </br>
   
   <label>Date_of_Birth:</label>
   <input type="date" name="DofB" required>
   </br>
   </br>
    
    <label>Address:</label>
   <input type="text" name="Address" required>
   </br>
   </br>
    
    <label>Type:</label>
<!--   <input type="text" name="Type">-->
   <select name="Type" required>
      <option>Admin </option>
      <option>Doctor</option>
      <option>Employee</option>
  </select>
   </br>
   </br>
   
   <label>Salary:</label>
   <input type="text" name="Salary" required>
   </br>
   </br>
    
    <label>Station:</label>
   <input type="text" name="Station" required>
     
    </br>
   </br>  
      <label>Mobile1:</label>
   <input type="text" name="Mobile1" required>
     
     </br>
   </br>  
    
<!--    i will not make Mobile2 required .but we need at least Mobile1 to be required-->
     <label>Mobile2:</label>
   <input type="text" name="Mobile2" >
     
<!--     create account-->
    </br>
   </br> 
    <label>user name:</label>
       <input type="text"  name="user" required> 
<!--     placeholder="Enter user name here"  >-->
   <br>
   <br>
   
    <label>password:</label>
    <input type="password" id ="pass"name="pass" required>
<!--   placeholder="Enter password here" >-->
   <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
  
<!--</form>-->


<!--<form action="index.php" method="post" enctype="multipart/form-data" align="center">-->
    
    </br>
   </br>
    <label>Select Image File:</label>
    <input type="file" name="image">
    
         
    </br>
   </br>  
    </br>   
    <input type="submit" name="submit" value="ADD">
<!--
     </br>
   </br>   
    <input type="submit" name="submit2" value="UploadPicture">
-->
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
  
<?php
//view_photo
//include_once 'cargas_project/view_photo.php';
include_once 'view_photo.php';
   ?>
</body>
</html>