<div class="container" style="padding-top: 40px;">
    <div class="blog-sidebar-widgets">
        <div class="searchbar-form-section">
            <?php $search = !empty($_GET['search'])?$_GET['search']:"" ?>
            <form action="<?php print site_url() ?>ma-van-don">
                <div class="searchbar">
                    <input name="search" type="text" value="<?php print $search ?>" placeholder="TRA CỨU MÃ VẬN ĐƠN">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>