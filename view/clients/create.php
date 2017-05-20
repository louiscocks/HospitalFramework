<div style="background-color: #ccccff;">
<div class="container-fluid">

    <div class="navbar-header navbar-right">

      <a class="navbar-brand" href="index">
      <span class="glyphicon glyphicon-home"> FRAMEWORK</span>
      </a>

    </div>
    
    <ul class="nav navbar-nav">
      <li><a href="patient">Pati&euml;nt</a></li>
      <li><a href="client">Clients</a></li>
      <li><a href="species">Species</a></li>
    </ul>

</div>
</div>

<div class="container-fluid" style="background-color: #e7f5fe;">
<h1 class="text-info">Create Client</h1>
	<form action="<?= URL ?>client/createSave" method="post">

	  <div class="form-group">
	    <label class="text-success">Name</label><br>
		<input type="text" name="client_firstname" placeholder="First Name"><br>
		<br>
		<input type="text" name="client_lastname" placeholder="Last Name"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Phone Number</label><br>
		<input type="text" name="client_phonenumber" placeholder="0600000000"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">E-mail</label><br>
		<input type="text" name="client_email" placeholder="johndoe@email.com"><br>
	  </div>

	    <input type="hidden" name="client_id">	
		<button type="submit" class="btn btn-info">Save</button>

	</form>
</div>
