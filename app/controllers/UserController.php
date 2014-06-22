<?php

class UserController extends BaseController {
 
  /**
   * User Repository
   */
  protected $user;
 
  /**
   * Inject the User Repository
   */
  protected $layout = "layouts.main";

  public function __construct(User $user)
  {
    $this->user = $user;
  }
 
  public function register()
  {
    $this->layout->content = View::make('user.register');
  }
 
  public function store()
  {
    $input = Input::all();
    $rules = array(
      'firstname'       => 'required',
      'middlename'      => 'required',
      'lastname'        => 'required',
      'username'        => 'required|unique:users',
      'email'           => 'required|email|unique',
      'password'        => 'required'
    );

    $validation = Validator::make(Input::all(), $rules);

    if($validation->fails()){     
      return Redirect::to('user.index')
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
      $id = $user->id;         

      $logged_user = $user->$id;
      $msg = 'Welcome' .' ' .$user->firstname;
      if($user->save()) {
        Session::put('user_log', $logged_user);
        //Session::flash('message', 'Successfull created user');
        return  $this->layout->content = Redirect::to('jobs')->with('message', $msg);
      }
    }
  }

  public function login()
  {
    $this->layout->content = View::make('user.login');
  }
  
  public function signin()
  {            
    if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
        if(Auth::user()->account_type < 10){
          $msg = 'Welcome' .' ' . Auth::user()->firstname;
          return Redirect::to('jobs')->with('message', $msg);
        }else {
          return Redirect::to('admin_dashboard')->with('message', 'aldfjdlfjl');
          
        }
        
    } else {
      return Redirect::to('user/login')
        ->with('message', 'Your username/password combination was incorrect')
        ->withInput();
    }
  
  }

  public function logout()
  {
    Auth::logout(); // log the user out of our application
    return Redirect::to('user/login'); // redirect the user to the login screen
  
  }

  public function profile(){
    $this->layout->content = View::make('user.profile');
  }


  public function myaccount() {

    $id = Auth::user()->id;
    $users = User::find($id);   
    $this->layout->content = View::make('user.user_dashboard')
      ->with('users', $users);

  }

  public function forgotPassword() {
    $this->layout->content = View::make('user.forgot');
  }

}