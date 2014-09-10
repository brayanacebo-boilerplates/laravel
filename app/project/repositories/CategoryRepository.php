<?php 

namespace project\repositories;

use project\entities\Category;
use project\entities\Candidate;

class CategoryRepository {

	public function find($id){
		return Category::find($id);
	}

}