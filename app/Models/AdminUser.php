<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 
        'last_name', 
        'middle_name', 
        'email', 
        'password', 
        'address',
        'birthday', 
        'contact_number', 
        'gender', 
        'role',
        
    ];
}
