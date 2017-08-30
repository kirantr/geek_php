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
            <p><input type="text" name="text" value="Input Data"> </p>
            <p><input type="radio" name="flag" value="select" checked> Select</p>
            <p><input type="radio" name="flag" value="insert"> Insert</p>
            <p><input type="radio" name="flag" value="delete"> Delete</p>
            <p><input type="radio" name="flag" value="update"> Update</p>
            <p><input type="submit" value="Send"></p>
        </form>
        <?php
        if (isset($_POST['flag']))
        {
            $objMySQL->flag($_POST['flag']);

//INSERT  MySQL
            if ($_POST['flag'] == 'insert')
            {
                $insertMySQL = $objMySQL->insert(NAME_TABLE, "`key`, `data`")->values('user7', $_POST['text'])->exec();
                echo 'Data inserted';
            }

//DELETE MySQL
            if ($_POST['flag'] == 'delete')
            {
                $deletMySQL = $objMySQL->delete()->from(NAME_TABLE)->where('user7', "`key`")->exec();
                echo 'Data deleted';
            }
//UPDATE MySQL
            if ($_POST['flag'] == 'update')
            {
                $updateMySQL = $objMySQL->update(NAME_TABLE)->set('`data`', $_POST['text'])
                                ->where('user7', "`key`")->exec();
                echo 'Data updated';
            }
//SELECT MySQL
            if ($_POST['flag'] == 'select')
            {
                $selectMySQL = $objMySQL->select("`key`, `data`")->from(NAME_TABLE)->where('user7', "`key`")->exec();
//            var_dump($selectMySQL);
                foreach ($selectMySQL as $value)
                {
                    echo "<br>" . $value['key'] . ' ' . $value['data'] . "<br>";
                }
            }

//            echo $_POST['flag'] . '<br>';
        } else
        {
            
        }
//             } else {echo NO_ROW;}

//SELECT PG
        $selectMySQL = $objPgSql->select("key, data")->from(PG_NAME_TABLE)->where('user7', "key")->exec();
        ?>
    </body>
</html>
