<?php

use Illuminate\Support\Facades\DB;

$scanTQ = url_param('scanTQ');
$editBag = url_param('edit-bag');

if ($scanTQ !== false) {
    print('<module type="scan_codeTQ/scanTQ" />');
    return;
}
if ($editBag !== false) {
    print('<module type="scan_codeTQ/edit-bag" edit-bag="' . $editBag . '" />');
    return;
}
?>
<?php
if (!empty($_GET['search'])) {
    $bill_code = DB::table('bill_code')->where('code', "=", trim($_GET['search']))->whereNotNull('bag_id')->first();
    
    $data = null;
    if (!empty($bill_code)) {
        $id_bag = $bill_code->bag_id;
        $data = DB::table('bags')
            ->join(DB::raw("users"), "users.id", "=", "bags.created_by")
            ->leftJoin(DB::raw("users as us"), "us.id", "=", "bags.updated_by")
            ->join(DB::raw("customer"), "customer.id", "=", "bags.customer_id")
            ->select("customer.code", "customer.name", "bags.*", "users.username","us.username as update_by")
            ->where('bags.id', $id_bag)
            ->select("customer.code", "customer.name", "bags.*", "users.username","us.username as update_by")
            ->get();
    }

    $search = $_GET['search'];
} else {
    
    $data = DB::table('bags')
        ->join(DB::raw("users"), "users.id", "=", "bags.created_by")
        ->leftJoin(DB::raw("users as us"), "us.id", "=", "bags.updated_by")
        ->join(DB::raw("customer"), "customer.id", "=", "bags.customer_id")
        ->select("customer.code", "customer.name", "bags.*", "users.username","us.username as update_by")
        ->get();
}


?>

<div style="text-align: center;">
    <h2>Quản lý hàng hoá</h2>
</div>
<div style="padding-top: 20px;padding-bottom: 20px;">
    <div style="display: inline-flex;">
        <div>
            <div class="input-group mb-0 prepend-transparent mx-2">
                <div class="input-group-prepend">
                    <span class="input-group-text px-1"><i class="mdi mdi-magnify"></i></span>
                </div>
                <form>
                    <input type="text" name="search" class="js-search-by-keywords-input   form-control form-control-sm" style="border-radius: 0;" value="<?php print(!empty($search) ? $search : "") ?>" placeholder="Tìm mã">
                </form>
            </div>
        </div>
       
        <div>
            <a href="<?php print admin_url('view:modules/load_module:scan_codeTQ/scanTQ'); ?>" class="btn btn-primary btn-sm">
                <?php _e("Quét mã"); ?>
            </a>
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
                <th>Mã bao</th>
                <th>Số cân</th>
                <th>Số kiện</th>
                <th>Số bao</th>
                <th>Số m3</th>
                <th>Điểm đến</th>
                <th>Ngày tạo</th>
                <th>Ngày nhận</th>
                <th>Người tạo</th>
                <th>Người sửa</th>
                <th>Cập nhật</th>
            </tr>
        </thead>
        <?php if (!empty($data)) : ?>
            <tbody>
                <?php foreach ($data as $item) : ?>
                    <tr style="text-align: center;">
                        <td><?php print $item->id ?></td>
                        <td><?php print $item->code ?></td>
                        <td><?php print $item->name ?></td>
                        <td><?php print $item->bag_id ?></td>
                        <td><?php print $item->kg ?></td>
                        <td><?php print $item->number_of_case ?></td>
                        <td><?php print $item->number_of_bag ?></td>
                        <td><?php print $item->m3 ?></td>
                        <td><?php print $item->address_to ?></td>
                        <td><?php print $item->created_at ?></td>
                        <td><?php print $item->date ?></td>
                        <td><?php print $item->username ?></td>
                        <td><?php print $item->update_by ?></td>
                        <td>
                            <div style="display: inline-flex">
                                <div>
                                    <a class="btn btn-success btn-sm" href="<?php print admin_url('view:modules/load_module:scan_codeTQ/edit-bag:' . $item->id); ?>">Sửa</a>
                                </div>
                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        <?php endif; ?>
    </table>
</div>
