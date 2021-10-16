<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit a data row with value id <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<div class="form-group">
        			<input type="text" class="form-control" name="title" value="" placeholder="Title">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="text" value="" placeholder="Text">
	        	</div>
	        	<div class="form-group">
	        		<input type="text" class="form-control" name="category" value="" placeholder="Category">
	        	</div>
            <div class="form-group">
	        		<input type="text" class="form-control" name="image" value="<?php echo htmlspecialchars($arr[$var])?>" placeholder="Image">
	        	</div>
	      </div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Refresh</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete the data with value id =  <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Delete</button>
    	</form>
      </div>
    </div>
  </div>
</div>
