<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DocumentRequest extends Model
{
    use SoftDeletes;

    use HasFactory;
    protected $fillable = ['full_name', 'purpose', 'id_number', 'document_type', 'business_name', 'id_type', 'user_id', 'tracker_number', 'status', 'image', 'civil_status', 'address', 'birthday', 'document_date', 'gender', 'contact_number', 'document_time', 'created_at', 'Permit_number'];

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

}

