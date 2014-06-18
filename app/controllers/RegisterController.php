<?php

class RegisterController extends BaseController {
 
  /**
   * User Repository
   */
  protected $user;
 
  /**
   * Inject the User Repository
   */
  public function __construct(User $user)
  {
    $this->user = $user;
  }
 
  public function index()
  {
    return View::make('register.index');
  }
 
  public function store()
  {
    
    $rules = array(
      'firstname'       => 'required',
      'middlename'      => 'required',
      'lastname'        => 'required',
      'username'        => 'required',
      'email'           => 'required|email',
      'password'        => 'required'
    );

    $validation = Validator::make(Input::all(), $rules);

    if($validation->fails()){     
      return Redirect::to('register.index')
        ->withErrors($validation)
        ->withInput(Input::except('password'));
    }else {      
      $user = new User;
      $user->firstname  = Input::get('firstname');
      $user->middlename  = Input::get('middlename');
      $user->lastname  = Input::get('lastname');    
      $user->username  = Input::get('username');    
      $user->email  = Input::get('email');  
      $user->password = Hash::make(Input::get('password')); 
      $user->save();
      $logged_user = $user->username;
      Session::put('user_log', $logged_user);
      Session::flash('message', 'Successfull created user');
      return Redirect::to('jobs');
    }
  }

  public function login()
  {
    echo 'test';
  }
     
}