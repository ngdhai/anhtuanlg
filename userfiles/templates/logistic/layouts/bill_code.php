<?php

/*

type: layout
content_type: dynamic
name: Mã vận đơn
position: 3
description: Mã vận đơn

*/

use Illuminate\Support\Facades\DB;

?>
<?php
$search = $_GET['search'];
$data = DB::table('bill_code')->whereRaw('lower(code) = "' . strtolower($search) . '"')->first();
if (!empty($data)) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $now = new DateTime();
    $status = 1;
    if (strtotime($data->time2) < strtotime($now->format('Y-m-d H:i:s'))) {
        $status = 2;
    }
    if (strtotime($data->time3) < strtotime($now->format('Y-m-d H:i:s'))) {
        $status = 3;
    }
    if (strtotime($data->time4) < strtotime($now->format('Y-m-d H:i:s'))) {
        $status = 4;
    }
    if (strtotime($data->time5) < strtotime($now->format('Y-m-d H:i:s')) && !empty($data->time5) && $data->status==1) {
        $status = 5;
    }
}

?>

<?php include template_dir() . "header.php"; ?>
<module type="layouts" template="search"/>
<div style="padding-bottom: 20px;">
    <div class="container">
        <div class="row">

            <!--  sidebar section start  -->
            <div class="col-xl-3 col-lg-3 ">
                <div class="sidebar">
                    <div class="category-sidebar">
                        <ul>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><a href="#">Ocean Freight</a></li>
                            <li><a href="#">Warehousing</a></li>
                            <li><a href="#">Storage</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9" style="background-color: #f3f3f3;">
                <div class="service-details-conten">
                    <p style="padding-top:10px;font-weight: bold;font-size: 20px;">Thông tin mã vận đơn <?php print $search ?>:</p>
                </div>
                <?php if (!empty($data)) : ?>
                    <table class="result-info" cellspacing="0" style="border-collapse:separate; border-spacing:1em;">
                        <tbody>
                            <?php if ($status == 1) : ?>
                                <tr style="color:#ff7800">
                                    <td class="row1" style="color:#ff7800;width: 170px;text-align: center">
                                        <span><i class="fas fa-check"></i></span>
                                        <span class="day"><?php print $data->created_at ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đã được công ty Anh Tuấn Logistics tại Trung Quốc tiếp nhận
                                    </td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td class="row1">
                                        <span class="day"><?php print $data->created_at ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đã được công ty Anh Tuấn Logistics tại Trung Quốc tiếp nhận
                                    </td>
                                </tr>
                            <?php endif ?>
                            <?php if ($status == 2) : ?>
                                <tr style="color:#ff7800">
                                    <td class="row1" style="color:#ff7800;width: 170px;text-align: center">
                                        <span><i class="fas fa-check"></i></span>
                                        <span class="day"><?php print $data->time2 ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đã được xuất kho tại Trung Quốc
                                    </td>
                                </tr>
                            <?php elseif ($status > 2) : ?>
                                <tr>
                                    <td class="row1">
                                        <span class="day"><?php print $data->time2 ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đã được xuất kho tại Trung Quốc
                                    </td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td class="row1">
                                        <span class="day"></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đã được xuất kho tại Trung Quốc
                                    </td>
                                </tr>
                            <?php endif ?>
                            <?php if ($status == 3) : ?>
                                <tr style="color:#ff7800">
                                    <td class="row1" style="color:#ff7800;width: 170px;text-align: center">
                                        <span><i class="fas fa-check"></i></span>
                                        <span class="day"><?php print $data->time3 ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đang làm thu tục thông thương Trung Quốc vào Việt Nam
                                    </td>
                                </tr>
                            <?php elseif ($status > 3) : ?>
                                <tr>
                                    <td class="row1">
                                        <span class="day"><?php print $data->time3 ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đang làm thu tục thông thương Trung Quốc vào Việt Nam
                                    </td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td class="row1">
                                        <span class="day"></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đang làm thu tục thông thương Trung Quốc vào Việt Nam
                                    </td>
                                </tr>
                            <?php endif ?>
                            <?php if ($status == 4) : ?>
                                <tr style="color:#ff7800">
                                    <td class="row1" style="color:#ff7800;width: 170px;text-align: center">
                                        <span><i class="fas fa-check"></i></span>
                                        <span class="day"><?php print $data->time4 ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đang trên đường về kho hàng Anh Tuấn Logistics tại Việt Nam
                                    </td>
                                </tr>
                            <?php elseif($status >4) : ?>
                                <tr>
                                    <td class="row1">
                                        <span class="day"><?php print $data->time4 ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đang trên đường về kho hàng Anh Tuấn Logistics tại Việt Nam
                                    </td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td class="row1">
                                        <span class="day"></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Đang trên đường về kho hàng Anh Tuấn Logistics tại Việt Nam
                                    </td>
                                </tr>
                            <?php endif ?>
                            <?php if ($status == 5) : ?>
                                <tr style="color:#ff7800">
                                    <td class="row1" style="color:#ff7800;width: 170px">
                                        <span><i class="fas fa-check"></i></span>
                                        <span class="day"><?php print $data->time5 ?></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Mã đơn hàng đã về kho Anh Tuấn Logistics, mời quí khách đến kho hàng Anh Tuấn Logistics để nhận hàng
                                    </td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td class="row1">
                                        <span class="day"></span>
                                    </td>
                                    <td class="status">
                                        <div class="col2"><span class="step"><span class="line1"></span><span class="line2"></span></span>
                                        </div>
                                    </td>
                                    <td class="contex">Mã đơn hàng đã về kho Anh Tuấn Logistics, mời quí khách đến kho hàng Anh Tuấn Logistics để nhận hàng
                                    </td>
                                </tr>
                            <?php endif ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <span style="color: red;">Mã vận đơn không tồn tại</span>
                <?php endif ?>

            </div>
            <!--  sidebar section end  -->
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>