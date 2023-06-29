<fieldset>
    
<div class="row">
    
    <div class="col-12 col-md-3 col-lg-3">
    <div class="form-group">
        <label for="requestor_name">Name *</label>
        <input type="text" name="requestor_name" value="<?php echo htmlspecialchars($edit ? $education['requestor_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Enter the Page Title here.." class="form-control" required="required" id="requestor_name">
    </div> 
    </div>
    <div class="col-12 col-md-1 col-lg-1">
        <div class="form-group">
        <label for="requestor_age">Age *</label>
		<input type="number" name="requestor_age" placeholder="Enter the Project Description here..." class="form-control" id="requestor_age" value="<?php echo htmlspecialchars(($edit) ? $education['requestor_age'] : '', ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    </div>
    
    <div class="col-12 col-md-1 col-lg-1">
        <div class="form-group">
        <label for="requestor_gender">Gender *</label>
          <input type="text" name="requestor_gender" value="<?php echo htmlspecialchars($edit ? $education['requestor_gender'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Ex : home/home.php" class="form-control" required="required" id = "requestor_gender" >
    </div> 
    </div>
    
    <div class="col-12 col-md-3 col-lg-3">
	<div class="form-group">
        <label for="requestor_education">Education *</label>
		<input name="requestor_education" placeholder="Enter the education here..." class="form-control" id="requestor_education" value="<?php echo htmlspecialchars(($edit) ? $education['requestor_education'] : '', ENT_QUOTES, 'UTF-8'); ?>">
    </div>
	
	</div>
    
    <div class="col-12 col-md-4 col-lg-4">
        <div class="form-group">
        <label for="requestor_place">School *</label>
          <input type="text" name="requestor_place" value="<?php echo htmlspecialchars($edit ? $education['requestor_place'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Ex : home/home.php" class="form-control" required="required" id = "requestor_place" >
    </div>
    </div>
    
</div>
    
	
	
	<div class="row">
        
        
    
    <div class="col-12 col-md-2 col-lg-2">
    <div class="form-group">
        <label for="requestor_amount">Amount *</label>
          <input type="number" name="requestor_amount" value="<?php echo htmlspecialchars($edit ? $education['requestor_amount'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Ex : home/home.php" class="form-control" required="required" id = "requestor_amount" >
    </div>
	
	</div>
        
        <div class="col-12 col-md-5 col-lg-5">
	
	<div class="form-group">
        <label for="requestor_profile">Profile *</label>
          <input type="text" name="requestor_profile" value="<?php echo htmlspecialchars($edit ? $education['requestor_profile'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Ex : home/home.php" class="form-control" required="required" id = "requestor_profile" >
    </div> 
        
        </div>
    <div class="col-12 col-md-5 col-lg-5">
	
	<div class="form-group">
        <label for="requestor_photo">Photo *</label>
          <input type="text" name="requestor_photo" value="<?php echo htmlspecialchars($edit ? $education['requestor_photo'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Ex : home/home.php" class="form-control" required="required" id = "requestor_photo" >
    </div>
    
    </div>
    
</div>
    
    <div class="row">
    
    
        
        
    
</div>
	
	
    
    <div class="form-group">
        <label for="requestor_background">Family Background *</label>
		<textarea name="requestor_background" placeholder="Enter the Project Description here..." class="form-control" id="requestor_background"><?php echo htmlspecialchars(($edit) ? $education['requestor_background'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    
    
    
    
	
	
    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
