<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'application_name',
        'institution_name',
        'department',
        'roll_no',
        'session',
        'semester',
        'gender',
        'date_of_birth',
        'contact_number',
        'email',
        'mailing_address',
        'bkash_number',
        'district',
        'syngenta_knowledge',
        'career_ambition',
        'applicant_photo',
        'student_id',
        'applicant_nid',
        'academic_performance_5th',
        'academic_performance_6th',
        'upload_docs',
    ];
}
