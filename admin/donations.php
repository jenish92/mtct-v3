<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

// Costumers class
require_once BASE_PATH . '/lib/Donations/Donations.php';
$donations = new Donations();

// Get Input data from query string
$search_string = filter_input(INPUT_GET, 'search_string');
$filter_col = filter_input(INPUT_GET, 'filter_col');
$order_by = filter_input(INPUT_GET, 'order_by');
$from_date = filter_input(INPUT_GET, 'from_date');
$to_date = filter_input(INPUT_GET, 'to_date');

$from_date = ($from_date != "") ? $from_date : date("Y-m-d",  strtotime('-30 day'));
$to_date = ($to_date != "") ? $to_date : date("Y-m-d");

$export_url = "export_donations.php?from_date=".$from_date."&to_date=".$to_date;

// Per page limit for pagination.
$pagelimit = 15;

// Get current page.
$page = filter_input(INPUT_GET, 'page');
if (!$page) {
	$page = 1;
}

// If filter types are not selected we show latest added data first
if (!$filter_col) {
	$filter_col = 'donate_id';
}
if (!$order_by) {
	$order_by = 'Desc';
}

//Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();


$db->join('master_mode m', 'm.mode_id = d.donate_mode', 'INNER');
$db->join('master_donation t', 't.donate_id = d.donate_towards', 'INNER');

$select = array('d.donate_id','d.donor_name','d.donor_email','d.donor_phone','t.description','d.donated_amount','m.mode_description','d.transaction_number','d.donated_date');

//Start building query according to input parameters.
// If search string


$db->where('date(d.created_date)', Array($from_date,$to_date), 'BETWEEN');

if ($search_string) {
	$db->where('d.donor_name', '%' . $search_string . '%', 'like');
	$db->orwhere('d.donor_email', '%' . $search_string . '%', 'like');
}

//If order by option selected
if ($order_by) {
	$db->orderBy($filter_col, $order_by);
}

// Set pagination limit
$db->pageLimit = $pagelimit;

// Get result of the query.
$rows = $db->arraybuilder()->paginate('mtct_donations d', $page, $select);
$total_pages = $db->totalPages;

include BASE_PATH . '/includes/header.php';
?>
<!-- Main container -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Donations</h1>
        </div>
        <div class="col-lg-6">
            <div class="page-action-links text-right">
                <a href="add_donation.php?operation=create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add new</a>
            </div>
        </div>
    </div>
    <?php include BASE_PATH . '/includes/flash_messages.php';?>

    <!-- Filters -->
    <div class="well text-center filter-form">
        <form class="form form-inline" action="">
			
			<div class="form-group">
        <label for="from_date">From Date *</label>
          <input type="date" name="from_date"  placeholder="Select Date" class="form-control" required="required" id = "from_date" >
    </div> 
			
			<div class="form-group">
        <label for="to_date">To Date *</label>
          <input type="date" name="to_date"  placeholder="Select Date" class="form-control" required="required" id = "to_date" >
    </div> 
			
			
			
            <label for="input_search">Search</label>
            <input type="text" class="form-control" id="input_search" name="search_string" value="<?php echo xss_clean($search_string); ?>">
            <label for="input_order">Order By</label>
            <select name="filter_col" class="form-control">
                <?php
foreach ($donations->setOrderingValues() as $opt_value => $opt_name):
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


    <div id="export-section">
        <a href="<?php echo $export_url; ?>"><button class="btn btn-sm btn-primary">Export to CSV <i class="glyphicon glyphicon-export"></i></button></a>
    </div>

    <!-- Table -->
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th width="25%">Donor Detail</th>
                <th width="5%">Amount</th>
                <th width="10%">Donate For</th>
				<th width="30%">Mode</th>
				<th width="15%">Donated Date</th>
                <th width="10%">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row): ?>
            <tr>
                <td><?php echo $row['donate_id']; ?></td>
                <td>Name : <?php echo xss_clean($row['donor_name']); ?><br>
					Email : <?php echo xss_clean($row['donor_email']); ?><br>
					Phone : <?php echo xss_clean($row['donor_phone']); ?></td>
				<td><?php echo xss_clean($row['donated_amount']); ?></td>
				<td><?php echo xss_clean($row['description']); ?></td>
				<td><?php echo xss_clean($row['mode_description']); ?></td>
				<td><?php echo xss_clean(date_format(date_create($row['donated_date']),"d-M-Y h:i A")); ?></td>
                <td>
                    <a href="edit-donation.php?donate_id=<?php echo $row['donate_id']; ?>&operation=edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                    
                </td>
            </tr>
            <!-- Delete Confirmation Modal -->
            <div class="modal fade" id="confirm-delete-<?php echo $row['donate_id']; ?>" role="dialog">
                <div class="modal-dialog">
                    <form action="delete_customer.php" method="POST">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="del_id" id="del_id" value="<?php echo $row['donate_id']; ?>">
                                <p>Are you sure you want to delete this row?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default pull-left">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- //Delete Confirmation Modal -->
            <?php endforeach;?>
        </tbody>
    </table>
    <!-- //Table -->

    <!-- Pagination -->
    <div class="text-center">
    <?php echo paginationLinks($page, $total_pages, 'donations.php'); ?>
    </div>
    <!-- //Pagination -->
</div>
<!-- //Main container -->
<?php include BASE_PATH . '/includes/footer.php';?>
