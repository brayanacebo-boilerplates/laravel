<?php

namespace project\entities;

class Candidate extends \Eloquent {
	
	protected $fillable = [];

	public function category() 
    { 
        return $this->belongsTo('Category', 'category_id'); 
    }

}