<?php

/*

type: layout

name: Recent posts

description: Recent posts

*/
?>

<div class="widget widget-post">
    <h4 class="widget-title">Recent Posts</h4>

    <ul class="simple-post-list">
        <?php if (!empty($data)) : ?>
            <?php foreach ($data as $item) : ?>
                <li>
                    <div class="post-media">
                        <a href="single.html">
                            <img src="<?php print $item['image'] ?>" alt="Post">
                        </a>
                    </div><!-- End .post-media -->
                    <div class="post-info">
                        <a href="single.html"><?php print $item['title'] ?></a>
                        <div class="post-meta"> <?php print (date("F d \, Y",strtotime($item["created_at"]))); ?> </div><!-- End .post-meta -->
                    </div><!-- End .post-info -->
                </li>
            <?php endforeach; ?>
        <?php endif ?>
    </ul>
</div><!-- End .widget -->