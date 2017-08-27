<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title></title>
    </head>
    <body>
        <form method="post"  action="index.php">
            <p><input type="checkbox" name="flag" value="select" checked> Select</p>
            <p><input type="radio" name="a" value="insert"> Insert</p>
            <p><input type="radio" name="a" value="delete"> Delete</p>
            <p><input type="radio" name="a" value="update"> Update</p>
            <p><input type="submit" value="Send"></p>
        </form>
        <?php
        
        echo $_POST['flag'] .'<br>';
        $objMySQL->flag('select');
//SELECT
        $selectMySQL = $objMySQL->select("`key`, `data`")->from(NAME_TABLE)->where('user7', "`key`")->exec();

        foreach ($selectMySQL as $value)
        {
            echo $value['key'] . ' ' . $value['data'] . "<br>";
        }

//             } else {echo NO_ROW;}
        ?>
    </body>
</html>
