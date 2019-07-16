<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsDirection extends Model
{
    protected $table = 'persons_direction';
	protected $fillable = [
		'id', 'directionAddress', 'countryName'
	];
}
