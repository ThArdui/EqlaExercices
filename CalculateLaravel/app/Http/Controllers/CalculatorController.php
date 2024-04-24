<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class CalculatorController extends Controller
{
    function calculate(Request $request)
    {
        $allInputs = $request->input();
        $number1 = $request->input('nbr_1');
        $number2 = $request->input('nbr_2');
        $ope = $request->input('ope');
        $result = 0;
        $resultDivImpossible = 0;
        if ($ope == "add") {
            $result = $number1 + $number2;
        } elseif ($ope == "sub") {
            $result = $number1 - $number2;
        } elseif ($ope == "mul") {
            $result = $number1 * $number2;
        } elseif ($ope == "div") {
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                return view("CalculatorResult")->with('result',"Division par 0 interdite ! Veuillez entrer un chiffre suppérieur à 0");
            }
        }
        return view("CalculatorResult")->with('result', $result);
    }
}
