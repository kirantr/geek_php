<?php

echo "<form method=post enctype=multipart/form-data> 
Select file: <input type=file name=UserFile> 
<input type=submit value=Upload> 
</form>";

if (isset($_FILES['UserFile']))
{
    echo 'UserFile';
}