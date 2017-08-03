<?php

//  include_once '../config.php';

 $uploadPath;
 $uploadFile;
 $filesArray;
 $fileNameArr;
 $fileName;
 $fileSize;
 $fileDelete;
 $fileUnlink;



 $fileName = $_FILES['UserFile']['name'];

 function arr($uploadPath, $fileName)
 {
     $filesArray = scandir($uploadPath);
     for ($i = 2; $i < count($filesArray); ++$i)
     {
    echo '<table class="table">
 <thead>
 <tr>
 <th>N</th>
 <th>Files</th>
 <th>Delete</th>
 </tr>
 </thead>
 <tbody>
      <tr>
 <td>' .$i.'</td>';
      $fileNameArr = $filesArray[$i];
         $fileSize = filesize($uploadPath . $filesArray[$i]);
         echo $fileNameArr;
         if ($fileSize < 1024)
         {
             echo " " . $fileSize . " Byte <br>";
         } elseif ($fileSize > 1024 && $fileSize < 1048576)
         {
             $fileSize = $fileSize / 1024;
             echo " " . $fileSize . " Kbyte <br> ";
         } elseif ($fileSize > 1048576)
         {
             echo " " . $fileSize / 1048576 . " Mbyte <br> ";
         }

         if ($fileName == $fileNameArr)
         {
             echo 'Such file already exists <br>';
             exit;
         }


         $fileDelete = $uploadPath . $filesArray[$i];

         echo delete($fileDelete);
      </tbody>
     }
     
 }
 if (!empty($_POST['del']))
     {
         $fileUnlink = $_POST['del'];
         unlink($fileUnlink);
     }
?>
