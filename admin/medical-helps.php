<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';
// Costumers class
require_once BASE_PATH . '/lib/Helps/Helps.php';
$pages = new Helps();

// Get Input data from query string
$search_string = filter_input(INPUT_GET, 'search_string');
$filter_col = filter_input(INPUT_GET, 'filter_col');
$order_by = filter_input(INPUT_GET, 'order_by');



// Per page limit for pagination.
$pagelimit = 15;

// Get current page.
$page = filter_input(INPUT_GET, 'page');
if (!$page) {
	$page = 1;
}

// If filter types are not selected we show latest added data first
if (!$filter_col) {
	$filter_col = 'id';
}
if (!$order_by) {
	$order_by = 'Desc';
}

//Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();

$db->join('mtct_medical_help md', 'hr.id = md.requestor_id', 'LEFT');
$db->join('mtct_admin_users a', 'a.id = hr.created_by', 'LEFT');
$db->join('mtct_admin_users b', 'b.id = hr.modified_by', 'LEFT');

$select = array('hr.id,hr.requestor_name','hr.requestor_age','hr.requestor_gender','md.requestor_place','md.requestor_ailment','md.treatment_in','hr.requestor_amount','hr.requestor_background','hr.requestor_profile','hr.requestor_photo','a.user_name','b.user_name','hr.created_date','hr.modified_date');

//Start building query according to input parameters.
// If search string


$db->where('hr.active', 1, '=');
$db->where('hr.request_for', 2, '=');
if ($search_string) {
	$db->where('hr.requestor_name', '%' . $search_string . '%', 'like');
	$db->orwhere('md.requestor_ailment', '%' . $search_string . '%', 'like');
}

//If order by option selected
if ($order_by) {
	$db->orderBy($filter_col, $order_by);
}

// Set pagination limit
$db->pageLimit = $pagelimit;

// Get result of the query.
$rows = $db->arraybuilder()->paginate('mtct_help_requested hr', $page, $select);
$total_pages = $db->totalPages;

include BASE_PATH . '/includes/header.php';
?>
<!-- Main container -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">MTCT Helps Requested</h1>
        </div>
        <div class="col-lg-6">
            <div class="page-action-links text-right">
                <a href="add_meta_information.php?operation=create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> New Request</a>
            </div>
        </div>
    </div>
    <?php include BASE_PATH . '/includes/flash_messages.php';?>

    <!-- Filters -->
    <div class="well text-center filter-form">
        <form class="form form-inline" action="">
			
			
			
            <label for="input_search">Search</label>
            <input type="text" class="form-control" id="input_search" name="search_string" value="<?php echo xss_clean($search_string); ?>">
            <label for="input_order">Order By</label>
            <select name="filter_col" class="form-control">
                <?php
foreach ($pages->setOrderingValues(2) as $opt_value => $opt_name):
	($order_by === $opt_value) ? $selected = 'selected' : $selected = '';
	echo ' <option value="' . $opt_value . '" ' . $selected . '>' . $opt_name . '</option>';
endforeach;
?>
            </select>
            <select name="order_by" class="form-control" id="input_order">
                <option value="Asc" <?php
if ($order_by == 'Asc') {
	echo 'selected';
}
?> >Asc</option>
                <option value="Desc" <?php
if ($order_by == 'Desc') {
	echo 'selected';
}
?>>Desc</option>
            </select>
            <input type="submit" value="Go" class="btn btn-primary">
        </form>
    </div>
    <hr>
    <!-- //Filters -->

    <!-- Table -->
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Primary Details</th>
                <th>Ailment</th>
				<th>Requested Amount</th>
                
                <th>Treatment In</th>
                <th>Family background</th>
                <th>Photo</th>
				<th>Created On/Modified On</th>
				<th>Created By/Modified By</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row): ?>
            <tr>
                <td><?php echo $row['requestor_name']; ?><br><?php echo xss_clean($row['requestor_age']); ?> , <?php echo xss_clean($row['requestor_gender']); ?><br><?php echo xss_clean($row['requestor_place']); ?><br>
                    <a href="<?php echo xss_clean($row['requestor_profile']); ?>">More Details</a></td>
				<td><?php echo xss_clean($row['requestor_ailment']); ?></td>
                
                <td><?php echo $row['requestor_amount']; ?></td>
                <td><?php echo xss_clean($row['treatment_in']); ?></td>
				<td><?php echo xss_clean($row['requestor_background']); ?></td>
				<td><?php echo xss_clean($row['requestor_photo']); ?></td>
				<td></td>
                
                <td>Created On : <?php echo $row['created_date']; ?><br>Modified On : <?php echo xss_clean($row['modified_date']); ?></td>
				<td>Created By : <?php echo xss_clean($row['user_name']); ?><br>Modified By : <?php echo xss_clean($row['user_name']); ?></td>
                <td>
                    <a href="edit_helps.php?page_id=<?php echo $row['id']; ?>&operation=edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                    
                </td>
            </tr>
            <!-- Delete Confirmation Modal -->
            
            <!-- //Delete Confirmation Modal -->
            <?php endforeach;?>
        </tbody>
    </table>
    <!-- //Table -->

    <!-- Pagination -->
    <div class="text-center">
    <?php echo paginationLinks($page, $total_pages, 'medical-helps.php'); ?>
    </div>
    <!-- //Pagination -->
</div>
<!-- //Main container -->
<?php include BASE_PATH . '/includes/footer.php';?>
