<?php

 class Calc
 {

     private $date1;
     private $date2;
     private $ms;

     public function setDate1($date)
     {
         if (is_numeric($date))
         {
             $this->date1 = $date;
             return true;
         } else
         {
             return NOT_DATA;
         }
     }

     public function getDate1()
     {
         if (isset($this->num1))
         {
             return $this->date1;
         }
         else
         {
             return IS_NO_SET;
         }
     }

     public function setDate2($date)
     {
         if (is_numeric($date))
         {
             $this->date2 = $date;
             return true;
         } else
         {
             return NOT_DATA;
         }
     }

     public function getDate2()
     {
         if (isset($this->num2))
         {
             return $this->date2;
         }
         else
         {
             return IS_NO_SET;
         }
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
         if ($this->getDate2() !== 0)
         {
             $sum = $this->getDate1() / $this->getDate2();
         } else
         {
             return DIVISION_ZERO;
         }
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
