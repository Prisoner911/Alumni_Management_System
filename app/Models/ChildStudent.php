<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildStudent extends Model
{

    protected $connection = 'mysql2';
    protected $table = 'child_student';
    protected $primaryKey = 'roll_no';
    public $incrementing = false;
    protected $KeyType = 'string';

    protected $fillable = ['roll_no', 'pr_no', 'name', 'ph_no', 'email', 'alumni_status', 'current_status'];
}
