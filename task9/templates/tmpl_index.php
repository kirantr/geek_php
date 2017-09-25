<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>HtmlHelper</title>
    </head>
    <body>
        <div class="col-md-offset-5 col-md-7">
            <h2>HtmlHelper</h2>
        </div>
        <div class="container center-block">
            <form method="post"  action="index.php">
                <div class="col-md-offset-4 col-md-8">
                    <p>
                        <input type="text" name="text1" value="Input Data1"> 
                        <input type="text" name="text2" value="Input Data2"> 
                    </p> <p>
                        <input type="text" name="text3" value="Input Data3"> 
                        <input type="text" name="text4" value="Input Data4"> 
                    </p>
                </div>
                <div class="col-md-offset-4 col-md-8">
                    <br><p><input type="radio" name="flag" value="select" checked> Select</p>
                    <p><input type="radio" name="flag" value="mult_select"> Multi Select</p>
                    <p><input type="radio" name="flag" value="table"> Table</p>
                    <p><input type="radio" name="flag" value="update"> Update</p>
                    <div class="col-md-offset-3 col-md-8"> 
                        <p><input type="submit" value="Send"></p><br>
                    </div>
                </div>
            </form>
            <?php
//SELECT

            if (isset($select))
            {
                foreach ($select as $key => $value)
                {
                    echo
                    '<div class="col-md-offset-5 col-md-4 output">'
                    . $value
                    . "</div>";
                }
            }
            ?>
        </div>
    </body>
</html>
