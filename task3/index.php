<?php

include_once './config.php';
include_once './libs/FileRead.php';
$objFileRead = new FileRead($pathFile);
if (isset($pathFile))
{
     function fileGetCont($pathFile)
    {
        $content = file_get_contents($pathFile);
        return $content;
    }

}
 else
{
$content = NOT_FILE;
}
include_once './templates/tmpl_index.php';
