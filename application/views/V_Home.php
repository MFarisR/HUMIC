<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Human Centric</title>
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon Humic.png" />    <!-- INCLUDE BOOTSTRAP CSS HERE -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap-select.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-select.css">




<style type="text/css">
	table {
		text-align: center;
	}
</style>

<script type="text/javascript">
function sortPrioritas() {
 	var table, rows, switching, i, btw1, ttw1, btw2, ttw2,percent1,percent2, shouldSwitch;
	table = document.getElementById("tablePrioritas");
	switching = true;
  	/*Make a loop that will continue until
  	no switching has been done:*/
  	while (switching) {
    //start by saying: no switching is done:
		switching = false;
	    rows = table.rows;
	    /*Loop through all table rows (except the
	    first, which contains table headers):*/
	    for (i = 1; i < (rows.length - 1); i++) {
	      //start by saying there should be no switching:
	      	shouldSwitch = false;
	      /*Get the two elements you want to compare,
	      one from current row and one from the next:*/
	      	btw1 = rows[i].getElementsByTagName("TD")[1];
	      	ttw1 = rows[i].getElementsByTagName("TD")[2];
	      	btw2 = rows[i + 1].getElementsByTagName("TD")[1];
	      	ttw2 = rows[i + 1].getElementsByTagName("TD")[2];
	      	if (ttw1 !=0 && !(isNan(ttw1))) {
				percent1 = (Number(btw1.innerHTML) / Number(ttw1.innerHTML)); 
	      	} else {
	      		percent1 = 100;
	      	};

	      	if (ttw2 !=0  && !(isNan(ttw1))) {
				percent2 = (Number(btw2.innerHTML) / Number(ttw2.innerHTML)); 
	      	} else {
	      		percent2 = 100;
	      	};

	      //check if the two rows should switch place:
	      	if (percent1 > percent2) {
	        //if so, mark as a switch and break the loop:
	        shouldSwitch = true;
	        break;
	      }
	    }
	    if (shouldSwitch) {
	      /*If a switch has been marked, make the switch
	      and mark that a switch has been done:*/
	      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
	      switching = true;
	    }
  }
}
</script>

<head>
	<div class="navbar p-0">
		<div class="sticky-top container-fluid border-bottom" style="background-color: white;height: 100px">
			<div class="row align-items-end d-flex m-1 p-1" style="width: 100%">
				<div class="col-4 text-left align-self-center" style="padding-right: 60%">
					<img src="<?= base_url(); ?>assets/img/Logo Humic.png"  onclick="location.href='<?= base_url();?>Home'">
				</div>
			</div>
		</div>
	</div>
</head>

<body>
	<nav>
  		<div class="nav nav-tabs" id="nav-tab" role="tablist">
    		<a class="nav-item nav-link active" id="nav-indikator-tab" data-toggle="tab" href="#indikator" role="tab" aria-controls="nav-indikator" aria-selected="true">Indikator</a>
		    <a class="nav-item nav-link" id="nav-prioritas-tab" data-toggle="tab" href="#proprio" role="tab" aria-controls="nav-prioritas" aria-selected="false" onclick="sortPrioritas()">Progress dan Prioritas</a>
		    <a class="nav-item nav-link" id="nav-bukti-tab" data-toggle="tab" href="#bukti" role="tab" aria-controls="nav-bukti" aria-selected="false">Bukti Data</a>
		</div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
  		<div class="tab-pane fade show active" id="indikator" role="tabpanel" aria-labelledby="nav-indikator-tab">
  			<div class="h2 py-4 text-center">INDIKATOR KONTRAK MANAJEMEN</div>
	  		<table id="tableIndikator" class="table table-bordered d-flex justify-content-center mb-4 pb-4">
		  		<thead>
					<tr>
		      			<th class="align-middle" scope="col" rowspan="2">RESPONSIBILITY</th>
		      			<th class="align-middle" scope="col" rowspan="2">UNIT</th>
		      			<th scope="col" colspan="2">TW-1</th>
		      			<th scope="col" colspan="2">TW-2</th>
		      			<th scope="col" colspan="2">TW-3</th>
		      			<th scope="col" colspan="2">TW-4</th>
		      			<th class="align-middle" scope="col" rowspan="2">STRATEGI</th>
		      			<th class="align-middle" scope="col" rowspan="2">ACTION</th>
		    		</tr>
		    		<tr>
		    			<th scope="col">BOBOT</th>
		    			<th scope="col">TARGET</th>
		    			<th scope="col">BOBOT</th>
		    			<th scope="col">TARGET</th>
		    			<th scope="col">BOBOT</th>
		    			<th scope="col">TARGET</th>
		    			<th scope="col">BOBOT</th>
		    			<th scope="col">TARGET</th>
		    		</tr>
		    		<?php foreach ($indikator as $row){ ?>
                    <tr>
                        <td class="align-middle"><?=$row['responsibility']?></td>
                        <td class="align-middle"><?=$row['unit']?></td>
                        <td class="align-middle"><?=$row['btw1']?></td>
                        <td class="align-middle"><?=$row['ttw1']?></td>
                        <td class="align-middle"><?=$row['btw2']?></td>
                        <td class="align-middle"><?=$row['ttw2']?></td>
                        <td class="align-middle"><?=$row['btw3']?></td>
                        <td class="align-middle"><?=$row['ttw3']?></td>
                        <td class="align-middle"><?=$row['btw4']?></td>
                        <td class="align-middle"><?=$row['ttw4']?></td>
                        <td class="align-middle"><?=$row['strategi']?></td>
                        <td class="align-middle">
                            <button class="btn btn-primary btn-sm btn-edit w-100" data-toggle="modal" data-target="#UpdateModal<?= $row['no']; ?>">Edit</button><?php include "formEdit.php"; ?>
                        	<button class="btn btn-sm btn-danger action" data-toggle="modal" data-target="#DeleteModal<?= $row['no'];?>">Delete</button>
                        	<?php include "formDelete.php"; ?>
                        </td>
                    </tr>
                    <?php } ?>	
		  		</thead>
  			</table>
  		<!-- Button trigger modal -->
			<div class="d-flex justify-content-end fixed-bottom" style="padding-right: 2.9%;padding-bottom: 12px">
				<button type="button" class="btn btn-primary" style="width: 80px" data-toggle="modal" data-target="#AddModal">Add
				</button>
			</div>
  		</div>
  		<div class="tab-pane fade" id="proprio" role="tabpanel" aria-labelledby="nav-progress-tab">
  			<?php 
				$i=1;
				$month = date("n");
				$yearQuarter = ceil($month / 3);
				$ttw = 'ttw'.$yearQuarter;
				$btw = 'btw'.$yearQuarter; 
  			?>
  			<div class="h2 py-4 text-center">PROGRESS dan PRIORITAS TRIWULAN-<?=$yearQuarter?></div>
  			<table id="tablePrioritas" class="table d-flex justify-content-center mb-4 pb-4">
  				<thead>
	  				<tr>
			    		<th scope="col">Indikator</th> 
			    		<th scope="col">Bobot</th> 
			    		<th scope="col">Target</th>
			    		<th scope="col" style="width: 50%">Progress</th>
	  				</tr>
  					<?php foreach ($indikator as $row){ 
  						if ($row[$btw] != 0 && (is_numeric($row[$ttw]))) {
  							$percent = $row[$btw] / $row[$ttw] * 100;
  							if ($percent > 100) {
  							 	$percent = 100;
  							 }; 
  						} else {
  							$percent = 100;
  						}
  						
  						
  						?>
		                <tr>
		                    <td class="align-middle"><?=$row['responsibility']?></td>
		                    <td class="align-middle"><?=$row[$btw]?></td>
		                    <td class="align-middle"><?=$row[$ttw]?></td>
		                    <td class="align-middle">
			                    <div class="progress">
							  		<div class="progress-bar" role="progressbar" aria-valuenow="<?=$percent?>" aria-valuemin="0" aria-valuemax="100" style="width:<?=$percent?>%" data-toggle="tooltip" title="<?=$percent?>%">
							  		</div>
								</div>
							</td>
		                </tr>
		                <?php 
		                $i++;
		            	} ?>
                </thead>	
  			</table>
  		</div>
  		<div class="tab-pane fade" id="bukti" role="tabpanel" aria-labelledby="nav-bukti-tab">
  			<div class="h2 py-4 text-center">BUKTI DATA</div>
  			<table id="tableBukti" class="table table-bordered d-flex justify-content-center mb-4 pb-4">
  				<thead>
	  				<tr>
	  					<th scope="col">Bukti Data</th>
			    		<th scope="col">Link</th> 
			    		<th scope="col">Action</th> 
	  				</tr>
	  				<?php foreach ($buktidata as $row){ ?>
	                <tr>
	                    <td class="align-middle"><?=$row['bukti']?></td>
	                    <td class="align-middle"><a href="<?=$row['link']?>" target="_blank">Link</td>
	                    <td class="align-middle" style="width: 150px">
	                    	<div class="row w-100 justify-content-center">
	                    		&nbsp
		                        <button class="btn btn-primary btn-sm btn-edit" data-toggle="modal" data-target="#UpdateModalL<?= $row['no']; ?>">Edit</button><?php include "formEditL.php"; ?>
		                        &nbsp&nbsp
		                    	<button class="btn btn-sm btn-danger action" data-toggle="modal" data-target="#DeleteModalL<?= $row['no'];?>">Delete</button>
	                    		<?php include "formDeleteL.php"; ?>
	                    	</div>
	                    </td>
	                </tr>
	                <?php } ?>
                </thead>	
  			</table>
  			<div class="col-1 d-flex justify-content-center fixed-bottom" style="margin-left: 61.1%;margin-bottom: 26.5%">
				<button type="button" class="btn btn-primary" style="width: 103px" data-toggle="modal" data-target="#AddModalL">Add
				</button>
			</div>
  		</div>
	</div>

	<!-- Modal -->
	<form action="<?= site_url()?>Home/save" method="POST"> 
		<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="AddModalLabel">Tambah Data</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
	      		</div>
	      		<div class="modal-body form">
	        		
	    				<div class="form-group">
	      					<label>Responsibility : </label>
	      					<input type="text" name="responsibility" class="form-control" placeholder="Responsibility">
	    				</div>
				    	<div class="form-group">
				      		<label>Unit : </label>
				      		<input type="text" name="unit" class="form-control" placeholder="Unit">
				    	</div>
				    	<div class="row border-top pt-4">
				    		<div class="col border-right">
					    		<label class="h5">TW-1</label>
					    		<div class="form-group">
					      			<label>Bobot : </label>
					      			<input type="text" name="btw1" class="form-control" placeholder="Bobot TW-1">
					    		</div>
					    		<div class="form-group">
					      			<label>Target : </label>
					      			<input type="text" name="ttw1" class="form-control" placeholder="Target TW-1">
					    		</div>
					    	</div>
					    	<div class="col border-right">
					    		<label class="h5">TW-2</label>
					    		<div class="form-group">
					      			<label>Bobot : </label>
					      			<input type="text" name="btw2" class="form-control" placeholder="Bobot TW-2">
					    		</div>
					    		<div class="form-group">
					      			<label>Target : </label>
					      			<input type="text" name="ttw2" class="form-control" placeholder="Target TW-2">
					    		</div>
					    	</div>
					    	<div class="col border-right">
					    		<label class="h5">TW-3</label>
					    		<div class="form-group">
					      			<label>Bobot : </label>
					      			<input type="text" name="btw3" class="form-control" placeholder="Bobot TW-3">
					    		</div>
					    		<div class="form-group">
					      			<label>Target : </label>
					      			<input type="text" name="ttw3" class="form-control" placeholder="Target TW-3">
					    		</div>
					    	</div>
					    	<div class="col">
					    		<label class="h5">TW-4</label>
					    		<div class="form-group">
					      			<label>Bobot : </label>
					      			<input type="text" name="btw4" class="form-control" placeholder="Bobot TW-4">
					    		</div>
					    		<div class="form-group">
					      			<label>Target : </label>
					      			<input type="text" name="ttw4" class="form-control" placeholder="Target TW-4">
					    		</div>
			    			</div>
		    			</div>
		    			<div class="form-group">
		    				<label>Strategi : </label>
	      					<textarea type="text" name="strategi" class="form-control" placeholder="Strategi" style="height: 110px"></textarea>
		    			</div>	
	      			</div>
	      			<div class="modal-footer">
		        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        		<button type="submit" class="btn btn-primary">Add</button>
	      			</div>
	    		</div>
	  		</div>
		</div>
	</form>

	<form action="<?= site_url()?>Home/saveL" method="POST"> 
		<div class="modal fade" id="AddModalL" tabindex="-1" role="dialog" aria-labelledby="AddModalLabelL" aria-hidden="true">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="AddModalLabelL">Tambah Data</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
	      		</div>
	      		<div class="modal-body form">
	        		
	    				<div class="form-group">
	      					<label>Bukti Data : </label>
	      					<input type="text" name="bukti" class="form-control" placeholder="Bukti Data">
	    				</div>
				    	<div class="form-group">
				      		<label>Link : </label>
				      		<input type="text" name="link" class="form-control" placeholder="ex. https://www.google.com">
				    	</div>	
	      			</div>
	      			<div class="modal-footer">
		        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        		<button type="submit" class="btn btn-primary">Add</button>
	      			</div>
	    		</div>
	  		</div>
		</div>
	</form>
</body>

<!-- Page Content -->