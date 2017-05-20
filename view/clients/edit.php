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
<h1 class="text-info">Edit Client</h1>
	<form action="<?= URL ?>client/updateSave" method="post">

	  <div class="form-group">
	    <label class="text-success">Name</label><br>
		<input type="text" name="client_firstname" value="<?=$clients['client_firstname'];?>"><br>
		<br>
		<input type="text" name="client_lastname" value="<?=$clients['client_lastname'];?>"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Phone Number</label><br>
		<input type="text" name="client_phonenumber" value="<?=$clients['client_phonenumber'];?>"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">E-mail</label><br>
		<input type="text" name="client_email" value="<?=$clients['client_email'];?>"><br>
	  </div>

	    <input type="hidden" name="client_id" value="<?= $clients['client_id'];?>">	
		<button type="submit" class="btn btn-info">Save</button>

	</form>
</div>