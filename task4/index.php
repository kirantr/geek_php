<?php

  include('libs/config.php');
  include('libs/function.php');
  
  $selectMySQL = $objMySQL->select("`key`")->exec();;