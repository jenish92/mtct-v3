<?php
    $root = getenv("DOCUMENT_ROOT");
    require_once("$root/lib/connection-variables.php");
    require_once("$root/lib/db-connections.php");
    require_once("$root/lib/master.php");
    $mtct = new mtct();
    
    $country = $_GET["country"];
    
    //echo $country."<br><br>";
    
    //var_dump($mtct->currencyCodeList());
    
    $currency_code_list = $mtct->currencyCodeList();
    
    print($currency_code_list[$country]);
?>