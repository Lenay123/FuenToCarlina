<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name', 'purpose', 'id_type', 'id_name' , 'user_id' ,'tracker_number', 'status'
    ];
}
