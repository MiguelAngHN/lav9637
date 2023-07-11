<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionController extends Controller
{
    public function SUMAA($num1,$num2){
        $suma = $num1 + $num2;
        return $suma;
    }
}

