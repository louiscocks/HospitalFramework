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
<h1 class="text-info">Add pati&euml;nt</h1>
	<form action="<?= URL ?>patient/createSave" method="post">

	  <div class="form-group">
	    <label class="text-success">Full Name</label><br>
		<input type="text" name="patient_name"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Species</label><br>
		<input type="text" name="species_description"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Status</label><br>
		<input type="text" name="patient_status"><br>
	  </div>

	    <input type="hidden" name="patient_id">	
		<button type="submit" class="btn btn-info"> 
		<span class="glyphicon glyphicon-user"></span> Add
		</button>

	</form>
</div>
