<?php
define("encKey","8fcd52e5d14f877d47b1424a44c1a130");
define("currencyType","INR");
define("trnType","S");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

require_once("$root/lib/connection-variables.php");
require_once("$root/lib/db-connections.php");
require_once("$root/lib/master.php");

	$mtct = new mtct();
	$redirectRoot = $mtct->root_path;
?>