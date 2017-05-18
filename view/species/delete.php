
<div class="container">
<h1 class="text-info">Delete pati&euml;nt</h1>
	<form action="delete" method="post">

	  <div class="form-group">
	    <label class="text-success">Name</label><br>
		<input type="text" name="name" value="<?=$patients['id'];?>"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Species</label><br>
		<input type="text" name="species"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Status</label><br>
		<input type="text" name="status"><br>
	  </div>

	    <input type="hidden" name="id" value="<?= $patients['id'];?>">	
		<input type="submit" class="btn btn-info" name="confirmed" value="Yes">
		<input type="submit" class="btn btn-info" name="canceled" value="No">

	</form>
</div>
