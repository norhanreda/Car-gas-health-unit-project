<?php 
/*
// Include the database configuration file  
require_once 'database.php'; 

/// If file upload form is submitted 
$imgContent=0;
$status = $statusMsg = ''; 
if(isset($_POST["submit2"])){//&& isset($_POST)){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            
        //view img
            echo "photo here";
            ?>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode( $imgContent); ?>" />
             
       <?php
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg;
*/
?>



