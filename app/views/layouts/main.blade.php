<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rebisco Careers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	 	{{ HTML::style('assets/css/bootstrap.min.css') }}
    	{{ HTML::style('assets/css/styles.css')}}
    	{{ HTML::style('assets/css/select2.css')}}    
    	{{ HTML::style('assets/css/small-device.css')}}  	
</head>
<body>
<div class="container-fluid career">
	<div class="page-wrapper">			
		<h2 class="page-header">CAREEER OPPORTUNITIES WITH REBISCO</h2>          
			<div class="content-wrapper">				
			    <div class="col-sm-4 col-md-3 sidebar">
			      <ul class="nav nav-sidebar">
			      	<h2>Home Page</h2>
			        <li class="active"><a href="#">CAREERS</a></li>
			        	<?php
					    	if (Request::is('user/*'))
							{ 
						?>
						     <li><a href="{{ URL::to( 'jobs') }}">JOBS</a></li>
						<?php 
							}else{ ?>
							<li><a href="jobs">JOB Opportunities</a></li>
						
						<?php } ?>	 			        
			        <li><a href="faq">FAQ</a></li>
			        <li><a href="#">RECRUITMENT PROCESS</a></li>
			      </ul>			      
			    </div>
			    <div class="col-sm-9 col-md-9 content">
					{{ $content }}
				</div>
			</div>
	</div>
<div class="clear"></div>
	{{ HTML::script('assets/js/jquery.js') }}
	{{ HTML::script('assets/js/jquery-1.7.1.min.js') }}
	{{ HTML::script('assets/js/bootstrap.js') }}
	{{ HTML::script('assets/js/jquery.validate.min.js') }}
	{{ HTML::script('assets/js/validate.js') }}
	{{ HTML::script('assets/js/select2.js') }}
<div class="container">
    @yield('content')
    <hr>
    <footer>
    <p>&copy; Rebisco Careers 2014</p>
    </footer>
</div> <!-- /container -->
