<?php

  class Calc
  {

		private $date1;
		private $date2;
		private $ms;

		public function setDate1($date)
		{
			 if (($date) == '')
			 {
				  echo IS_NO_SET;
			 } elseif (!is_numeric($date))
			 {
				  echo NOT_DATA;
			 } else
			 {
				  return $this->date1 = $date;
			 }
		}

		public function getDate1()
		{
			 return $this->date1;
		}

		public function setDate2($date, $division)
		{
			 if ($date == 0 && isset($division))
			 {
				  echo DIVISION_ZERO;
				  exit;
			 }

			 if (($date) == '')
			 {
				  echo IS_NO_SET;
				  exit;
			 } 
			 elseif (!is_numeric($date))
			 {
				  echo NOT_DATA;
				  exit;
			 } else
			 {
				  return $this->date2 = $date;
			 }
		}

//		public function setDate2($date)
//		{
//			 			 if ($date== 0)
//			 {
//				  echo DIVISION_ZERO;
//			 }
//		}

		public function getDate2()
		{
			 return $this->date2;
		}

		public function plus()
		{
			 $sum = $this->getDate1() + $this->getDate2();
			 return $sum;
		}

		public function minus()
		{
			 $sum = $this->getDate1() - $this->getDate2();
			 return $sum;
		}

		public function multiplication()
		{
			 $sum = $this->getDate1() * $this->getDate2();
			 return $sum;
		}

		public function division()
		{

			 $sum = $this->getDate1() / $this->getDate2();
			 return $sum;
		}

		public function precent()
		{
			 $sum = ($this->getDate1() * $this->getDate2()) / 100;
			 return $sum;
		}

		public function sqrt()
		{
			 if ($this->getDate2() > 0)
			 {
				  $sum = sqrt($this->getDate1());
			 } else
			 {
				  return SQRT_ERROR;
			 }
			 return $sum;
		}

		public function setMemory($memory)
		{
			 $this->ms = $memory;
		}

  }

?>
