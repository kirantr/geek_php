<?php

 include_once './config.php';
 include_once './libs/function.php';

 if (!is_dir(PATH_FOR_UP))
 {
     echo 'There is no such directory ';
 } 
 elseif (is_dir(PATH_FOR_UP))
 {
     $outArray = outputArray();
 }
 
 if (!empty($fileName))
 {
//     echo "$fileName";
     $uploadFile = PATH_FOR_UP . basename($fileName);
     if (copy($_FILES['UserFile']['tmp_name'], PATH_FOR_UP))
     {
         echo "<h3>The file was successfully uploaded</h3>";
     } else
     {
         echo "<h3>Error! Could not upload the file. Choose File </h3>";
//    exit;
//         }
     }
 }
 include_once './templates/tmpl_index.php';
