<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentManagement extends Model
{

    protected $connection = 'mysql2';
    protected $table = 'student_details';
    // protected $primaryKey = 'user_id';
    // public $incrementing = false;
    // protected $KeyType = 'string';

    protected $fillable = [
        'user_id', 'roll_no', 'pr_no', 'phone_no', 'address',
        'school_10th_name', 'school_10th_address', 'school_10th_percentage',
        'school_12th_name', 'school_12th_address', 'school_12th_percentage',
        'bachelor_college_name', 'bachelor_college_address', 'bachelor_percentage',
        'current_status', 'final_year_passed'
    ];

}
