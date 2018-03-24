<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
</head>
<body>


    <form action="Homework1.php" method="post" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="filUpload[]" id="filUpload" multiple="multiple">
        <input type="submit" name="submit" value="Upload">
         
    </form>
</body>
</html>
<?php if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors


    $arrlength=count($_FILES["filUpload"]['tmp_name']);    
    // if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0 && $arrlength>=3){

        
        if(isset($_FILES["filUpload"])&& $arrlength>=3){
        foreach($_FILES['filUpload']['tmp_name'] as $key => $val)
            {
            $file_name = $_FILES['filUpload']['name'][$key];
            $file_size =$_FILES['filUpload']['size'][$key];
            $file_tmp =$_FILES['filUpload']['tmp_name'][$key];
            $file_type=$_FILES['filUpload']['type'][$key]; 

            
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $file_name)){
                echo "<p>".$file_name . " is already exists."."</p>\n";
            } else{
                //move_uploaded_file($_FILES['filUpload']['tmp_name'], "upload/" . $_FILES['filUpload']['name']);
                move_uploaded_file($file_tmp,"upload/".$file_name);
                echo "<p>Your file was uploaded successfully.</p>\n";
            } 

            }

                
    } else{
         echo "<p>You must upload file at least 3 file.<p>\n";
         echo "<p>Try Again.</p>\n";
    }
}
?>