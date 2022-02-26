<?php

use Illuminate\Support\Facades\DB;

    $bag = DB::table('bags')->where('id', $params['edit-bag'])->first();
    $bill_code = DB::table('bill_code')->where('bag_id',$bag->id)->pluck('code');
    $string_code = implode("\r\n", $bill_code->toArray());
    
?>
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
                $this.html('<option value="<?php print $bag->address_to ?>"><?php print $bag->address_to ?>' + stc)
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
            var url = "<?php print api_url('edit_bag'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                mw.reload_module("scan_codeTQ");
                alert("Cập nhật thành công")
            });
        });
    });
</script>
<?php



$customer = DB::table('customer')->get(); ?>
<div class="card style-1 bg-light">
    <div class="card-header" style="margin-bottom: 20px;">
        <h5>
            <strong>Cập nhật bao <?php print($bag->bag_id) ?></strong>
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
                            <option value="<?php print $cus->id ?>" <?php print ($cus->id=$bag->customer_id)?"selected":"" ?> ><?php print $cus->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php print $bag->id ?>">
                <div class="form-group col-md-4">
                    <label for="bag_code">Mã bao</label>
                    <input type="text" class="form-control" value="<?php print($bag->bag_id) ?>" id="bag_code" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label for="input-customer">Địa điểm đến</label>
                    <select class="form-control" name="city" id="input-customer" required>
                        <option><?php print $bag->address_to ?></option>
                    </select>
                    <!-- <input class="billing_address_1" name="city" type="hidden" value=""> -->
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="kg">Số cân</label>
                    <input type="text" name="kg" class="form-control" value="<?php print $bag->kg ?>" id="kg" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="box">Số kiện</label>
                    <input type="text" name="box" class="form-control" value="<?php print $bag->number_of_case ?>" id="box" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="bag">Số bao</label>
                    <input type="text" name="bag" class="form-control" value="<?php print $bag->number_of_bag ?>" id="bag" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="m3">Số m3</label>
                    <input type="text" class="form-control" name="m3" value="<?php print $bag->m3 ?>" id="m3" required>
                </div>
            </div>
            <div style="padding-bottom:10px;">
                <label for="scan">Mã vạch</label>
                <textarea id="scan" name="scan" cols="30" rows="10"><?php print $string_code ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>

</div>
