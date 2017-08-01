<?php

//  include_once '../config.php';

  $upload_path;
  $uploadfile;
  $filesArray;
  $fileName;
  $fileSize;
  $fileDelete;
  $fileUnlink;
  


  
  if (!is_dir($upload_path))
  {
      echo 'There is no such directory ';
  }
  if (isset($_FILES['UserFile']['name']))
  {
      $uploadfile = $upload_path . basename($_FILES['UserFile']['name']);
      if (copy($_FILES['UserFile']['tmp_name'], $uploadfile))
      {
          echo "<h3>The file was successfully uploaded</h3>";
      } else
      {
          echo "<h3>Error! Could not upload the file</h3>";
//    exit;
      }
  } else
  {
      echo 'Choose File <br>';
  }

  $filesArray = scandir($upload_path);
  for ($i = 2; $i < count($filesArray); ++$i)
  {
      $fileName = $filesArray[$i];
      $fileSize = filesize($upload_path . $filesArray[$i]);
      echo $fileName;
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

      if ($_FILES['UserFile']['name'] == $fileName)
      {
          echo 'Such file already exists <br>';
      }


      $fileDelete = $upload_path . $filesArray[$i];

      echo delete($fileDelete);
  }
  if (!empty($_POST['del']))
  {
      $fileUnlink = $_POST['del'];
      unlink($fileUnlink);
  }
?>
