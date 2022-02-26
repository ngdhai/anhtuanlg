<?php

use Illuminate\Support\Facades\DB;

api_expose('save_bill_code');
function save_bill_code($data)
{
    if (!is_admin()) {
        return;
    }
    $data = array_unique(preg_split('/\r\n|[\r\n]/', $data['code']));
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    $time2 = strtotime('+4 hour', strtotime($date));
    $time2 = date('Y-m-d H:i:s', $time2);
    $time3 = strtotime('+9 hour', strtotime($date));
    $time3 = date('Y-m-d H:i:s', $time3);
    $time4 = strtotime('+15 hour', strtotime($date));
    $time4 = date('Y-m-d H:i:s', $time4);
    if(!empty($data)){
        foreach ($data as $code) {
            DB::table('bill_code')->insert([
                'code' => $code,
                'created_at' => $date,
                'time2' => $time2,
                'time3' => $time3,
                'time4' => $time4,
            ]);
        }
    }
    return true;
}
api_expose('edit_bill_code');
function edit_bill_code($data)
{
    if (!is_admin()) {
        return;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    $date1 = date_create($data['datetime1'] . " " . $data['time1']);
    $date1 = date_format($date1, "Y-m-d H:i:s");
    $time2 = strtotime('+4 hour', strtotime($date1));
    $time2 = date('Y-m-d H:i:s', $time2);
    $time3 = strtotime('+9 hour', strtotime($date1));
    $time3 = date('Y-m-d H:i:s', $time3);
    $time4 = strtotime('+15 hour', strtotime($date1));
    $time4 = date('Y-m-d H:i:s', $time4);
    if (!empty($data['datetime5'])) {
        $date5 = date_create($data['datetime5'] . " " . $data['time5']);
        $date5 = date_format($date5, "Y-m-d H:i:s");
    }

    return DB::table('bill_code')->where('id',$data['edit_id'])->update([
        'code'=> $data['code_edit'],
        'created_at'=> $date1,
        'time2' => $time2,
        'time3' => $time3,
        'time4' => $time4,
        'time5'=> !empty($time5)?$time5:"",
        'status'=>!empty($time5)?1:0,
    ]);
}
api_expose('update_status');
function update_status($data)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    return DB::table('bill_code')->where('id', $data)->update([
        'status' => 1,
        'time5' => $date
    ]);
}
function get_bill_code($params = array())
{
    if (is_string($params)) {
        $params = parse_params($params);
    }
    $params['table'] = "bill_code";
    DB::table('bill_code')->get();
    return db_get($params);
}

api_expose('delete_bill_code');
function delete_bill_code($params)
{
    if (!is_admin()) {
        return;
    }
    if (isset($params['id'])) {
        $table = "bill_code";
        $id = $params['id'];
        return db_delete($table, $id);
    }
}
