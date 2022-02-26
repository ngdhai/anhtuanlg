<?php

/*

type: layout
content_type: dynamic
name: Bảng giá cước vận chuyển nội địa VN
position: 3
description: Bảng giá cước vận chuyển nội địa VN

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="container" style="padding-top:20px;padding-bottom:20px">
    <module type="breadcrumb" />
</div>
<div>
    <div class="container">
        <div class="row">

            <!--  sidebar section start  -->

            <div class="col-xl-9 col-lg-9 edit" rel="price_VN" field="price_VN" style="box-shadow: 0 1px 29px 0 #bbb;margin-bottom: 20px">
                <div class="blog-details">

                    <div class="item-table-price" id="idElement1">
                        <h2>BẢNG GIÁ CƯỚC VẬN CHUYỂN NỘI ĐỊA VIỆT NAM</h2>
                        <table class="price_one_order priceVN" style="width:100%; text-align: center;border-color: #f5f5f5">
                            <tr>
                                <th rowspan="4">Miền Bắc</th>
                                <th rowspan="2">Cân nặng (kg)</th>
                                <th colspan="2">Điểm đến</th>
                            </tr>
                            <tr>
                                <th>Nội thành</th>
                                <th>Khu vực khác</th>
                            </tr>

                            <tr>
                                <td>0-1</td>
                                <td>22.0000đ</td>
                                <td>25.000đ</td>
                            </tr>
                            <tr>
                                <td>Cân tiếp theo</td>
                                <td>3.500đ</td>
                                <td>5.000</td>
                            </tr>

                            <tr>
                                <th rowspan="4">Miền Trung</th>
                                <th rowspan="2">Cân nặng (kg)</th>
                                <th colspan="2">Điểm đến</th>
                            </tr>
                            <tr>
                                <th colspan="2">Toàn miền</th>
                            </tr>

                            <tr>
                                <td>0-1</td>
                                <td colspan="2">28.0000đ</td>
                            </tr>
                            <tr>
                                <td>Cân tiếp theo</td>
                                <td colspan="2">6.000đ</td>
                            </tr>

                            <tr>
                                <th rowspan="4">Miền Nam</th>
                                <th rowspan="2">Cân nặng (kg)</th>
                                <th colspan="2">Điểm đến</th>
                            </tr>
                            <tr>
                                <th colspan="2">Toàn miền</th>
                            </tr>

                            <tr>
                                <td>0-1</td>
                                <td colspan="2">30.0000đ</td>
                            </tr>
                            <tr>
                                <td>Cân tiếp theo</td>
                                <td colspan="2">7.000đ</td>
                            </tr>
                        </table>
                        <div class="note-danger">
                            <p>Lưu ý :</p>
                            <p>1. Cân tiếp theo: từ 0,2kg trở lên được làm tròn lên 1kg</p>
                            <p>2. Hàng cồng kềnh được tính thể tích = chiều dài*chiều rộng*chiều cao/7000 ( căn cứ vào thể tích so với trọng lượng thực tế >5kg)</p>
                            <p>3. Thời gian giao hàng được tính bắt đầu từ ngày thứ hai sau khi nhận hàng . Nếu trên đường vận chuyển phát sinh những tình huống bất khả kháng như lũ, bão, động đất, hải quan kiểm hóa hàng hóa và dịch bệnh không cam kết thời gian giao hàng. </p>
                            <p>4. Hàng hóa có giá trị từ 1.500.000 VNĐ trở lên đề nghị mua bảo hiểm hàng hóa, nếu hàng hóa không mua bảo hiểm mức bồi thường là 5 lần cước phí vận chuyển.</p>
                            <p>5. Giá không bao gồm 15% phí xăng dầu và 10% VAT, sau khi tính cân nặng và chi phí vận chuyển xong, cần tính thêm 15% phí xăng dầu và 10%VAT.</p>
                            <p>6. Khu vực vùng sâu vùng xa thu thêm 15% chi phí trên tổng số tiền gửi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3" id="item-fixed">
                <div class="sidebar" style="box-shadow: 0 1px 29px 0 #bbb;margin-bottom: 20px;">
                    <div class="category-sidebar">
                        <ul>
                            <li><a href="#idElement1">Bảng giá vận chuyển nội địa VN</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <!--  sidebar section end  -->
        </div>
    </div>
</div>
</div>
<script>
    $('a[href^="#"]').on('click', function(event) {

        var target = $($(this).attr('href'));

        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 100);
        }

    });
</script>
<?php include template_dir() . "footer.php"; ?>