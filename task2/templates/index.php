<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

		  <?php
			 echo '
				<form  method="post"> 
					 <input type="text" name="date1"> 
					 <input type="text" name="date2"> 
					 <input name="plus" type=submit value="+"> 
					 <input name="minus" type=submit value="-"> 
					 
				</form>				';
			 $date1 = ($_POST['date1']);
			 $date2 = ($_POST['date2']);
			 $plus = ($_POST['plus']);
			 $minus = ($_POST['minus']);
			 include_once './templates/index.php';
			 echo "$a";
//			 print_r($date1);
//			 echo "$date1";
//			 echo "$date2";
//			 			 $objCalc = new Calc();
//			 $objCalc ->setDate1("1");
//			 echo $objCalc ->getDate1();
		  ?>
    </body>
</html>
