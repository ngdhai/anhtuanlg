<?php

/*

type: layout
content_type: dynamic
name: Bảng giá dịch vụ đặt hàng Trung Quốc
position: 3
description: Bảng giá dịch vụ đặt hàng Trung Quốc

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="container" style="padding-top:20px;padding-bottom:20px">
    <module type="breadcrumb" />
</div>
<div  >
    <div class="container">
        <div class="row">

            <!--  sidebar section start  -->
            
            <div class="col-xl-9 col-lg-9 edit" rel="price_order_chinna" field="price_order_chinna" style="box-shadow: 0 1px 29px 0 #bbb;margin-bottom: 20px">
                <div class="blog-details">
                    <div style="margin-top:20px">
                        <h1 class="title-page">BẢNG GIÁ DỊCH VỤ ĐẶT HÀNG TRUNG QUỐC</h1>
                    </div>
                    <div class="item-table-price" id="idElement1">
                        <h2>1. CHI PHÍ MỘT ĐƠN HÀNG ORDER</h2>
                        <table class="price_one_order">
                            <thead>
                                <tr>
                                    <th style="width: 150px;"></th>
                                    <th>Giải thích</th>
                                    <th style="width: 60px;">Bắt buộc</th>
                                    <th style="width: 60px;">Tuỳ chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1. Giá sản phẩm</td>
                                    <td>Là giá được niêm yết trên website Trung Quốc</td>
                                    <td style="color: green;text-align: center;"><i class="fas fa-check"></i></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2. Phí dịch vụ</td>
                                    <td>Phí giao dịch mua hàng khách trả cho AnhTuanLogistic</td>
                                    <td style="color: green;text-align: center;"><i class="fas fa-check"></i></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3. Phí vận chuyển nội địa Trung Quốc (Tùy sản phẩm)</td>
                                    <td>Phí chuyển hàng từ nhà cung cấp tới kho của AnhTuanLogistic tại Trung Quốc (Tùy sản phẩm)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>4. Phí vận chuyển</td>
                                    <td>Phí vận chuyển từ kho Trung Quốc về kho của AnhTuanLogistic tại Việt Nam (Đơn vị Kg)</td>
                                    <td style="color: green;text-align: center;"><i class="fas fa-check"></i></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>5. Phí kiểm đếm</td>
                                    <td>Dịch vụ đảm bảo sản phẩm của khách không bị nhà cung cấp giao sai hoặc thiếu</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>6. Phí đóng gỗ</td>
                                    <td>Hình thức đảm bảo an toàn, hạn chế rủi ro đối với hàng dễ vỡ, dễ biến dạng</td>
                                    <td></td>
                                    <td style="color: green;text-align: center;"><i class="fas fa-check"></i></td>
                                </tr>
                                <tr>
                                    <td>7. Phí ship tận nhà</td>
                                    <td>Là phí vận chuyển hàng từ kho của AnhTuanLogistic tại Việt Nam tới nhà của quý khách</td>
                                    <td></td>
                                    <td style="color: green;text-align: center;"><i class="fas fa-check"></i></td>
                                </tr>
                            </tbody>

                        </table>
                        <div class="note-danger"><i class="fa fa-exclamation-triangle"></i> Lưu ý: Những phí thuộc hình thức (*) là phí bắt buộc, còn lại là tùy chọn, quý khách có thể chọn sử dụng hoặc không</div>
                    </div>
                    <div class="item-table-price" id="idElement2">
                        <h2>2. BẢNG GIÁ DỊCH VỤ MUA HÀNG</h2>
                        <table class="price_one_order" style="width:100%">
                            <thead>
                                <tr>
                                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                    <th>% PHÍ DỊCH VỤ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                                <tr>
                                    <td>> 100 triệu</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>> 20tr đến 100 triệu</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td>> 2tr đến 20 triệu</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td> &#8804; 2 triệu</td>
                                    <td>0.5%</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">Phí dịch vụ tối thiểu 1 đơn hàng 10,000đ/đơn</td>

                                </tr>

                            </tbody>

                        </table>
                    </div>
                    <div class="item-table-price" id="idElement3">
                        <h2>3. PHÍ SHIP TRUNG QUỐC</h2>
                        <table class="price_one_order" style="width:100%">
                            <thead>
                                <tr>
                                    <th>LOẠI HÌNH</th>
                                    <th colspan="2">GIẢI THÍCH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                                <tr>
                                    <td>Chuyển phát nhanh thông thường</td>
                                    <td>Kg đầu dựa vào quy định của nhà cung cấp trên trang Taobao hoặc Alibaba</td>
                                    <td>Kg tiếp theo nếu nhà cung cấp thuộc tỉnh Quảng Đông là 4 tệ, tỉnh khác là 8 tệ</td>
                                </tr>
                                <tr>
                                    <td>Chuyển phát nhanh siêu tốc</td>
                                    <td>Kg đầu dựa vào quy định của nhà cung cấp trên trang Taobao hoặc Alibaba</td>
                                    <td>Mỗi 0.5kg tiếp theo là 5 tệ/kg</td>
                                </tr>
                                <tr>
                                    <td>Chuyển phát thường bằng oto tải</td>
                                    <td>Mỗi kg 1 tệ/kg + 70 tệ/đơn hàng</td>
                                    <td></td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                    <div class="item-table-price" id="idElement4">
                        <h2>4. PHÍ VẬN CHUYỂN QUỐC TẾ</h2>
                        <h6 style="color: red;">(THAY ĐỔI BẢNG GIÁ MỚI ĐƯỢC ÁP DỤNG CHO CÁC ĐƠN HÀNG MỚI TỪ NGÀY 1/12/2021)</h6>
                        <p style="font-weight: bold;"> 4.1 Phí vận chuyển trọn gói</p>
                        <table class="price_one_order" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Trọng lượng (tính/kg)</th>
                                    <th>Hà Nội</th>
                                    <th>TP.HCM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>> 200 → 500kg</td>
                                    <td>24.000đ</td>
                                    <td>32.500đ</td>
                                </tr>
                                <tr>
                                    <td>> 100 → 200kg</td>
                                    <td>26.000đ</td>
                                    <td>34.000đ</td>
                                </tr>
                                <tr>
                                    <td>> 30 → 100kg</td>
                                    <td>28.000đ</td>
                                    <td>35.000đ</td>
                                </tr>
                                <tr>
                                    <td>> 20 → 30kg</td>
                                    <td>30.000đ</td>
                                    <td>37.000đ</td>
                                </tr>
                                <tr>
                                    <td>> 5 → 20kg</td>
                                    <td>32.000đ</td>
                                    <td>39.000đ</td>
                                </tr>
                                <tr>
                                    <td>0 → 5kg</td>
                                    <td>35.000đ</td>
                                    <td>41.000đ</td>
                                </tr>

                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="3" style="text-align: left;padding-left: 5px;">Khối lượng (tính/m3)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>> 20m3</td>
                                    <td>Liên hệ</td>
                                    <td>Liên hệ</td>
                                </tr>
                                <tr>
                                    <td>> 10 → 20m3</td>
                                    <td>3.000.000đ</td>
                                    <td>3.500.000đ</td>
                                </tr>
                                <tr>
                                    <td>> 5 → 10m3</td>
                                    <td>3.300.000đ</td>
                                    <td>3.800.000đ</td>
                                </tr>
                                <tr>
                                    <td>≤ 5m3</td>
                                    <td>3.500.000đ</td>
                                    <td>4.000.000đ</td>
                                </tr>
                            </tbody>

                        </table>
                        <div class="note-danger">
                            <p>Lưu ý: </p>
                            <p>1.Quy tắc phân biệt hàng nặng và hàng cồng kềnh</p>
                            <p>- Phí vận chuyển được tính theo hai cách là trọng lượng theo hàng nặng, và thể tích cho hàng cồng kềnh/hàng.</p>
                            <p>- Hàng nặng và cồng kềnh được phân biệt theo cách sau:</p>
                            <p> + Hàng nặng có trọng lượng thực tế lớn hơn cân nặng quy đổi</p>
                            <p> + Hàng cồng kềnh có trọng lượng thực tế nhỏ hơn hoặc bằng cân nặng quy đổi</p>
                            <p>2.Quy tắc làm tròn</p>
                            <p>- Khối lượng kiện hàng tối thiểu tính 1kg</p>
                            <p>VD: Đơn hàng có trọng lượng: 0.2kg được làm tròn thành 0.5kg, từ 0.5kg được làm tròn thành 1kg</p>
                            <p>3.Tính giá vận chuyển khi hàng về</p>
                            <p>Khách hàng chú ý, với đơn hàng của quý khách gồm nhiều sản phẩm, và về làm nhiều đợt thì hàng về tới đâu công ty sẽ tính phí tới đó. Phí vận chuyển sẽ tính theo số hàng về của khách trong một thời điểm chứ không tính theo tổng đơn hàng.</p>
                        </div>

                        <p style="font-weight: bold;">4.2 Phí vận chuyển chính ngạch</p>
                        <p>Tổng phí nhập khẩu = Phí dịch vụ + Phí vận chuyển + Thuế nhập khẩu (nếu có) + Thuế VAT</p>
                        <table class="price_one_order" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Trọng lượng (tính/kg)</th>
                                    <th>Hà Nội</th>
                                    <th>TP.HCM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>> 500kg</td>
                                    <td>Liên hệ</td>
                                    <td>Liên hệ</td>
                                </tr>
                                <tr>
                                    <td>> 200kg -> 500kg</td>
                                    <td>8.000đ</td>
                                    <td>16.000đ</td>
                                </tr>
                                <tr>
                                    <td>> 100kg -> 200kg</td>
                                    <td>10.000đ</td>
                                    <td>18.000đ</td>
                                </tr>
                                <tr>
                                    <td>> 30kg -> 100kg</td>
                                    <td>12.000đ</td>
                                    <td>20.000đ</td>
                                </tr>
                                <tr>
                                    <td>
                                        < 30kg</td>
                                    <td>16.000đ</td>
                                    <td>24.000đ</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="3" style="text-align: left;padding-left: 5px;">Khối lượng (tính/m3)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>> 20m3</td>
                                    <td>Liên hệ</td>
                                    <td>Liên hệ</td>
                                </tr>
                                <tr>
                                    <td>> 10 → 20m3</td>
                                    <td>1.100.000đ</td>
                                    <td>1.600.000đ</td>
                                </tr>
                                <tr>
                                    <td>> 5 → 10m3</td>
                                    <td>1.400.000đ</td>
                                    <td>1.900.000đ</td>
                                </tr>
                                <tr>
                                    <td>≤ 5m3</td>
                                    <td>1.600.000đ</td>
                                    <td>2.100.000đ</td>
                                </tr>
                            </tbody>

                        </table>
                        <div class="note-danger">
                            <p>Thuế nhập khẩu (Nếu có) = % thuế x Giá trị hàng hóa</p>
                            <p>Thuế VAT = 10% x Giá trị hàng hóa</p>
                            <p>Lưu ý:</p>
                            <p>Đối với hàng hoá vận chuyển theo Hình thức chính ngạch, các thông số như thuế nhập khẩu và thuế VAT sẽ được chúng tôi thông báo tới Quý khách sau khi Quý khách đặt cọc. Hoặc Quý khách liên hệ nhân viên Kinh doanh để có được thông tin về chi phí lô hàng.</p>
                        </div>
                    </div>
                    <div class="item-table-price" id="idElement5">
                        <h2>5. PHÍ KIỂM ĐẾM SẢN PHẨM</h2>
                        <table class="price_one_order" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SỐ LƯỢNG</th>
                                    <th>MỨC GIÁ (VNĐ)/ 1 sản phẩm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                                <tr>
                                    <td>501-10000 sản phẩm</td>
                                    <td>1,000đ</td>
                                </tr>
                                <tr>
                                    <td>101-500 sản phẩm</td>
                                    <td>1,500đ</td>
                                </tr>
                                <tr>
                                    <td>11-100 sản phẩm</td>
                                    <td>3,500đ</td>
                                </tr>
                                <tr>
                                    <td>1-2 sản phẩm</td>
                                    <td>5,000đ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item-table-price" id="idElement6">
                        <h2>6. PHÍ ĐÓNG GỖ</h2>
                        <table class="price_one_order" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Trọng lượng</th>
                                    <th>Kg đầu tiên</th>
                                    <th>Kg tiếp theo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                                <tr>
                                    <td>Phí đóng kiện</td>
                                    <td>50,000đ</td>
                                    <td>3,500đ</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Khối lượng</th>
                                    <th colspan="2">Phí đóng kiện</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <= 0.01m3</td>
                                    <td colspan="2">50,000đ</td>
                                </tr>
                                <tr>
                                    <td>Từ 0.01m3 đến <= 0.1m3</td>
                                    <td colspan="2">50,000đ/0.01m3 đầu tiên + 15,000đ/0.01m3 tiếp theo</td>
                                </tr>
                                <tr>
                                    <td>Từ 0.1m3 đến 1m3</td>
                                    <td colspan="2">200,000đ/0.1m3 đầu tiên + 50,000đ/0.1m3 tiếp theo</td>
                                </tr>
                                <tr>
                                    <td>> 1m3</td>
                                    <td colspan="2">600,000đ/1m3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item-table-price" id="idElement7">
                        <h2>7. PHÍ CHỐNG SỐC</h2>
                        <table class="price_one_order" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Kg đầu tiên</th>
                                    <th>Kg tiếp theo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                                <tr>
                                    <td>Phí</td>
                                    <td>8 Tệ</td>
                                    <td>1.5 Tệ</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="note-danger">
                            <p>Lưu ý: </p>
                            <p>Phí chống sốc chỉ áp dụng cho hàng TMĐT</p>
                            <p>Hàng cồng kềnh sẽ tính theo cân nặng quy đổi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3" id="item-fixed" >
                <div class="sidebar" style="box-shadow: 0 1px 29px 0 #bbb;margin-bottom: 20px;">
                    <div class="category-sidebar">
                        <ul>
                            <li><a href="#idElement1">Chi phí một đơn hàng order</a></li>
                            <li><a href="#idElement2">Bảng giá dịch vụ mua hàng</a></li>
                            <li><a href="#idElement3">Phí ship Trung Quốc</a></li>
                            <li><a href="#idElement4">Phí vận chuyển quốc tế</a></li>
                            <li><a href="#idElement5">Phí kiểm đếm sản phẩm</a></li>
                            <li><a href="#idElement6">Phí đóng gỗ</a></li>
                            <li><a href="#idElement7">Phí chống sốc</a></li>
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