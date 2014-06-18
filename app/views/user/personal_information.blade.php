<div class="personal-info">
	<h2>PERSONAL INFORMATION</h2>
	{{ Form::open(array('id' => 'regform', 'class' => 'form-inline')) }}
	<div class="form-group required">
		{{ Form::label('firstname', '* First Name') }}
		{{ Form::label('middlename', '* Middle Name') }}
		{{ Form::label('lastname', '* Last Name') }}
	</div>
	<div class="form-group required unames">
		{{ Form::label('firstname', '* FullName') }}
	    {{ Form::input('text', 'firstname', null, ['class' => 'form-control', 'id' => 'firstname', 'data-required' => 'true']) }}	   
	    {{ Form::input('text', 'firstname', null, ['class' => 'form-control', 'id' => 'firstname', 'data-required' => 'true']) }}	   
	    {{ Form::input('text', 'firstname', null, ['class' => 'form-control', 'id' => 'firstname', 'data-required' => 'true']) }}
	</div>
	<div class="form-group required">
		{{ Form::label('dob', '* Date of Birth') }}
		{{ Form::input('text', 'dob', null, ['class' => 'form-control', 'id' => 'firstname', 'data-required' => 'true']) }}	   
	</div>
	<div class="form-group">
		{{ Form::label('pob', '* Place of Birth') }}
		{{ Form::input('text', 'pob', null, ['class' => 'form-control', 'id' => 'firstname', 'data-required' => 'true']) }}	   
	</div>
	<div class="form-group age">
		{{ Form::label('age', '* Age') }}
		{{ Form::input('text', 'age', null, ['class' => 'form-control', 'id' => 'firstname', 'data-required' => 'true']) }}	   
	</div>
	<div class="form-group age">
		{{ Form::label('email', '* Email Address') }}
		{{ Form::input('text', 'email', null, ['class' => 'form-control', 'id' => 'firstname', 'data-required' => 'true']) }}	   
	</div>
</div>