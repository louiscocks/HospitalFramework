
<div class="container">
<h1 class="text-info">Edit pati&euml;nt</h1>
	<form action="<?= URL ?>patient/updateSave" method="post">

	  <div class="form-group">
	    <label class="text-success">Name</label><br>
		<input type="text" name="name" value="<?=$patients['name'];?>"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Species</label><br>
		<input type="text" name="species" value="<?=$patients['species'];?>"><br>
	  </div>

	  <div class="form-group">
		<label class="text-success">Status</label><br>
		<input type="text" name="status" value="<?=$patients['status'];?>"><br>
	  </div>

	    <input type="hidden" name="id" value="<?= $patients['id'];?>">	
		<button type="submit" class="btn btn-info">Save</button>

	</form>
</div>