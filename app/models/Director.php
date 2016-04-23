<?php

namespace Frozen\models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model {

	protected $with = array('films');

	public static $rules = array
	(
		'first_name' => 'required',
		'last_name' => 'required',
		'salary' => 'required',
	);

	
}
