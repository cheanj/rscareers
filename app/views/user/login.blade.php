
<div class="col-sm-7 col-md-7">
<h2>LOGIN</h2> 
	@if(Session::has('message'))
		<div class="alert alert-danger">{{ Session::get('message') }}</div>
	@endif

{{ Form::open(array('url' => 'signin', 'id' => 'loginForm')) }}
 <div class="form-group required">
	  {{ Form::label('username', ' * Username') }}
	  {{ Form::text('username', null, ['class' => 'form-control']) }}
  </div>
 
 <div class="form-group required">
  	{{ Form::label('password', '* Password') }}
 	{{ Form::password('password', array('class'=>'form-control')) }}
 </div>
  <p>{{ HTML::link('user/forgot', 'Forgot your username/password?') }}</p>
  <p>{{ Form::submit('Submit', array('class'=>'btn btn-danger')) }}</p>
 
{{ Form::close() }}

</div>