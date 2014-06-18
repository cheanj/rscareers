
    <h3 class="page-header">Welcome!</h3>          
    <h2>REGISTRATION</h2>
    <div class="col-sm-6 col-md-6">
{{ Form::open(array('route' => 'user.store', 'id' => 'regform')) }}
  <div class="form-group required">
    {{ Form::label('firstname', '* First Name') }}
    {{ Form::input('text', 'firstname', null, ['class' => 'form-control', 'id' => 'firstname', 'data-required' => 'true']) }}
  </div>

  <div class="form-group">
    {{ Form::label('middlename', 'Middle Name') }}
    {{ Form::input('text', 'middlename', null, ['class' => 'form-control', 'id' => "middlename"]) }}
  </div>

   <div class="form-group">
    {{ Form::label('lastname', 'Last Name') }}
    {{ Form::input('text', 'lastname', null, ['class' => 'form-control', 'id' => 'lastname']) }}
  </div>

  <div class="form-group">
    {{ Form::label('exampleInputEmail1', 'Email Address') }}
    {{ Form::input('email', 'email', null, ['class' => 'form-control', 'id' => 'email']) }}
  </div>

  <div class="form-group">
    {{ Form::label('username', 'Username') }}
    {{ Form::input('text', 'username', null, ['class' => 'form-control']) }}
  </div>

   <div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class'=>'form-control')) }}
  </div>

  <div class="form-group">
    {{ Form::label('confirm_password', 'Confirm Password') }}
    {{ Form::password('confirm_password', array('class'=>'form-control')) }}
  </div>

  <button type="submit" class="btn btn-success" id="subs">Submit</button>
  <button type="submit" class="btn btn-default" id="subs">Cancel</button>
  <p></p>
  <div class="clear"></div>
  </div>
{{ Form::close() }}



