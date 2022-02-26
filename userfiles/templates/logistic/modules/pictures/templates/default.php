<?php

/*

type: layout

name: Default

description: Default Picture List

*/

?>
<script>
    $(document).ready(function() {
        $(".partner-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            dots: false,
            margin: 30,
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 3,
                },
                992: {
                    items: 5,
                },
            },
        });
    });
</script>
<div class="partner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="partner-carousel owl-carousel owl-theme border-bottom border-top-lg-0 border-top owl-loaded owl-drag">
                    <?php if (is_array($data)) : ?>
                        <?php $rand = uniqid(); ?>
                        <?php $count = -1;
                        foreach ($data as $item) : ?>
                            <?php $count++; ?>
                            <div class="item">
                                <div class="single-partner-item">
                                    <div class="outer">
                                        <div class="inner">
                                            <img src="<?php print $item['filename']; ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;  ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>