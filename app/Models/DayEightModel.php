<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayEightModel extends Model
{
    use HasFactory;

    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    
}
