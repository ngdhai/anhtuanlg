<?php

/*

type: layout

name: Default

description: Default

*/

?>


<!--  testimonial section start  -->
<script>
    $(document).ready(function() {
        $(".testimonial-carousel-3").owlCarousel({
            items: 2,
            loop: true,
            autoplay: true,
            dots:  true,
            nav: false,
            mouseDrag: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
            },
        });
    });
</script>
<div class="testimonial-section home-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="title">Khách hàng</span>
                <h2 class="subtitle">NÓI GÌ VỀ CHÚNG TÔI</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel-3 owl-carousel owl-theme owl-loaded owl-drag">
                    <?php if (isset($data)) : ?>
                        <?php foreach ($data as $item) { ?>
                            <div class="item">
                                <div class="single-testimonial">
                                    <div class="img-wrapper">
                                        <img src="<?php print thumbnail($item['client_picture'], 200, 200, true); ?>" alt="" />
                                    </div>
                                    <div class="client-desc">
                                        <p class="icon-wrapper">
                                            <i class="flaticon-quote-left"></i>
                                        </p>
                                        <p class="comment">
                                            <?php print $item['content']; ?>
                                        </p>
                                        <h5 class="name"><?php print $item['name']; ?></h5>
                                        <p class="rank"><?php print $item['client_role']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  testimonial section end  -->