<?php

session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';
$from_date = filter_input(INPUT_GET, 'from_date');
$to_date = filter_input(INPUT_GET, 'to_date');
$db = getDbInstance();
$db->join('master_mode m', 'm.mode_id = d.donate_mode', 'INNER');
$db->join('master_donation t', 't.donate_id = d.donate_towards', 'INNER');
$select = array('d.donate_id','d.donor_name','d.donor_email','d.donor_phone','t.description','d.donated_amount','m.mode_description','d.transaction_number','d.donated_date');

$labels = array('ID','Name','Email','Phone','Donated For','Donated Amount','Donate Mode','Tx. Number','Donated Date');


$db->where('date(d.created_date)', Array($from_date,$to_date), 'BETWEEN');
$chunk_size = 100;
$offset = 0;

$data = $db->withTotalCount()->get('mtct_donations d');
$total_count = $db->totalCount;

$handle = fopen('php://memory', 'w');

fputcsv($handle,$labels);
$filename = 'export_donations_'.$from_date.'_to_'.$to_date.'.csv';


$num_queries = ($total_count/$chunk_size) + 1;

//Prevent memory leak for large number of rows by using limit and offset :
for ($i=0; $i<$num_queries; $i++){
	$db->join('master_mode m', 'm.mode_id = d.donate_mode', 'INNER');
	$db->join('master_donation t', 't.donate_id = d.donate_towards', 'INNER');
	$db->where('date(d.created_date)', Array($from_date,$to_date), 'BETWEEN');
    $rows = $db->get('mtct_donations d',Array($offset,$chunk_size), $select);
    $offset = $offset + $chunk_size;
    foreach ($rows as $row) {

        fputcsv($handle,array_values($row));
    }
}

// reset the file pointer to the start of the file
fseek($handle, 0);
// tell the browser it's going to be a csv file
header('Content-Type: application/csv');
// Save instead of displaying csv string
header('Content-Disposition: attachment; filename="'.$filename.'";');
//Send the generated csv lines directly to browser
fpassthru($handle);

