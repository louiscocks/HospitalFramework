<div style="background-color: #ccccff;">
<div class="container-fluid">

    <div class="navbar-header navbar-right">

      <a class="navbar-brand" href="index">
      <span class="glyphicon glyphicon-home"> HOME</span>
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
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone Number</th>
				<th>E-mail</th>
		</tr>
	  </thead>
	  </tbody>
	    <tr>
	    	<?php foreach ($clients as $client){ ?>
	    	<tr class="default"><td> <a href="client/edit/<?=$client['client_id']?>"><?=$client["client_firstname"];?></a></td>
	    		<td> <?=$client["client_lastname"];?></td>
	    		<td> <?=$client["client_phonenumber"];?></td>
	    		<td> <?=$client["client_email"];?></td>
	    		<td> <a href="client/delete/<?=$client['client_id']?>">Delete</a></td>
	    	</tr>
	    	<?php } ?>
	    </tr>
	</table>

</div>
</div><br>

<div class="container-fluid">
	<a href="client/create" class="btn btn-danger">
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
        <img src="/PROJECTS/hospital-php-master/image/Amritdham-About-us.jpg" alt="hp1" width="100%" height="10%">
      </div>

      <div class="item">
        <img src="/PROJECTS/hospital-php-master/image/Automating-your-Hospital’s-HR.jpg" alt="hp2" width="100%" height="10%">
      </div>
    
      <div class="item">
        <img src="/PROJECTS/hospital-php-master/image/banner.jpg" alt="hp3" width="100%" height="10%">
      </div>

      <div class="item">
        <img src="/PROJECTS/hospital-php-master/image/banner-of-hospital.jpg" alt="hp4" width="100%" height="10%">
      </div>

      <div class="item">
        <img src="/PROJECTS/hospital-php-master/image/hospital.jpg" alt="hp5" width="100%" height="10%">
      </div>
    
      <div class="item">
        <img src="/PROJECTS/hospital-php-master/image/sani.jpg" alt="hp6" width="100%" height="10%">
      </div>

      <div class="item">
        <img src="/PROJECTS/hospital-php-master/image/spe.jpg" alt="hp7" width="100%" height="10%">
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