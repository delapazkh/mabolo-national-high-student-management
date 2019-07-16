<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsToiletType extends Model
{
    protected $table = 'persons_toilet_type';
	protected $fillable = [
		'id', 'toiletTypeDescription', 'othersSpecify'
	];
}
