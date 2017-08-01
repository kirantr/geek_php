<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Task1</title>
    </head>
    <body>
        <form method=post enctype=multipart/form-data> 
            Select file: <input type=file name=UserFile> 
            <input type=submit value=Upload> 
        </form>

        <?php

          function delete($fileDelete)
          {
            $form = "<form method=post>
              <input type=hidden name=del value=$fileDelete> 
              <input type=submit value=Delete> 
            </form>";
            return $form;
          }
        ?>

    </body>
</html>
