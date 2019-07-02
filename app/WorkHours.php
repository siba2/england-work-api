<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkHours extends Model
{
    protected $table = 'work_hours';
    protected $fillable = ['hours', 'employee_id'];

    public function getEmployee()
    {
        return $this->belongsTo('App\Employees');
    }
}
