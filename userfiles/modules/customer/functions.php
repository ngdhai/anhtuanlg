<?php

use Illuminate\Support\Facades\DB;

api_expose('add_customer');
function add_customer($data)
{
    if (!is_admin()) {
        return;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    return DB::table('customer')->insert([
        'code' => $data['code'],
        'name' => $data['name'],
        'created_at' => $date,
        'updated_at' => $date,
    ]);
}
api_expose('edit_customer');
function edit_customer($data)
{
    if (!is_admin()) {
        return;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    return DB::table('customer')->where('id',$data['edit_id'])->update([
        'code'=> $data['code_edit'],
        'name'=> $data['name_edit'],
        'updated_at'=> $date,
    ]);
}
function get_customer($params = array())
{
    if (is_string($params)) {
        $params = parse_params($params);
    }
    $params['table'] = "customer";
    DB::table('customer')->get();
    return db_get($params);
}

api_expose('delete_customer');
function delete_customer($params)
{
    if (!is_admin()) {
        return;
    }
    if (isset($params['id'])) {
        $table = "customer";
        $id = $params['id'];
        return db_delete($table, $id);
    }
}
