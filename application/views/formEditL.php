<form action="<?= site_url()?>Home/updateL" method="POST"> 
	<div class="modal fade" id="UpdateModalL<?= $row['no']; ?>" tabindex="-1" role="dialog" aria-labelledby="UpdateModalLabelL" aria-hidden="true">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="UpdateModalLabelL">Update Data</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
      		</div>
      		<div class="modal-body form">
        		
    				<div class="form-group">
      					<label>Bukti Data : </label>
      					<input type="text" name="bukti" class="form-control" placeholder="Bukti Data" value="<?= $row['bukti']?>">
    				</div>
			    	<div class="form-group">
			      		<label>Link : </label>
			      		<input type="text" name="link" class="form-control" placeholder="ex. https://www.google.com" value="<?= $row['link']?>">
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