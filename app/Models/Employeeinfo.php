<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'email',
        'phone',
        'dob',
        'address',
        'emergency_contact',
        'department_id',
        'employee_id',
        'designation',
        'joining_date',
        'work_location',
        'employment_type',
        'emirates_id',
        'passport',
        'work_permit',
        'certificates',
        'police_clearance',
        'medical_certificate',
    ];

    // Define relationships
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}