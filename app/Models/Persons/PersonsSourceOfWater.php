<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsSourceOfWater extends Model
{
    protected $table = 'persons_water_source';
	protected $fillable = [
		'id', 'waterSourceDesc', 'othersSpecify'
	];
}
