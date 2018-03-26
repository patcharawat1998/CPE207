<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body style="background-color:powderblue">
    <form action="Homework1.php" method="post" enctype="multipart/form-data">
        <!-- <div id="menu"></div>
        <div class="content"></div> -->
        <h1><center>Upload File</center></h1>
        <center>
        <img src="picture/Image_upload.png" alt="Mountain View" width="255" height="150">
        </center>
        
        <p><center>
        <label for="fileSelect"><h2>Filename:</label>
        <input type="file" name="fileUploaded[]" id="fileUploaded" multiple="multiple">
        <input type="submit" name="submit" value="Upload">
        </h2>
        </p></center>
         
    </form>
</body>
</html>
<?php if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors


    $arrlength=count($_FILES["fileUploaded"]['tmp_name']);    
    // if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0 && $arrlength>=3){

        
        if(isset($_FILES["fileUploaded"])&& $arrlength>=3){
        foreach($_FILES['fileUploaded']['tmp_name'] as $key => $val)
            {
              
            $file_name = $_FILES['fileUploaded']['name'][$key];
            $file_size =$_FILES['fileUploaded']['size'][$key];
            $file_tmp =$_FILES['fileUploaded']['tmp_name'][$key];
            $file_type=$_FILES['fileUploaded']['type'][$key]; 

            
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $file_name)){
                echo "<p><center>".$file_name . " is already exists."."</center></p>\n";
            } else{
                //move_uploaded_file($_FILES['fileUploaded']['tmp_name'], "upload/" . $_FILES['fileUploaded']['name']);
                move_uploaded_file($file_tmp,"upload/".$file_name);
                echo "<p><center>Your ".$file_name." was uploaded successfully.</center></p>\n";
            } 

            }

            echo "<h1><center>My Gallery</center></h1>";
            foreach($_FILES['fileUploaded']['tmp_name'] as $key => $val){
                $file_name = $_FILES['fileUploaded']['name'][$key];
                $file_size =$_FILES['fileUploaded']['size'][$key];
                $file_tmp =$_FILES['fileUploaded']['tmp_name'][$key];
                $file_type=$_FILES['fileUploaded']['type'][$key]; 

                $allowed_types=array('jpg','jpeg','gif','png');
                  
                $dir=$file_name;

                echo '<center>';
                echo '<div class="img-box">';
                echo '<img src="upload/' . $dir . '" width="200" alt="' .  pathinfo($dir, PATHINFO_FILENAME) .'">';
                echo "<h3><p>$dir</p></h3>";
                echo '<p><a href="download.php?file=' . urlencode($dir) . '">Download</a></p>';
                echo '</div>';
                echo '</center>';
            }

                
    } else{
         echo '<center>';
         echo "<h3>You must upload file at least 3 file.</h3>\n";
         echo "<h4><p>Try Again.</p></h4>\n";
         echo '</center>';
    }
}
?>
