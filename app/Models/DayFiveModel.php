<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayFiveModel extends Model
{
    use HasFactory;
    
    // protected $fillable = ['statement'];
    public function statementOfSuccess(){
        return "hello world from day 5 model";
    }
}
