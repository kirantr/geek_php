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
            <p><input type="radio" name="db" value="mysql" checked> MySQL
            <input type="radio" name="db" value="pg"> PostgreSQL</p>
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
              if ($_POST['db'] == 'mysql')
             {
                $key = "`key`, `data`";
                $nameTable = NAME_TABLE;
                 $objMySQL->insert($nameTable, $key)->values('user7', $_POST['text'])->exec();
                 echo 'MySql data inserted';
             }
              elseif($_POST['db'] == 'pg')
              {
              
                $key = "key, data";
                $nameTable = PG_NAME_TABLE;
                $objPgSQL->insert($nameTable, $key)->values('user7', $_POST['text'])->exec();
                 echo 'PostgreSql data inserted';
             }
              }    

//DELETE MySQL
             if ($_POST['flag'] == 'delete')
             {
               if ($_POST['db'] == 'mysql')
             {
                $key = "`key`";
                $nameTable = NAME_TABLE;
                $objSQL = $objMySQL; 
             }            
               elseif($_POST['db'] == 'pg')
              {
              
                $key = "key";
                $nameTable = PG_NAME_TABLE;
                $objSQL = $objPgSQL; 
              }    
               $objSQL ->delete()->from($nameTable)->where('user7', $key)->exec();
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
            var_dump($selectMySQL);
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

         $objPgSQL->flag($_POST['flag']);

         //SELECT PG
         
             if ($_POST['flag'] == 'select')
             {
         $selectPgSQL = $objPgSQL->select("key, data")->from(PG_NAME_TABLE)->where('user7', "key")->exec();

         var_dump($selectPgSQL);
         $i=0;
         foreach ($selectPgSQL as $valuePg)
         {
             echo "<br>" . $valuePg[$i] . ' ' . $valuePg[$i+1] . "<br>";
             $i++;
         }}
        ?>
    </body>
</html>
