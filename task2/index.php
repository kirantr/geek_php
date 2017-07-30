<?php

  include_once './templates/index.php';
  include_once './libs/Calc.php';

  $objCalc = new Calc();

  $objCalc->setDate1("$date1");
  echo $objCalc->getDate1();

  $objCalc->setDate2("$date2");
  echo $objCalc->getDate2();

  if ($date1 && $date2)
  {
		if (isset($plus))
		{
			  $a= $objCalc->plus();
		}
		if (isset($minus))
		{
			 echo $objCalc->minus();
		}
  }