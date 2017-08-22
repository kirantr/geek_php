<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">

        <title>Task1</title>
    </head>
    <body>
        <div class="container center-block">
            <div class="col-md-offset-3 col-md-6">
                <h2>Uploader</h2><br>
                <form method=post action="./index.php" enctype=multipart/form-data> 
                    Select file: <input type=file name=UserFile> 
                    <input type=submit value=Upload> 
                </form>

                <?php
                 echo '<br><table class="table" border="1">
            <thead>
                <tr>
                <th>N</th>
                <th>Files</th>
                <th>Size</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>';

                 if (isset($outArray))
                 {
                     foreach ($outArray as $key => $value)
                     {
                         echo '<tr>'
                         . '<td>' . $value['num'] . '</td>' .
                         '<td>' . $value['fileName'] . '</td>' .
                         '<td>' . $value['byte'] . '</td>' .
                         '<td>' . $value['del'] . '</td>'
                         . '</tr>'
                         ;
                     }
                 } else
                 {
                     echo "$report";
                 }
                 echo '</tbody>';
                ?>
            </div>
        </div>

    </body>
</html>
