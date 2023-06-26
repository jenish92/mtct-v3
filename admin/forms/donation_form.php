<fieldset>
    <div class="form-group">
        <label for="donor_name">Name *</label>
          <input type="text" name="donor_name" value="<?php echo htmlspecialchars($edit ? $donation['donor_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="First Name" class="form-control" required="required" id = "donor_name" >
    </div> 

    <div class="form-group">
        <label for="donor_email">Email *</label>
        <input type="email" name="donor_email" value="<?php echo htmlspecialchars($edit ? $donation['donor_email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Email" class="form-control" required="required" id="donor_email">
    </div> 
	
	<div class="form-group">
        <label for="donor_phone">Phone *</label>
        <input type="phone" name="donor_phone" value="<?php echo htmlspecialchars($edit ? $donation['donor_phone'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Phone Number" class="form-control" required="required" id="donor_phone">
    </div> 
	
	<div class="form-group">
        <label for="donor_address">Address *</label>
		<textarea name="donor_address" placeholder="Address" class="form-control" id="donor_address"><?php echo htmlspecialchars(($edit) ? $donation['donor_address'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
	
	<div class="form-group">
        <label for="donated_amount">Amount *</label>
        <input type="number" name="donated_amount" value="<?php echo htmlspecialchars($edit ? $donation['donated_amount'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Amount" class="form-control" required="required" id="donated_amount">
    </div>


    
    <div class="form-group">
        <label>Donate For </label>
           <?php $donate_fields = array('donate_id','description'); 
				 $db->orderBy('description', 'Asc');
				 $donation_towards = $db->arraybuilder()->paginate('master_donation',1, $donate_fields);
           ?>
            <select name="donate_towards" class="form-control selectpicker" required>
                <option value=" " >---Donate For---</option>
                <?php
                foreach ($donation_towards as $opt) {
                    if ($edit && $opt['donate_id'] == $donation['donate_towards']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['donate_id'].'"' . $sel . '>' . $opt['description'] . '</option>';
                }

                ?>
            </select>
    </div>  
	
	
	<div class="form-group">
        <label>Mode </label>
           <?php $mode_fields = array('mode_id','mode_description'); 
				 $db->orderBy('mode_description', 'Asc');
				 $donate_mode = $db->arraybuilder()->paginate('master_mode',1, $mode_fields);
           ?>
            <select name="donate_mode" class="form-control selectpicker" required>
                <option value=" " >---Donate Mode---</option>
                <?php
                foreach ($donate_mode as $opt) {
                    if ($edit && $opt['mode_id'] == $donation['donate_mode']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['mode_id'].'"' . $sel . '>' . $opt['mode_description'] . '</option>';
                }

                ?>
            </select>
    </div> 
	
	<div class="form-group">
        <label for="transaction_number">Transaction/Cheque Number *</label>
          <input type="text" name="transaction_number" value="<?php echo htmlspecialchars($edit ? $donation['transaction_number'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Transaction Number" class="form-control" required="required" id = "transaction_number" >
    </div> 
    

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
