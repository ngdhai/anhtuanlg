<?php

/*

type: layout

name: Home blog

description: Home blog

*/
?>
<!--   news section start    -->
<div class="news-section">
    <div class="container">
        <span class="title">Tin tức</span>
        <h2 class="subtitle">Bài viết mới nhất</h2>
        <div class="row">
            <?php if (!empty($data)) : ?>
                <?php foreach ($data as $item) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-news wow fadeInRight">
                            <img src="<?php print $item['image'] ?>" alt="" />
                            <div class="news-txt">
                                <span class="date"><?php print (date("F d \, Y",strtotime($item["created_at"]))); ?> - BY Admin</span>
                                <a href="<?php print $item['link'] ?>" class="title">
                                    <h3>
                                        <?php print $item['title'] ?>
                                    </h3>
                                </a>
                                <a class="readmore" href="<?php print $item['link'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
    </div>
</div>
<!--   news section end    -->