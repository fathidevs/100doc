<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Seeders\DayEightSeeder;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DayEightController extends Controller
{
    public function showForm(){
        return view('d8');
    }
    
    public function register(Request $req){
        $validator = Validator::make($req->all(),[
            'name' => 'required|string',
            'email' => 'required|email|unique:my_users',
            'password' => 'required|min:6',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DayEightSeeder::run($req);

        return redirect()->back()->with('success', 'user registered successfully!');
    }
}
