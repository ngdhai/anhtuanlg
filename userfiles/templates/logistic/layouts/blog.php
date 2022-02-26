<?php

/*

type: layout
content_type: dynamic
name: Tin tức
position: 3
description: Tin tức

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="logistic_blog">
    <div class="container" id="blog-container">
        <div class="row">
            <section class="right-content col-lg-9 col-lg-push-3 collection">
                <div class="row">
                    <module type="breadcrumb"/>
                </div>
                <module data-type="posts" template="news" order-by="updated_at desc"/>
            </section>
            <section class="left-content col-lg-3 col-lg-pull-9 hidden-md-down">
                <div class="row">
                    <module type="layouts" template="sidebar-left"/>
                </div>
            </section>
        </div>
    </div>
</div>
<?php include template_dir() . "footer.php"; ?>
