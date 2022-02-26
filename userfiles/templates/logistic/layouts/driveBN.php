<?php

/*

type: layout
content_type: dynamic
name: Bảng giá cước vận chuyển xe ô tô Bắc Nam
position: 3
description: Bảng giá cước vận chuyển xe ô tô Bắc Nam

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

            <div class="col-xl-9 col-lg-9 edit" rel="price_BN" field="price_BN" style="box-shadow: 0 1px 29px 0 #bbb;margin-bottom: 20px">
                <div class="blog-details">
                    
                    <div class="item-table-price" id="idElement1">
                        <h2>BẢNG GIÁ CƯỚC VẬN CHUYỂN XE Ô TÔ BẮC NAM</h2>
                        <table class="price_one_order" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th colspan="5">Loại xe</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th colspan="2">4-5 chỗ</th>
                                    <th colspan="2">7 chỗ</th>
                                    <th>Trên 7 chỗ</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Giá trị xe < 1 tỷ</th>
                                    <th>Giá trị xe > 1 tỷ</th>
                                    <th>Giá trị xe < 1 tỷ</th>
                                    <th>Giá trị xe > 1 tỷ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hà Nội - HCM</td>
                                    <td>5.500.000đ</td>
                                    <td>6.500.000đ</td>
                                    <td>6.000.000đ</td>
                                    <td>7.000.000đ</td>
                                    <td>Liên hệ</td>
                                </tr>
                                <tr>
                                    <td>HCM - Hà Nội</td>
                                    <td>5.500.000đ</td>
                                    <td>6.500.000đ</td>
                                    <td>6.000.000đ</td>
                                    <td>7.000.000đ</td>
                                    <td>Liên hệ</td>
                                </tr>
                            </tbody>

                        </table>
                        <div class="note-danger">
                            <p>Lưu ý : Giá trên đã bao gồm giao xe tận nơi. Khách hàng có thể tự đến bãi lấy hàng xe được trừ chi phí giao nhận ( Hà Nội = 250k, HCM= 400k)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3" id="item-fixed">
                <div class="sidebar" style="box-shadow: 0 1px 29px 0 #bbb;margin-bottom: 20px;">
                    <div class="category-sidebar">
                        <ul>
                            <li><a href="#idElement1">Bảng giá vận chuyển xe oto Bắc-Nam</a></li>
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