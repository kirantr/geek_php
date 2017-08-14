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

 
          function deleteFile($fileDelete)
         {
             $form = "<form method=post action=./index.php>
              <input type=hidden name=del value=$fileDelete> 
              <input type=submit value=Delete> 
            </form>";
             return $form;
         }

 
 
 function outputArray($fileName)
 {         

// $fileName = $_FILES['UserFile']['name'];
     $filesArray = scandir(PATH_FOR_UP);
     for ($i = 2; $i < count($filesArray); ++$i)
     {
         $fileNameArr = $filesArray[$i];
         $fileSize = filesize(PATH_FOR_UP . $filesArray[$i]);
          $n = $i - 1;

         $byte = fileByte($fileSize);

         if ($fileName == $fileNameArr)
         {
             echo EXISTS_FILE;
         }

         $fileDelete = PATH_FOR_UP . $filesArray[$i];
         $del = deleteFile($fileDelete) ;

         $outArray[] = array('num' => $n,
             'fileName' => $fileNameArr,
             'byte' => $byte,
             'del' => $del);
     }
         
         return $outArray;
 }

 if (!empty($_POST['del']))
 {
     $fileUnlink = $_POST['del'];
     unlink($fileUnlink);
 }
?>
