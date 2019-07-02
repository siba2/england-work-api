<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $fillable = ['name', 'surname'];

    public function workHours()
    {
        return $this->hasMany('App\WorkHours');
    }
}
