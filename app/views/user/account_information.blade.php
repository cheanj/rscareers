<div class="col-md-8 no-background">

<h2>ACCOUNT INFORMATION</h2>
<table class="table">
<thead>
		<tr><td>Account Created Date</td><td>{{ $users->created_at }}</td></tr>
		<tr><td>Last Date Updated</td><td>{{ $users->updated_at }}</td></tr>
		<tr><td>Applicant ID</td><td>{{ $users->id }}</td></tr>
		<tr><td>Email Address</td><td>{{ $users->email }}</td></tr>
		<tr><td>Username</td><td>{{ $users->username }}</td></tr>
		<tr><td>Password</td><td></td></tr>
	</thead>
	<tbody>
</table>

<?php 
 $createdAt = $users->created_at;
//echo date("F d, y g:i a", $createdAt); ?>
<h2>POSITION APPLIED</h2>
<table class="table">
<thead>
		<tr><td>Salary Desired</td><td></td></tr>
		<tr><td>Job Field</td><td></td></tr>
		<tr><td>Position</td><td></td></tr>
		<tr><td>Position Applied</td><td></td></tr>
		<tr><td>Username</td><td></td></tr>
		<tr><td>Password</td><td></td></tr>
	</thead>
	<tbody>
</table>
</div>

