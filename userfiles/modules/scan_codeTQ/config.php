<?php
$config = array();
$config['name'] = "Scan code TQ";
$config['author'] = "";
$config['ui'] = false; //if set to true, module will be visible in the toolbar
$config['ui_admin'] = true; //if set to true, module will be visible in the admin panel
$config['categories'] = "content";
$config['version'] = 0.1;
$config['tables'] = array(
    "bags" => array(
        'id' => "integer",
        'customer_id' => "integer",
        'bag_id' => "text",
        'number_of_case' => "integer",
        'number_of_bag'=>"integer",
        'm3'=>"float",
        'kg'=>"float",
        'address_to'=>"text",
        'created_at'=>"dateTime",
        'updated_at'=>"dateTime",
        'date'=>"dateTime",
        'created_by' => "integer",
        'updated_by' => "integer",
    )
);