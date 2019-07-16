<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsSchooledData extends Model
{
    protected $table = 'persons_schooled_data';
	protected $fillable = [
		'id', 'SchooledEnrolled', 'SchoolDate', 'LRN', 'StudentStatus'
	];
}
