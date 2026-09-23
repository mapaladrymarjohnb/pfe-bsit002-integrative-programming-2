<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'department_id',
        'first_name',
        'last_name',
        'email',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
