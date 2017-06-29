<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = array('id', 'name', 'age', 'gender', 'company');
	protected $table = 'employee';
	Protected $primaryKey = "id";
	public $timestamps = false;
}