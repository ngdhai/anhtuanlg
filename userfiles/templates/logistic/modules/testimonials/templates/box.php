<?php

/*

type: layout

name: Box

description: Box

*/

?>


<!--  testimonial section start  -->
<script>
    $(document).ready(function() {
        $(".testimonial-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: true,
            nav: false,
            mouseDrag: true,
            margin: 30,
        });
    });
</script>
<!-- say -->
<div class="testimonial-section home-2 testimonial-bg-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-box">
                    <div class="testimonial-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <?php if (isset($data)) : ?>
                            <?php foreach ($data as $item) { ?>
                                <div class="item" style="text-align:center">
                                    <div class="circle" style="margin: 0 auto;margin-bottom:20px">
                                        <span><span class="flaticon-quote-left"></span></span>
                                    </div>
                                    <div class="single-testimonial">
                                        <p>
                                            <?php print $item['content']; ?>
                                        </p>
                                        <div class="incline-line"></div>
                                        <h5><?php print $item['name']; ?></h5>
                                        <span><?php print $item['client_role']; ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-overlay"></div>
</div>
<!-- end say -->