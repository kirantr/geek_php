<?php

  include_once './config.php';
  include_once './libs/FileRead.php';
  $objFileRead = new FileRead($pathFile);
  include_once './templates/index.php';
  