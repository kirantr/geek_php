<?php

 include_once './config.php';
 include_once './templates/index.php';
 include_once './libs/function.php';

 if (!is_dir($uploadPath))
 {
     echo 'There is no such directory ';
 } elseif (is_dir($uploadPath))
 {
     arr($uploadPath, $fileName);
 }
 if (!empty($fileName))
 {

     $uploadFile = $uploadPath . basename($fileName);
     if (copy($_FILES['UserFile']['tmp_name'], $uploadFile))
     {
         echo "<h3>The file was successfully uploaded</h3>";
     } else
     {
         echo "<h3>Error! Could not upload the file. Choose File </h3>";
//    exit;
//         }
     }
 }
