<script>
    $(document).ready(function() {
        $("#scan-code").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('update_status_vn'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                console.log(data)
                mw.reload_module("scan_codeVN");
                alert("Lưu thành công")
            });
        });
    });
</script>
<div class="card style-1 bg-light">
    <div class="card-header" style="margin-bottom: 20px;">
        <h5>
            <strong>Bắn mã vạch nhận hàng</strong>
        </h5>
        <a href="<?php print admin_url('view:modules/load_module:scan_codeVN'); ?>" class="btn btn-xs btn-primary">Danh sách</a>
    </div>

    <div class="card-body pt-3" style="padding-top: 20px;">
        <form id="scan-code">
            <div style="padding-bottom:10px;">
                <label for="scan">Mã vạch</label>
                <textarea id="scan" name="scan" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Xác nhận</button>
        </form>
    </div>

</div>
