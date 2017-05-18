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

<div style="background-color: #e7f5fe;">
<div class="container-fluid">
	<table class="table table-condensed">
	  <thead>
	    <tr class="">
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
        <th>Client</th>
		</tr>
	  </thead>
	  </tbody>
	    <tr>
	    	<?php foreach ($patients as $patient){ ?>
	    	<tr class="default"><td> <a href="patient/edit/<?=$patient['patient_id']?>"><?=$patient["patient_name"];?></a></td>
	    		<td> <?=$patient["species_description"];?></td>
	    		<td> <?=$patient["patient_status"];?></td>
          <td> <?=$patient["client_firstname"];?><?=$patient["client_lastname"];?></td>
	    		<td> <a href="patient/delete/<?=$patient['patient_id']?>">Delete</a></td>
	    	</tr>
	    	<?php } ?>
	    </tr>
	</table>

</div>
</div><br>

<div class="container-fluid">
	<a href="patient/create" class="btn btn-danger">
	<span class="glyphicon glyphicon-cloud-upload"></span> Add
	</a>
</div>

<div class="container-fluid"><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/PROJECTS/framework/image/Amritdham-About-us.jpg" alt="hp1" width="100%" height="10%">
      </div>

      <div class="item">
        <img src="/PROJECTS/framework/image/Automating-your-Hospital’s-HR.jpg" alt="hp2" width="100%" height="10%">
      </div>
    
      <div class="item">
        <img src="/PROJECTS/framework/image/banner.jpg" alt="hp3" width="100%" height="10%">
      </div>

      <div class="item">
        <img src="/PROJECTS/framework/image/banner-of-hospital.jpg" alt="hp4" width="100%" height="10%">
      </div>

      <div class="item">
        <img src="/PROJECTS/framework/image/hospital.jpg" alt="hp5" width="100%" height="10%">
      </div>
    
      <div class="item">
        <img src="/PROJECTS/framework/image/sani.jpg" alt="hp6" width="100%" height="10%">
      </div>

      <div class="item">
        <img src="/PROJECTS/framework/image/spe.jpg" alt="hp7" width="100%" height="10%">
      </div>

    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div><br>