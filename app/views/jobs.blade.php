

	   <div class="col-sm-9 col-md-9">
  	   <h2>Welcome!</h2>
    		<div class="form-group">	 
          		<label for="job_fields" class="col-sm-4">Job Fields</label>        
          		<input id="job_fields" type="hidden" style="width:200px" name="job_fields" data-placeholder="Select Job Fields"/> 
        </div>
        </div>
       <div class="col-sm-3 col-md-3 logout">
       	<p>
        <ul class="nav jobs-buttons">     
        @if(Session::has('message'))
            {{ Session::get('message') }}     
            @if(Auth::check())      
              <li>{{ HTML::link('logout', 'Logout', array('class' => 'btn btn-default')) }}</li>
              @else
              <li>{{ HTML::link('logout', 'Logout', array('class' => 'btn btn-default')) }}</li>
            @endif        
        @else
          <li>{{ HTML::link('user/login', 'Login', array('class' => 'btn btn-default')) }}</li>  
          <li>{{ HTML::link('user/register', 'Register', array('class' => 'btn btn-default')) }}</li>                  
        @endif       
        </ul>
       
       </div> 
       <div class="clear"></div>  
        <hr> 
        <div class="row">
          <div class="col-md-7">
              <h4>Job Opportunities</h4>
          </div>
          <div class="col-md-5">
            @if(Session::has('message'))
              <div class="form-group">       
                  <a href="user/myaccount" class="btn btn-default" id="subs">Apply Online</a>            
                  <a href="user/register" class="btn btn-default" id="subs">View Application</a>
              </div>
            @endif
          </div>
        </div>
     <div class="clear"></div>


