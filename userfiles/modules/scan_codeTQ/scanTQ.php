<script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>

<script>
    $(document).ready(function() {
        //<![CDATA[
        $('select[name="city"]').each(function() {
            var $this = $(this),
                stc = ''
            c.forEach(function(i, e) {
                e += +1
                stc += '<option value="' + i + '">' + i + '</option>'
                $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
            })
        })
    })
    //]]>
</script>
<script>
    $(document).ready(function() {
        $("#scan-code").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('save_bag'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                mw.reload_module("scan_codeTQ/scanTQ");
                alert("Đã lưu thành công")
            });
        });
    });
</script>
<?php

use Illuminate\Support\Facades\DB;

$customer = DB::table('customer')->get(); ?>
<div class="card style-1 bg-light">
    <div class="card-header" style="margin-bottom: 20px;">
        <h5>
            <strong>Bắn mã vạch</strong>
        </h5>
        <a href="<?php print admin_url('view:modules/load_module:scan_codeTQ'); ?>" class="btn btn-xs btn-primary">Danh sách</a>
    </div>

    <div class="card-body pt-3" style="padding-top: 20px;">
        <form id="scan-code">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="input-customer">Chọn khách hàng</label>
                    <select class="form-control" id="input-customer" name="customer" required>
                        <option value="" selected>Chọn khách hàng</option>
                        <?php foreach ($customer as $cus) : ?>
                            <option value="<?php print $cus->id ?>"><?php print $cus->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="bag_code">Mã bao</label>
                    <input type="text" class="form-control" id="bag_code" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="input-customer">Địa điểm đến</label>
                    <select class="form-control" name="city" id="input-customer" required>
                        <option>Tỉnh / Thành phố</option>
                    </select>
                    <!-- <input class="billing_address_1" name="city" type="hidden" value=""> -->
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="kg">Số cân</label>
                    <input type="text" name="kg" class="form-control" id="kg" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="box">Số kiện</label>
                    <input type="text" name="box" class="form-control" id="box" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="bag">Số bao</label>
                    <input type="text" name="bag" class="form-control" id="bag" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="m3">Số m3</label>
                    <input type="text" class="form-control" name="m3" id="m3" required>
                </div>
            </div>
            <div style="padding-bottom:10px;">
                <label for="scan">Mã vạch</label>
                <textarea id="scan" name="scan" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>

</div>
