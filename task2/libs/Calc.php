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
        } else
        {
            echo "Input the correct numeric1 <br>";
        }
    }

    public function getDate1()
    {
        return $this->date1;
    }

    public function setDate2($date)
    {
        if (is_numeric($date))
        {
            $this->date2 = $date;
        } else
        {
            echo "Input the correct numeric2 <br>";
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
        $sum = $this->getDate1() - $this->getDate2();
        return $sum;
    }

}

?>
