<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function sum($num1,$num2)
    {
        return "Let's Calculate. Sum of " . $num1 . " and " . $num2 . " is " . ($num1 + $num2);

    }
    public function subtract($num1,$num2)
    {
        return "Let's Calculate. Subtraction of " . $num1 . " and " . $num2 . " is " . ($num1 - $num2);

    }
    public function multiply($num1,$num2)
    {
        return "Let's Calculate. Multiplication of " . $num1 . " and " . $num2 . " is " . ($num1 * $num2);

    }
    public function divide($num1,$num2)
    {
        return "Let's Calculate. Division of " . $num1 . " and " . $num2 . " is " . ($num1 / $num2);

    }
}
