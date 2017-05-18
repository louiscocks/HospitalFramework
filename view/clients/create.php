
<div class="container">
<h1 class="text-info">Create pati&euml;nt</h1>
	<form action="<?= URL ?>patient/createSave" method="post">

	  <div class="form-group">
	    <label class="text-success">Name</label><br>
		<input type="text" name="name"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Species</label><br>
		<input type="text" name="species"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Status</label><br>
		<input type="text" name="status"><br>
	  </div>

	    <input type="hidden" name="id">	
		<button type="submit" class="btn btn-info">Save</button>

	</form>
</div>
