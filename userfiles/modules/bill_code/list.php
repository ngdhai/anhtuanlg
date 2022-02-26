<?php

use Illuminate\Support\Facades\DB;

only_admin_access(); ?>
<script>
    function delete_bill_code(id) {
        var are_you_sure = confirm("Bạn đã chắc chắn?");
        if (are_you_sure == true) {
            var data = {}
            data.id = id;
            var url = "<?php print api_url('delete_bill_code'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                mw.reload_module("bill_code");
                mw.reload_module("bill_code/list");
            });
        }
    }
</script>
<script>
    $(document).ready(function() {
        $("#add-bill_code-form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('save_bill_code'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                $('#myModal').modal('hide');
                mw.reload_module("bill_code");
                mw.reload_module("bill_code/list");
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
                mw.reload_module("bill_code");
                mw.reload_module("bill_code/list");
            });
        });


    });
</script>
<script>
    $(document).ready(function() {
        $("#edit-bill_code-form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('edit_bill_code'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                $('#editModal').modal('hide');
                $('.modal-backdrop').hide()
                mw.reload_module("bill_code");
                mw.reload_module("bill_code/list");
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
                mw.reload_module("bill_code");
                mw.reload_module("bill_code/list");
            });
        });

    });
</script>
<?php 
    if(!empty($_GET['search'])){
        $data = DB::table('bill_code')->where('code',"LIKE",'%'.$_GET['search'].'%')->get(); 
        $search = $_GET['search'];
    }else{
        $data = DB::table('bill_code')->get(); 
    }

?>

<div style="text-align: center;">
    <h2>Danh sách mã vận đơn</h2>
</div>
<div style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container" style="display: inline-flex;">
        <div style="width: 80%;">
            <div class="input-group mb-0 prepend-transparent mx-2">
                <div class="input-group-prepend">
                    <span class="input-group-text px-1"><i class="mdi mdi-magnify"></i></span>
                </div>
                <form>
                    <input type="text" name="search" class="js-search-by-keywords-input   form-control form-control-sm" style="border-radius: 0;" value="<?php print (!empty($search)?$search:"")?>" placeholder="Tìm mã">
                </form>
            </div>
        </div>
        <div style="width: 20%;">
            <button data-toggle="modal" data-target="#myModal" class="btn btn-outline-warning btn-sm ml-md-2 ml-1 "><?php _e('Thêm mã vận đơn'); ?></button>
        </div>
    </div>
</div>
<div>
    <table width="100%" class="mw-ui-table">
        <thead>
            <tr style="text-align: center;">
                <th>id</th>
                <th>Code</th>
                <th>Nhận hàng TQ</th>
                <th>Đóng bao</th>
                <th>Xuất kho</th>
                <th>Thông quan</th>
                <th>Nhận hàng VN</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <?php if ($data) : ?>
            <tbody>
                <?php foreach ($data as $item) : ?>
                    <tr style="text-align: center;">
                        <td><?php print $item->id ?></td>
                        <td><?php print $item->code ?></td>
                        <td><?php print $item->created_at ?></td>
                        <td><?php print $item->time2 ?></td>
                        <td><?php print $item->time3 ?></td>
                        <td><?php print $item->time4 ?></td>
                        <td><?php print $item->time5 ?></td>
                        <td>
                            <?php if ($item->status == 0) : ?>
                                <select name="status-<?php print $item->id ?>">
                                    <option value="0">Đang xử lý</option>
                                    <option value="1">Hoàn thành</option>
                                </select>
                            <?php else : ?>
                                <select style="background-color: green;color:white" disabled name="status-<?php print $item->id ?>">
                                    <option value="1">Hoàn thành</option>
                                </select>
                            <?php endif ?>

                        </td>
                        <td>
                            <div style="display: inline-flex">
                                <div style="padding-right: 5px;">
                                    <button onclick='showModalEdit(<?php print json_encode($item); ?>)' class="btn btn-success btn-sm"><?php _e('Sửa'); ?></button>
                                </div>
                                <div>
                                    <a class="btn btn-danger btn-sm" href="javascript:delete_bill_code('<?php print $item->id ?>');">Xoá</a>
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
                <h4 class="modal-title">Thêm mã vận đơn</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="add-bill_code-form">
                    <label class="mw-ui-label">Mã vận đơn</label>
                    <textarea id="scan" name="code" cols="30" rows="10"></textarea>
                    <div style="padding-top: 20px;padding-bottom: 20px;">
                        <label class="mw-ui-label">Thời gian thiết lập</label>
                        <div style="display: inline-flex">
                            <div style="margin-left: 20px;;margin-right: 20px;">Đóng bao: 4 giờ sau</div>
                            <div style="margin-left: 20px;;margin-right: 20px">Xuất kho: 5 giờ sau</div>
                            <div style="margin-left: 20px;;margin-right: 20px">Thông quan: 6 giờ sau</div>
                        </div>
                    </div>

                    <input type="submit" name="submit" value="Thêm" class="mw-ui-btn" />
                </form>
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
                <h4 class="modal-title">Sửa mã vận đơn</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="edit-bill_code-form">
                    <input type="hidden" id="edit_id" name="edit_id">
                    <label class="mw-ui-label">Mã vận đơn</label>
                    <input type="text" name="code_edit" id="code_edit" required class="mw-ui-field" autocomplete="off">
                    <div style="padding-top: 20px;padding-bottom: 20px;">
                        <label class="mw-ui-label">Thời gian nhận hàng TQ</label>
                        <input type="date" name="datetime1" id="datetime1">
                        <input type="time" id="time1" name="time1">
                    </div>
                    <div style="padding-top: 20px;padding-bottom: 20px;" id="time_get_product">
                        <label class="mw-ui-label">Thời gian nhận hàng VN</label>
                        <input type="date" name="datetime5" id="datetime5">
                        <input type="time" id="time5" name="time5">
                    </div>
                    <div style="padding-top: 20px;padding-bottom: 20px;">
                        <label class="mw-ui-label">Thời gian thiết lập</label>
                        <div style="display: inline-flex">
                            <div style="margin-left: 20px;;margin-right: 20px;">Đóng bao: 4 giờ sau</div>
                            <div style="margin-left: 20px;;margin-right: 20px">Xuất kho: 5 giờ sau</div>
                            <div style="margin-left: 20px;;margin-right: 20px">Thông quan: 6 giờ sau</div>
                        </div>
                    </div>

                    <input type="submit" name="submit" value="Cập nhật" class="mw-ui-btn" />
                </form>
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
        var date = new Date();
        var created_at = item.created_at
        $('#time_get_product').hide();

        var objDateCreated = new Date(item.created_at);
        document.getElementById("edit_id").value = item.id;
        document.getElementById("code_edit").value = item.code;
        document.getElementById("datetime1").value = objDateCreated.getFullYear() + "-" + ((objDateCreated.getMonth() + 1) < 10 ? "0" + (objDateCreated.getMonth() + 1) : (objDateCreated.getMonth() + 1)) + "-" + (objDateCreated.getDate() < 10 ? "0" + objDateCreated.getDate() : objDateCreated.getDate());
        document.getElementById("time1").value = (objDateCreated.getHours() < 10 ? "0" + objDateCreated.getHours() : objDateCreated.getHours()) + ":" + (objDateCreated.getMinutes() < 10 ? "0" + objDateCreated.getMinutes() : objDateCreated.getMinutes());
        if (item.status == 1) {
            $('#time_get_product').show();
            var objDate5 = new Date(item.time5);
            document.getElementById("datetime5").value = objDate5.getFullYear() + "-" + ((objDate5.getMonth() + 1) < 10 ? "0" + (objDate5.getMonth() + 1) : (objDate5.getMonth() + 1)) + "-" + (objDate5.getDate() < 10 ? "0" + objDate5.getDate() : objDate5.getDate());
            document.getElementById("time5").value = (objDate5.getHours() < 10 ? "0" + objDate5.getHours() : objDate5.getHours()) + ":" + (objDate5.getMinutes() < 10 ? "0" + objDate5.getMinutes() : objDate5.getMinutes());
        }


    }
</script>