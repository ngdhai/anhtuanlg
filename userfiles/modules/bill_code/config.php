<?php
$config = array();
$config['name'] = "Bill code";
$config['author'] = "";
$config['ui'] = false; //if set to true, module will be visible in the toolbar
$config['ui_admin'] = true; //if set to true, module will be visible in the admin panel
$config['categories'] = "content";
$config['version'] = 0.1;
$config['tables'] = array(
    "bill_code" => array(
        'id' => "integer",
        'code' => "text",
        'status' => "text",
        'created_at' => "dateTime",
        'time2'=>"dateTime",
        'time3'=>"dateTime",
        'time4'=>"dateTime",
        'time5'=>"dateTime",
        'bag_id' => "integer"
    )
);