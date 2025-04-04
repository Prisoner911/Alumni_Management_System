<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterStudent extends Model
{
    protected $connection = 'mysql';
    protected $table = 'master_student';
    protected $primaryKey = 'roll_no';
    public $incrementing = false;
    protected $KeyType = 'string';

    protected $fillable = ['roll_no', 'pr_no', 'name', 'ph_no', 'email', 'alumni_status', 'current_status'];
}
