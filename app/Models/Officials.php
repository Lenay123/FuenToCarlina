<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officials extends Model
{
    use HasFactory;
    const ADDRESS_OPTIONS = ['Proper Nabunturan Barili Cebu', 'Sitio San Roque Nabunturan Barili Cebu', 'Sitio Cabinay Nabunturan Barili Cebu'];

    protected $fillable = [
        'first_name', 
        'last_name', 
        'middle_name', 
        'email', 
        'address',
        'birthday', 
        'contact_number', 
        'gender', 
        'image', 
        'position',
    ];
}
