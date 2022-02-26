<?php

use Illuminate\Support\Facades\DB;

api_expose('save_bag');
function save_bag($data)
{
    if (!is_admin()) {
        return;
    }

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    $customer_id = $data['customer'];
    $customer_code = DB::table('customer')->where('id', $customer_id)->first();
    $number = DB::table('bags')->where('customer_id', $customer_id)->whereDate('created_at', date('Y-m-d'))->count();
    $bag_id = $customer_code->code . "." . date('y') . "." . date('m') . "." . date('d') . "." . ($number + 1);

    $address_to = $data['city'];
    $kg = $data['kg'];
    $m3 = $data['m3'];
    $number_of_bag = $data['bag'];
    $scan_code_array = array_filter(array_unique(preg_split('/\r\n|[\r\n]/', $data['scan'])));
    $id = DB::table('bags')->insertGetId([
        'customer_id' => $customer_id,
        'bag_id' =>  $bag_id,
        'number_of_case' => count($scan_code_array),
        'number_of_bag' => $number_of_bag,
        'm3' => $m3,
        'kg' => $kg,
        'address_to' => $address_to,
        'created_at' => $date,
        'updated_at' => $date,
        'created_by' => user_id()
    ]);
    $time2 = strtotime('+4 hour', strtotime($date));
    $time2 = date('Y-m-d H:i:s', $time2);
    $time3 = strtotime('+9 hour', strtotime($date));
    $time3 = date('Y-m-d H:i:s', $time3);
    $time4 = strtotime('+15 hour', strtotime($date));
    $time4 = date('Y-m-d H:i:s', $time4);
    foreach ($scan_code_array as $code) {
        DB::table('bill_code')->insert([
            'code' => $code,
            'created_at' => $date,
            'time2' => $time2,
            'time3' => $time3,
            'time4' => $time4,
            'bag_id' => $id
        ]);
    }
}
api_expose('edit_bag');
function edit_bag($data)
{
    if (!is_admin()) {
        return;
    }
    
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $now = date('Y-m-d H:i:s');
    $bag_time = DB::table('bags')->where('id',$data['id'])->first();
    $date = $bag_time->created_at;

    $customer_id = $data['customer'];
    $customer_code = DB::table('customer')->where('id', $customer_id)->first();
    $number = DB::table('bags')->where('customer_id', $customer_id)->whereDate('created_at', date('Y-m-d'))->count();
    $bag_id = $customer_code->code . "." . date('y') . "." . date('m') . "." . date('d') . "." . ($number + 1);

    $address_to = $data['city'];
    $kg = $data['kg'];
    $m3 = $data['m3'];
    $number_of_bag = $data['bag'];

    $scan_code_array = array_filter(array_unique(preg_split('/\r\n|[\r\n]/', $data['scan'])));
    $main_code = DB::table('bill_code')->where('bag_id',$data['id'])->pluck('code')->toArray();
    $item_add = array_diff($scan_code_array,$main_code);
    $item_delete = array_diff($main_code,$scan_code_array);
    DB::table('bags')->where('id',$data['id'])->update([
        'customer_id' => $customer_id,
        'bag_id' =>  $bag_id,
        'number_of_case' => count($scan_code_array),
        'number_of_bag' => $number_of_bag,
        'm3' => $m3,
        'kg' => $kg,
        'address_to' => $address_to,
        'updated_at' => $now,
        'updated_by' => user_id()
    ]);
    $time2 = strtotime('+4 hour', strtotime($date));
    $time2 = date('Y-m-d H:i:s', $time2);
    $time3 = strtotime('+9 hour', strtotime($date));
    $time3 = date('Y-m-d H:i:s', $time3);
    $time4 = strtotime('+15 hour', strtotime($date));
    $time4 = date('Y-m-d H:i:s', $time4);
    if(count($item_delete) >0){
        foreach ($item_delete as $code) {
            DB::table('bill_code')->where('code',$code)->delete();
        }
    }
    if(count($item_add) >0){
        foreach ($item_add as $code) {
            DB::table('bill_code')->insert([
                'code' => $code,
                'created_at' => $date,
                'time2' => $time2,
                'time3' => $time3,
                'time4' => $time4,
                'bag_id' => $data['id']
            ]);
        }
    }
}
