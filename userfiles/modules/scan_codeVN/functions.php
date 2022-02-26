<?php

use Illuminate\Support\Facades\DB;

api_expose('update_status_vn');
function update_status_vn($data)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    $scan_code_array = array_filter(array_unique(preg_split('/\r\n|[\r\n]/', $data['scan'])));

    foreach ($scan_code_array as $item ) {
        $code = DB::table('bill_code')->where('code', $item)->first();
        
        if(!empty($code)){
            DB::table('bill_code')->where('code', $item)->update([
                'status' => 1,
                'time5' => $date
            ]);
        }else{
            DB::table('bill_code')->insert([
                'code'=> $item,
                'created_at'=>$date,
                'time2'=>$date,
                'time3'=>$date,
                'time4'=>$date,
                'time5'=>$date,
                'status' => 1,
            ]);
        }
    }
    return true;
}