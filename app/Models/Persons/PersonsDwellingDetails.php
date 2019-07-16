<?php

namespace App\Models\Persons;

use Illuminate\Database\Eloquent\Model;

class PersonsDwellingDetails extends Model
{
    protected $table = 'persons_dwelling_details';
	protected $fillable = [
		'id', 'dwellingPlaceDesc', 'othersSpecify'
	];
}
