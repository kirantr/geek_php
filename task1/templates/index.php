<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Task1</title>
    </head>
    <body>


        <!--<form action=/usr/home/user7/public_html/MYPHP/task1/index.php method=post enctype=multipart/form-data>-->
        <form action= "./libs/function.php" method=post enctype=multipart/form-data>
            <input type=file name=uploadfile>
            <input type=submit value=Загрузить></form>
        <?php
//        include"/usr/home/user7/public_html/MYPHP/task1/const.php";
        include"$path/libs/function.php";
include_once './libs/function.php';
        ?>

    </body>
</html>
