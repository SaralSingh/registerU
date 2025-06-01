<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = ['name', 'email','age', 'city', 'phone_no', 'photo'];
}
