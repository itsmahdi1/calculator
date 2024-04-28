<?php

namespace App\Http\Controllers;

use App\Classes\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $calculator = new Calculator();

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operator = $request->input('operator');

        try {
            switch ($operator) {
                case 'plus':
                    $result = $calculator->add($num1, $num2);
                    break;
                case 'minus':
                    $result = $calculator->subtract($num1, $num2);
                    break;
                case 'multiply':
                    $result = $calculator->multiply($num1, $num2);
                    break;
                case 'divide':
                    $result = $calculator->divide($num1, $num2);
                    break;
                default:
                    $result = 'Invalid operator';
            }
            return view('result', compact('result'));
        } catch (\Throwable $th) {
            return view('result')->with("error", $th->getMessage());
        }

    }
}
