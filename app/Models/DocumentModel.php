<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_id','student_id','document_type','file_path','upload_date',
    ];
}
