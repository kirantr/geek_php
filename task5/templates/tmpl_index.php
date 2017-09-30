<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>iWorkData</title>
    </head>
    <body>
        <div class="col-md-offset-4 col-md-7">
            <h2>iWorkData</h2>
        </div>
        <div class="container center-block">
            <form method="post"  action="index.php">
                <div class="col-md-offset-4 col-md-7">
                    <p><input type="text" name="text" value="Input Data"> </p>
                </div>
                <div class="col-md-offset-4 col-md-8">
                    <p>
                        <input type="radio" name="db" value="mysql" checked> MySQL
                        <span class="col-md-offset-1">
                            <input type="radio" name="db" value="pg"> PostgreSQL
                        </span>
                        <span class="col-md-offset-1">
                            <input type="radio" name="db" value="session"> Session
                        </span>
                        <span class="col-md-offset-1">
                            <input type="radio" name="db" value="cookie"> Cookie
                        </span>
                    </p>
                </div>
                <div class="col-md-offset-3 col-md-9">
                    <br><p><input type="radio" name="flag" value="select" checked> Get Data</p>
                    <p><input type="radio" name="flag" value="insert"> Save Data</p>
                    <p><input type="radio" name="flag" value="delete"> Delete Data</p>
                    <div class="col-md-offset-3 col-md-8"> 
                        <p><input type="submit" value="Send"></p><br>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['db']))
            {
//SELECT
                if (isset($select))
                {
                    foreach ($select as $value)
                    {
                        echo
                        '<div class="col-md-offset-4 col-md-4 output">'
                        . $value['key'] . ' ' . $value['data']
                        . "</div>";
                    }
                }

                if (isset($report))
                {
                    echo
                    '<div class="col-md-offset-4 col-md-4 output">'
                    . $report
                    . "</div>";
                }
            }
            ?>
        </div>
    </body>
</html>
