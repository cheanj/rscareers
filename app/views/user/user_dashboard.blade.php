<ul class="nav nav-tabs info-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Application Information</a></li>
  <li><a href="#profile" data-toggle="tab">Personal Information</a></li>
  <li><a href="#messages" data-toggle="tab">Educational Background</a></li>
  <li><a href="#settings" data-toggle="tab">Employment History</a></li>
   <li><a href="#settings" data-toggle="tab">Work Interest</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">@include('user.account_information')</div>
  <div class="tab-pane" id="profile">@include('user.personal_information')</div>
  <div class="tab-pane" id="messages">...</div>
  <div class="tab-pane" id="settings">...</div>
</div>