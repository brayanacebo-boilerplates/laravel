<?php

namespace project\entities;

class Category extends \Eloquent {
	
	protected $fillable = [];

	public function candidates() 
	{ 
		return $this->hasMany('Candidate'); 
	}

}