<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterStudent extends Model
{
    protected $table = 'master_student';
    protected $primaryKey = 'roll_no';
    public $incrementing = false; // Since roll_no is a string and not auto-incrementing
    protected $keyType = 'string'; // Specifies that the primary key is a string

    protected $fillable = [
        'roll_no',
        'pr_no',
        'name',
        'ph_no',
        'email',
        'address',
        'course',
        'school_10th_name',
        'school_10th_address',
        'school_10th_percentage',
        'school_12th_name',
        'school_12th_address',
        'school_12th_percentage',
        'bachelor_college_name',
        'bachelor_college_address',
        'bachelor_percentage',
        'current_status',
        'final_year_passed',
    ];
}
