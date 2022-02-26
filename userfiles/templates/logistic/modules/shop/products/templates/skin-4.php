<?php

/*

type: layout

name: Show 4 Items

description: Show 4 Items

*/


?>
<script>
    $(document).ready(function() {
        $('.owl-carousel-product').owlCarousel({
            loop: false,
            margin: 30,
            autoHeight: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                544: {
                    items: 1,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 5,
                }
            }
        });
    });
</script>

<section class="container">
    <h2 class="section-title ls-n-15 text-center pt-2 m-b-4">Shop By Category</h2>
    <?php if (!empty($data)) : ?>
        <div class="owl-carousel owl-theme nav-image-center show-nav-hover nav-outer cats-slider appear-animate owl-carousel-product" data-animation-name="fadeInUpShorter" data-animation-delay="200" data-animation-duration="1000">
            <?php foreach ($data as $item) : ?>
                <div class="product-category">
                    <a href="<?php print $item['link'] ?>">
                        <figure>
                            <img src="<?php print thumbnail($item['image']); ?>" width="273" height="273" alt="category" />
                        </figure>
                        <div class="category-content">
                            <h3><?php print $item['title'] ?></h3>
                            <span><mark class="count">8</mark> products</span>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>