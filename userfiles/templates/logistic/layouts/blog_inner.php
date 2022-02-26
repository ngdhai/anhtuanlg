<?php include THIS_TEMPLATE_DIR . "header.php"; ?>

<?php
$post = get_content_by_id(CONTENT_ID);
$picture = get_picture(CONTENT_ID);

if (!$picture) {
    $picture = '';
}

$itemData = content_data($post['id']);

?>
<div class="container" style="padding-top:20px;padding-bottom:20px">
    <module type="breadcrumb" />
</div>
<div>
    <div class="container">
        <div class="row">

            <!--  sidebar section start  -->
            <div class="col-xl-3 col-lg-3 ">
                <div class="sidebar">
                    <div class="category-sidebar">
                        <ul>
                            <li><a href="">Tin tức</a></li>
                            <li><a href="">Dịch vụ</a></li>
                            <li><a href="">Giá cước</a></li>
                            <li><a href="">Hướng dẫn</a></li>
                            <li><a href="">Tuyển dụng</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-9 edit" rel="blog_inner" field="blog_inner-<?php print CONTENT_ID; ?>">
                <div class="service-details-conten" id="blog-content-<?php print CONTENT_ID; ?>">
                    <div class="img-wrapper">
                        <img src="<?php print $picture; ?>" alt="" />
                    </div>
                    <div class="service-details-desc">
                        <h2 class="title"><?php echo $post['title']; ?></h2>

                    </div>

                </div>
                <div class="article-content">
                    <?php echo $post['content']; ?>
                </div>
            </div>
            <!--  sidebar section end  -->
        </div>
    </div>
</div>

<?php include TEMPLATE_DIR . "footer.php"; ?>