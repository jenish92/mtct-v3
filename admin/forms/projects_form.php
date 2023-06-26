<fieldset>
    

    <div class="form-group">
        <label for="title">Title *</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($edit ? $projects['title'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Enter the Page Title here.." class="form-control" required="required" id="title">
    </div> 
	
	<div class="form-group">
        <label for="description">Description *</label>
		<textarea name="description" placeholder="Enter the Project Description here..." class="form-control" id="description"><?php echo htmlspecialchars(($edit) ? $projects['description'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
	
	<div class="form-group">
        <label for="page_url">More URL *</label>
          <input type="text" name="more_link" value="<?php echo htmlspecialchars($edit ? $projects['more_link'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Ex : home/home.php" class="form-control" required="required" id = "more_link" >
    </div> 
	
	<div class="form-group">
        <label for="page_url">Image Link *</label>
          <input type="text" name="img_link" value="<?php echo htmlspecialchars($edit ? $projects['img_link'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Ex : home/home.php" class="form-control" required="required" id = "img_link" >
    </div>
	
	
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
