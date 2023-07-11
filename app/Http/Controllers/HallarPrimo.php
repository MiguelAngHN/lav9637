<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallarPrimo extends Controller
{
    public function Primo($num){
            for ($i=2; $i <= $num / 2; $i++) {
                if ($num % $i == 0 ){
                    echo 'No primo';
                }
            }
            echo 'Es primo';
        }
        }

    

