<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title></title>
    </head>
    <body>
        <div class="col-md-offset-4 col-md-7">
            <h2>MySQL & PostgreSQL</h2>
        </div>
        <div class="container center-block">
            <form method="post"  action="index.php">
                <div class="col-md-offset-4 col-md-7">
                    <p><input type="text" name="text" value="Input Data"> </p>
                </div>
                <div class="col-md-offset-4 col-md-8">
                    <p><input type="radio" name="db" value="mysql" checked> MySQL
                        <span class="col-md-offset-2">  <input type="radio" name="db" value="pg"> PostgreSQL</p></span>
                </div>
                <div class="col-md-offset-3 col-md-9">
                    <br><p><input type="radio" name="flag" value="select" checked> Select</p>
                    <p><input type="radio" name="flag" value="insert"> Insert</p>
                    <p><input type="radio" name="flag" value="delete"> Delete</p>
                    <p><input type="radio" name="flag" value="update"> Update</p>
                    <div class="col-md-offset-3 col-md-8"> 
                        <p><input type="submit" value="Send"></p><br>
                    </div>
                </div>
            </form>
            <?php
            if (isset($selectMySQL))
            {
                foreach ($selectMySQL as $value)
                {
                    echo
                    '<div class="col-md-offset-4 col-md-4 output">'
                    . $value['key'] . ' ' . $value['data']
                    . "</div>";
                }
            }

//             $objPgSQL->flag($_POST['flag']);
//SELECT PG
//             if ($_POST['flag'] == 'select')
//             {
//                 $selectPgSQL = $objPgSQL->select("key, data")->
//                         from(PG_NAME_TABLE)->where('user7', "key")->exec();
//
//                 foreach ($selectPgSQL as $valuePg)
//                 {
//                     echo
//                     '<div class="col-md-offset-4 col-md-4 output">'
//                     . $valuePg['key'] . ' ' . $valuePg['data']
//                     . "</div>";
//                 }
//             }
            ?>
        </div>
    </body>
</html>
