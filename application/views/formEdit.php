<form action="<?= site_url()?>Home/update" method="POST"> 
	<div class="modal fade" id="UpdateModal<?= $row['no']; ?>" tabindex="-1" role="dialog" aria-labelledby="UpdateModalLabel" aria-hidden="true">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="UpdateModalLabel">Update Data</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
      		</div>
      		<div class="modal-body form">
        		
    				<div class="form-group">
      					<label>Responsibility : </label>
      					<input type="text" name="responsibility" class="form-control" placeholder="Responsibility" value="<?= $row['responsibility']?>">
    				</div>
			    	<div class="form-group">
			      		<label>Unit : </label>
			      		<input type="text" name="unit" class="form-control" placeholder="Unit" value="<?= $row['unit']?>">
			    	</div>
			    	<div class="row border-top pt-4">
			    		<div class="col border-right">
				    		<label class="h5">TW-1</label>
				    		<div class="form-group">
				      			<label>Bobot : </label>
				      			<input type="text" name="btw1" class="form-control" placeholder="Bobot TW-1" value="<?= $row['btw1']?>">
				    		</div>
				    		<div class="form-group">
				      			<label>Target : </label>
				      			<input type="text" name="ttw1" class="form-control" placeholder="Target TW-1" value="<?= $row['ttw1']?>">
				    		</div>
				    	</div>
				    	<div class="col border-right">
				    		<label class="h5">TW-2</label>
				    		<div class="form-group">
				      			<label>Bobot : </label>
				      			<input type="text" name="btw2" class="form-control" placeholder="Bobot TW-2" value="<?= $row['btw2']?>">
				    		</div>
				    		<div class="form-group">
				      			<label>Target : </label>
				      			<input type="text" name="ttw2" class="form-control" placeholder="Target TW-2" value="<?= $row['ttw2']?>">
				    		</div>
				    	</div>
				    	<div class="col border-right">
				    		<label class="h5">TW-3</label>
				    		<div class="form-group">
				      			<label>Bobot : </label>
				      			<input type="text" name="btw3" class="form-control" placeholder="Bobot TW-3" value="<?= $row['btw3']?>">
				    		</div>
				    		<div class="form-group">
				      			<label>Target : </label>
				      			<input type="text" name="ttw3" class="form-control" placeholder="Target TW-3" value="<?= $row['ttw3']?>">
				    		</div>
				    	</div>
				    	<div class="col">
				    		<label class="h5">TW-4</label>
				    		<div class="form-group">
				      			<label>Bobot : </label>
				      			<input type="text" name="btw4" class="form-control" placeholder="Bobot TW-4" value="<?= $row['btw4']?>">
				    		</div>
				    		<div class="form-group">
				      			<label>Target : </label>
				      			<input type="text" name="ttw4" class="form-control" placeholder="Target TW-4" value="<?= $row['ttw4']?>">
				    		</div>
		    			</div>
	    			</div>
	    			<div class="form-group">
		    				<label>Strategi : </label>
	      					<textarea type="text" name="strategi" class="form-control" placeholder="Strategi" style="height: 110px"><?= $row['strategi']?></textarea>
		    		</div>		
      			</div>
      			<div class="modal-footer">
      				<input type="hidden" name="no" value="<?= $row['no']?>">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        		<button type="submit" class="btn btn-primary">Save</button>
      			</div>
    		</div>
  		</div>
	</div>
</form>