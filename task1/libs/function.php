<?php

 $uploadPath;
 $uploadFile;
 $filesArray;
 $fileNameArr;
 $fileName;
 $fileSize;
 $fileDelete;
 $fileUnlink;



 $fileName = $_FILES['UserFile']['name'];

 echo '<table class="table" border="1">
 <thead>
 <tr>
 <th>N</th>
 <th>Files</th>
 <th>Delete</th>
 </tr>
 </thead>
 <tbody>
      <tr>';

 function arr($uploadPath, $fileName)
 {
     $filesArray = scandir($uploadPath);
     for ($i = 2; $i < count($filesArray); ++$i)
     {
         $fileNameArr = $filesArray[$i];
         $fileSize = filesize($uploadPath . $filesArray[$i]);
         echo '<td>' . $n = $i - 1 . '</td><td>' . "$fileNameArr" . ' ';

         if ($fileSize < 1024)
         {
             echo $fileSize . " Byte </td>";
         } elseif ($fileSize > 1024 && $fileSize < 1048576)
         {
             $fileSize = $fileSize / 1024;
             echo $fileSize . " Kbyte </td> ";
         } elseif ($fileSize > 1048576)
         {
             echo $fileSize / 1048576 . " Mbyte </td> ";
         }

         if ($fileName == $fileNameArr)
         {
             echo 'Such file already exists <br>';
             exit;
         }


         $fileDelete = $uploadPath . $filesArray[$i];

         echo '<td>' . delete($fileDelete) . "</td>";
     }

     echo '</tr></tbody>';
 }

 if (!empty($_POST['del']))
 {
     $fileUnlink = $_POST['del'];
     unlink($fileUnlink);
 }
?>
