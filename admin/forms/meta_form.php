<fieldset>
    <div class="form-group">
        <label for="page_url">URL *</label>
          <input type="text" name="page_url" value="<?php echo htmlspecialchars($edit ? $pages['page_url'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Ex : home/home.php" class="form-control" required="required" id = "page_url" >
    </div> 

    <div class="form-group">
        <label for="meta_title">Title *</label>
        <input type="text" name="meta_title" value="<?php echo htmlspecialchars($edit ? $pages['meta_title'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Enter the Page Title here.." class="form-control" required="required" id="meta_title">
    </div> 
	
	<div class="form-group">
        <label for="meta_description">Description *</label>
		<textarea name="meta_description" placeholder="Enter the Page Description here..." class="form-control" id="meta_description"><?php echo htmlspecialchars(($edit) ? $pages['meta_description'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
	
	<div class="form-group">
        <label for="meta_keywords">Keywords *</label>
		<textarea name="meta_keywords" placeholder="Enter the keywords seperated by comma ','" class="form-control" id="meta_keywords"><?php echo htmlspecialchars(($edit) ? $pages['meta_keywords'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
		<p>Keywords should be seperated by Comma ','</p>
    </div>
	
	
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
