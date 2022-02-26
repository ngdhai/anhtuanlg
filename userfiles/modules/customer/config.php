<?php
$config = array();
$config['name'] = "Customer";
$config['author'] = "";
$config['ui'] = false; //if set to true, module will be visible in the toolbar
$config['ui_admin'] = true; //if set to true, module will be visible in the admin panel
$config['categories'] = "content";
$config['version'] = 0.1;
$config['tables'] = array(
    "customer" => array(
        'id' => "integer",
        'code' => "text",
        'name' => "text",
        'created_at' => "dateTime",
        'updated_at' => "dateTime",
    )
);