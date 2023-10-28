<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DayFiveModel;

class DayFiveController extends Controller
{
    function show (){
        $msg = new DayFiveModel();
        
        
        return view('d5', ["msg" =>$msg->statementOfSuccess()]);
    }
}
