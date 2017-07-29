<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task2</title>
    </head>
    <body>
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
                    $this->num1 = $date;
                } else
                {
                    echo "Input the correct numeric";
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
                    $this->num2 = $date;
                } else
                {
                    echo "Input the correct numeric";
                }
            }

            public function getDate2()
            {

                return $this->num2;
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

        }
        ?>
    </body>
</html>
