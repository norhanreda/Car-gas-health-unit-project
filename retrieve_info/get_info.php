<?php 
// Include the database configuration file  
require_once 'database.php'; 
 
// Get image data from database 
$result =  mysqli_query($conn,"SELECT * FROM employee,registration,employee_health_state Where employee.ID=1 AND employee.ID=registration.id AND employee.ID=employee_health_state.ID "); 
$rowCount= mysqli_num_rows($result);
?>

<?php if($rowCount > 0){
$row =mysqli_fetch_assoc($result);
?> 
    <div class="gallery"> 
               
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Picture']); ?>" /> 
            
    </div> 
<?php
/*echo*/ $ID=$row["ID"] ;//echo"<br>";
/*echo*/ $Name=$row["Name"];//echo"<br>";
/*echo*/ $Gender=$row["Gender"];//echo"<br>";
/*echo*/ $DofB=$row["Date_of_Birth"];//echo"<br>";
/*echo*/ $Address=$row["Address"];//echo"<br>";
/*echo*/ $Type=$row["Type"];//echo"<br>";
/*echo*/ $Salary=$row["Salary"];//echo"<br>";
/*echo*/ $Station=$row["Station"];//echo"ygyugou<br>";
    
         $username=$row["username"];
         $password=$row["password"];
    
         $Weight=$row["Weight"];
         $Height=$row["Height"];
        $Pressure=$row["Pressure"];
        $Diabetes=$row["Diabetes"];
         $Drug_Allergy=$row["Drug Allergy"];
         $Heart_Problem=$row["Heart Problem"];
             
}else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php }?>
</br>
</br>
<?php 


?>