<?php

class JobController extends BaseController {

	protected $layout = "layouts.main";


	public function jobs() {

		  $this->layout->content = View::make('jobs');
	}
}