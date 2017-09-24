<?php 

include_once './libs/HtmlHelper.php';

$text1 = $_POST['text1'];

$select = HtmlHelper::select($text1);

include_once './templates/tmpl_index.php';

?>