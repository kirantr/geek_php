<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Task1</title>
    </head>
    <body>
        <form method=post action="./index.php" enctype=multipart/form-data> 
            Select file: <input type=file name=UserFile> 
            <input type=submit value=Upload> 
        </form>
<br><table class="table" border="1">
            <thead>
                <tr>
                <th>N</th>
                <th>Files</th>
                <th>Size</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>
        <?php
			 echo "$report";
			 echo "$reportExists";

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

        ?>
				</tbody>
    </body>
</html>
