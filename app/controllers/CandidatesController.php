<?php

use project\repositories\CategoryRepository;
use project\entities\Category;
use project\entities\Candidate;

class CandidatesController extends BaseController {

	protected $categoryRepository;

	public function __construct(CategoryRepository $categoryRepository)
	{
		$this->categoryRepository = $categoryRepository;
	}

	public function category($slug, $id)
	{

		$category = Category::find($id)->candidates;

		// $category = $this->categoryRepository->find($id);

		// $x = $category->candidates;

		// $queries = DB::getQueryLog();
		// $last_query = end($queries);

		echo '<pre>';
		echo var_dump($category);
		die;

		return View::make('candidates/category', compact('category'));
	}

}
