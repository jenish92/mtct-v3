<?php
define("mid","WL0000000010520");
define("requestURL","https://ipg.in.worldline.com/doMEPayRequest");
define("requestURL_Test","https://cgt.in.worldline.com/ipg/doMEPayRequest");
define("returnURL","https://www.motherteresacharities.org/v2.0/controller/pg/trnResponseWorldLine.php");
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