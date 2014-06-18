<?php

class AdminController extends BaseController {

	protected $layout = "layouts.main";


	public function index() {

		  $this->layout->content = View::make('admin.admin_dashboard');
	}
}