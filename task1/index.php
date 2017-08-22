<?php

include_once './config.php';
include_once './libs/function.php';

if (isset($_FILES['UserFile']['name']))
{
    $fileName = $_FILES['UserFile']['name'];
}
if (!is_dir(PATH_FOR_UP))
{
    $report = NO_SUCH;
} elseif (is_dir(PATH_FOR_UP))
{

    if (!empty($fileName))
    {
        $uploadFile = PATH_FOR_UP . basename($fileName);
        if (move_uploaded_file($_FILES['UserFile']['tmp_name'], $uploadFile))
        {
            $report = SUCCES_UPLOAD;
        } else
        {
            $report = NO_SUCCES_UPLOAD;
        }
    }
        $outArray = outputArray($fileName);

}
include_once './templates/tmpl_index.php';
