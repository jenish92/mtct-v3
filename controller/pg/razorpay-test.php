<?php

$api = new Api($key_id, $secret);

//GET ALL PLANS
$api->plan->all($options);

//GET ALL PLANS BY ID
$api->plan->fetch($planId);

//GET ALL OPTIONS
$api->subscription->all($options);

//CREATE A SUBSCRIPTION
$api->subscription->create(array('plan_id' => 'plan_7wAosPWtrkhqZw', 'customer_notify' => 1,'quantity'=>5, 'total_count' => 6, 'start_at' => 1495995837, 'addons' => array(array('item' => array('name' => 'Delivery charges', 'amount' => 30000, 'currency' => 'INR'))),'notes'=> array('key1'=> 'value3','key2'=> 'value2')));

//GET SUBSCRIPTION BY ID
$api->subscription->fetch($subscriptionId);

?>