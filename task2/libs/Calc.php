<?php

 class Calc
 {

     private $date1;
     private $date2;
     private $ms;

     public function setDate1($date, $sel)
     {
         if ($sel == 'ms' || $sel == 'mr' )
         {
             return $this->date1 = $date;
         } elseif (($date) == '')
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

     public function setDate2($date, $sel)
     {
         if ($sel == 'ms' 
               || $sel == 'mr' 
               || $sel == '+m' 
               || $sel == '-m' 
               || $sel == 'mc' 
               || $sel == 'sqrt'
         )
         {
             return $this->date2 = $date;
         } elseif ($date == 0 && $sel == '/')
         {
             echo DIVISION_ZERO;
             exit;
         } elseif (($date) == '')
         {
             echo IS_NO_SET;
         } elseif (!is_numeric($date))
         {
             echo NOT_DATA;
         } else
         {
             return $this->date2 = $date;
         }
     }

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
         if ($this->getDate1() > 0)
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

     public function getMemory()
     {
         return $this->ms;
     }

     public function select($sel)
     {
         if ($sel == '+')
         {
             return '=' . $this->plus();
         }

         if ($sel == '-')
         {
             return '=' . $this->minus();
         }

         if ($sel == '*')
         {
             return '=' . $this->multiplication();
         }

         if ($sel == '/')
         {
             return '=' . $this->division();
         }

         if ($sel == '%')
         {
             return '=' . $this->precent();
         }

         if ($sel == 'sqrt')
         {
             return '=' . $this->sqrt();
         }

         if ($sel == 'ms')
         {
             $sum = $this->getMemory();
             return $sum;
         }
         if ($sel == 'mr')
         {
             $sum = $this->getMemory();
             return $sum;
         }
         if ($sel == '+m')
         {
             $sum = $this->getMemory() + $this->getDate1();
             return '=' . $sum;
         }
         if ($sel == '-m')
         {
             $sum = $this->getMemory() - $this->getDate1();
             return '=' . $sum;
         }
         if ($sel == 'mc')
         {
             unset($this->ms);
             $sum = $this->ms;
             return $sum;
         }
     }

 }

?>
