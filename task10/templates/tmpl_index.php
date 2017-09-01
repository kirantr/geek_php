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
                    <p><input type="radio" name="flag" value="distinct"> Distinct</p>
                    <p><input type="radio" name="flag" value="delete"> Delete</p>
                    <p><input type="radio" name="flag" value="update"> Update</p>
                    <div class="col-md-offset-3 col-md-8"> 
                        <p><input type="submit" value="Send"></p><br>
                    </div>
                </div>
            </form>
            <?php
//SELECT
             if ($_POST['flag'] == 'select')
             {
                 $selectMySQL = $objMySQL->select("`key`, `data`")->
                         from(NAME_TABLE)->where('user7', "`key`")->exec();
                     echo
                     '<div class="col-md-offset-2 col-md-7 output">'
                     .   $selectMySQL
                     . "</div>";
             }

//             $objPgSQL->flag($_POST['flag']);

//SELECT PG

             if ($_POST['flag'] == 'select')
             {
                 $selectPgSQL = $objPgSQL->select("key, data")->
                         from(PG_NAME_TABLE)->where('user7', "key")->exec();
                     echo
                     '<div class="col-md-offset-2 col-md-7 output">'
                     . $selectPgSQL                     
                     . "</div>";
             }

      if ($_POST['flag'] == 'distinct')
     {
         if ($_POST['db'] == 'mysql')
         {
             $key = "`key`, `data`";
             $nameTable = NAME_TABLE;
             $objSQL = $objMySQL;
         } elseif ($_POST['db'] == 'pg')
         {

             $key = "key, data";
             $nameTable = PG_NAME_TABLE;
             $objSQL = $objPgSQL;
         }
         $out = $objSQL->select('')->
             distinct($key)->
             from($nameTable)->
             where('user7', "`key`")->
             exec();
     }
      echo '<div class="col-md-offset-2 col-md-7 output">'.
$out. "</div>";
            
            ?>
        </div>
    </body>
</html>
