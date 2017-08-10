<?php

 $uploadPath;
 $uploadFile;
 $filesArray;
 $fileNameArr;
 $fileName;
 $fileSize;
 $fileDelete;
 $fileUnlink;




 function fileByte($fileSize)
 {
     if ($fileSize < 1024)
     {
         $byte = $fileSize . " Byte </td>";
         return $byte;
     } 
     elseif ($fileSize > 1024 && $fileSize < 1048576)
     {
         $byte = $fileSize / 1024 . " Kbyte </td> ";
         return $byte;       
     } 
     elseif ($fileSize > 1048576)
     {
         $byte = $fileSize / 1048576 . " Mbyte </td> ";
         return $byte;       
     }
 }

 function arr($uploadPath, $fileName)
 {
 $fileName = $_FILES['UserFile']['name'];
     $filesArray = scandir($uploadPath);
     for ($i = 2; $i < count($filesArray); ++$i)
     {
         $fileNameArr = $filesArray[$i];
         $fileSize = filesize($uploadPath . $filesArray[$i]);
          $n = $i - 1;

         $byte = fileByte($fileSize);

         if ($fileName == $fileNameArr)
         {
             echo 'Such file already exists <br>';
             exit;
         }

         $fileDelete = $uploadPath . $filesArray[$i];

         echo '<td>' . delete($fileDelete) . "</td>";
         $outArray[] = array();
         array_push($outArray, $n, $fileNameArr, $byte, $fileDelete);
     }
         
         return $outArray;
//         print_r($outArray);
//         echo '<br>';
 }

 if (!empty($_POST['del']))
 {
     $fileUnlink = $_POST['del'];
     unlink($fileUnlink);
 }
?>
