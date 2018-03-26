<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Image Gallery</title>
<style type="text/css">
    .img-box{
        display: inline-block;
        text-align: center;
        margin: 0 15px;
    }
</style>
</head>
<body>
    <?php
  
        // $image='m (1).png';
        // echo '<div class="img-box">';
        // echo '<img src="upload/' . $image . '" width="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'">';
        // echo "<p>$image</p>";
        // echo '<p><a href="download.php?file=' . urlencode($image) . '">Download</a></p>';
        // echo '</div>';

        // $image='m (2).png';
        // echo '<div class="img-box">';
        // echo '<img src="upload/' . $image . '" width="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'">';
        // echo '<p><a href="download.php?file=' . urlencode($image) . '">Download</a></p>';
        // echo '</div>';

        
        echo '<h1><center>My Gallery</center></h1>';
        $allowed_types=array('jpg','jpeg','gif','png');
        $dir    ="upload/";
        $files1 = scandir($dir);
        foreach($files1 as $key=>$value){
            if($key>1){
                $file_parts = explode('.',$value);
                $ext = strtolower(array_pop($file_parts));
                if(in_array($ext,$allowed_types)){
                    echo '<div class="img-box">';
                    //echo "<img style='width:200px;' src='".$dir.$value."'/>&nbsp;";  
                    echo '<img src="upload/' . $value . '" width="200" alt="' .  pathinfo($value, PATHINFO_FILENAME) .'">';
                    echo "<p>$value</p>";
                    echo '<p><a href="download.php?file=' . urlencode($value) . '">Download</a></p>'; 
                    echo '</div>';
                }
        
            }
        }
    
    ?>
</body>
</html>