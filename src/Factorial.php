<?php

class Factorial
{
    public function CalcFactorial($num)
    {
        if (is_int($num) != 1 || $num < 0) {
            return null;
        } elseif ($num == 0 || $num == 1) {
            return 1;
        } else {
            return $num * $this->CalcFactorial($num - 1);
        }
    }
}
// $t = new Factorial;
// echo $t->CalcFactorial(1.5);
