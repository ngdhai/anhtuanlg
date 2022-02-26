<?php

use Illuminate\Support\Facades\DB;

only_admin_access(); ?>
<script>
    function delete_customer(id) {
        var are_you_sure = confirm("Bạn đã chắc chắn?");
        if (are_you_sure == true) {
            var data = {}
            data.id = id;
            var url = "<?php print api_url('delete_customer'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                mw.reload_module("customer");
                mw.reload_module("customer/list");
            });
        }
    }
</script>
<script>
    $(document).ready(function() {
        $("#add-customer-form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('add_customer'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                $('#myModal').modal('hide');
                mw.reload_module("customer");
                mw.reload_module("customer/list");
            });
        });


    });
</script>
<script>
    $(document).ready(function() {
        $("#search_form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('search'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                mw.reload_module("customer");
                mw.reload_module("customer/list");
            });
        });


    });
</script>
<script>
    $(document).ready(function() {
        $("#edit-customer-form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('edit_customer'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                $('#editModal').modal('hide');
                $('.modal-backdrop').hide()
                mw.reload_module("customer");
                mw.reload_module("customer/list");
            });
        });


    });
</script>
<script>
    $(document).ready(function() {
        $('select').on('change', function() {
            var name = $(this).attr("name");
            var data = name.replace("status-", "")

            var url = "<?php print api_url('update_status'); ?>";
            var post = $.post(url, "id=" + data);
            post.done(function(data) {
                mw.reload_module("customer");
                mw.reload_module("customer/list");
            });
        });

    });
</script>
<?php
if (!empty($_GET['search'])) {
    $data = DB::table('customer')->where('code', "LIKE", '%' . $_GET['search'] . '%')
    ->orWhere('name', "LIKE", '%' . $_GET['search'] . '%')->get();
    $search = $_GET['search'];
} else {
    $data = DB::table('customer')->get();
}

?>

<div style="text-align: center;">
    <h2>Danh sách khách hàng</h2>
</div>
<div style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container" style="display: inline-flex;">
        <div>
            <div class="input-group mb-0 prepend-transparent mx-2">
                <div class="input-group-prepend">
                    <span class="input-group-text px-1"><i class="mdi mdi-magnify"></i></span>
                </div>
                <form>
                    <input type="text" name="search" class="js-search-by-keywords-input   form-control form-control-sm" style="border-radius: 0;" value="<?php print(!empty($search) ? $search : "") ?>" placeholder="Tìm khách hàng">
                </form>
            </div>
        </div>
        
        <div>
            <button data-toggle="modal" data-target="#myModal" class="btn btn-outline-warning btn-sm ml-md-2 ml-1 "><?php _e('Thêm khách hàng'); ?></button>
        </div>
    </div>
</div>
<div>
    <table width="100%" class="mw-ui-table">
        <thead>
            <tr style="text-align: center;">
                <th>id</th>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <?php if ($data) : ?>
            <tbody>
                <?php foreach ($data as $item) : ?>
                    <tr style="text-align: center;">
                        <td><?php print $item->id ?></td>
                        <td><?php print $item->code ?></td>
                        <td><?php print $item->name ?></td>
                        <td>
                            <div style="display: inline-flex">
                                <div style="padding-right: 5px;">
                                    <button onclick='showModalEdit(<?php print json_encode($item); ?>)' class="btn btn-success btn-sm"><?php _e('Sửa'); ?></button>
                                </div>
                                <div>
                                    <a class="btn btn-danger btn-sm" href="javascript:delete_customer('<?php print $item->id ?>');">Xoá</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        <?php endif; ?>
    </table>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm khách hàng</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="add-customer-form">
                        <div style="padding-bottom: 10px;">
                            <label class="mw-ui-label">Mã khách hàng</label>
                            <input type="text" name="code" style="width:100% !important" required class="mw-ui-field" autocomplete="off">
                        </div>
                        <div style="padding-bottom: 10px;">
                            <label class="mw-ui-label">Tên khách hàng</label>
                            <input type="text" name="name" style="width:100% !important" required class="mw-ui-field" autocomplete="off">
                        </div>
                        <input type="submit" name="submit" value="Thêm" class="mw-ui-btn" />
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sửa thông tin khách hàng</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="edit-customer-form">
                        <input type="hidden" id="edit_id" name="edit_id">
                        <div style="padding-bottom: 10px;">
                            <label class="mw-ui-label">Mã khách hàng</label>
                            <input type="text" name="code_edit" id="code_edit" style="width:100% !important" required class="mw-ui-field" autocomplete="off">
                        </div>
                        <div style="padding-bottom: 10px;">
                            <label class="mw-ui-label">Tên khách hàng</label>
                            <input type="text" name="name_edit" id="name_edit" style="width:100% !important" required class="mw-ui-field" autocomplete="off">
                        </div>
                        <input type="submit" name="submit" value="Cập nhật" class="mw-ui-btn" />
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>

    </div>
</div>
<script>
    function showModalEdit(item) {
        $('#editModal').modal('show');
        document.getElementById("edit_id").value = item.id;
        document.getElementById("code_edit").value = item.code;
        document.getElementById("name_edit").value = item.name;
    }
</script>