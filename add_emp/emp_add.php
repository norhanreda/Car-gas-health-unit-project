<?php 
// Include the database configuration file  
require_once 'database.php';
require_once 'index.php';
require_once 'view_photo.php';

$status = $statusMsg = ''; 
$status2 = $statusMsg2 = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    $status2 = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        //from here
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
        //to here
            
        /*echo*/ $ID=$_POST["ID"] ;//echo"<br>";
       /*echo*/ $Name=$_POST["Name"];//echo"<br>";
       /*echo*/ $Gender=$_POST["Gender"];//echo"<br>";
       /*echo*/ $DofB=$_POST["DofB"];//echo"<br>";
       /*echo*/ $Address=$_POST["Address"];//echo"<br>";
       /*echo*/ $Type=$_POST["Type"];//echo"<br>";
       /*echo*/ $Salary=$_POST["Salary"];//echo"<br>";
       /*echo*/  $Station=$_POST["Station"];//echo"ygyugou<br>";
        ?>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode( $imgContent); ?>" />
             
       <?php
       echo $query="INSERT into employee (ID,Name,Gender,Date_of_Birth,Address,Type,Salary,Picture,Station) VALUES ('$ID','$Name','$Gender','$DofB','$Address','$Type','$Salary','$imgContent', '$Station') ";
        // Insert image content into database 
         $insert = mysqli_query($conn,$query); 
        //NOW()) 
             
        if($insert){ 
            $status = 'success'; 
            $statusMsg = "Employee is added successfully."; 
        /////////////////////////////////////////////////////  
        //insert account
        $name=$_POST['user'];
        $pass=$_POST['pass'];   
        $s="select * from registration where username='$name'  ";
        $result=mysqli_query($conn,$s);
        $num=mysqli_num_rows($result);

        if($num==1)
        {
            $statusMsg2 = "Creating account failed as the user name already exist, please try again."; 

//            echo '<script language="javascript">';
//            echo 'alert("user name already exists in data base !")';
//
//            echo '</script>';
//
//            echo '<script language="javascript">';
//            echo "window.location.href = 'hhttp://localhost:8888/almaza/signup.php'";
//            echo '</script>';

        }
        else
        {
                $reg="insert into registration( username,id,password) values ('$name','$ID','$pass')";
            echo $reg."<br>";
        $insert2=mysqli_query($conn,$reg);
            if($insert2){ 
            $status2 = 'success'; 
            $statusMsg2 = "Account created successfully."; 
        }else{ 
            $statusMsg2 = "Creating account failed, please try again."; 
        }
            
//          /*  echo '<script language="javascript">';
//            echo 'alert("registration successfully ")';
//            echo '</script>';*/
//            echo '<h3 style="color:green;">registration successfully </h3>';
//
//            echo " hello ";
//            echo $name;
//            echo ' <h6 style="color:green;">you have now an e-mail in our system :)</h6> ';
//
//            echo "<br>";
            
        }  
         /////////////////////////////////////////////////////   
            
        }else{ 
            $statusMsg = "Adding employee failed, please try again."; 
        } 
            
        
             }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 

}else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
    
}

// Display status messages
echo $statusMsg."<br>";
echo $statusMsg2; 


?>