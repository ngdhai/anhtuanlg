<?php

/*

type: layout

name: List product

description: List product

*/

use Illuminate\Support\Facades\DB;

?>

<h2 class="section-title ls-n-15 text-center pb-2 m-b-4">Popular Products</h2>

<div class="row py-4">
    <?php if (!empty($data)) : ?>
        <?php foreach ($data as $item) : ?>
            <div class="col-6 col-sm-4 col-md-3 col-xl-2 appear-animate" data-animation-name="fadeIn" data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="<?php print $item['url']; ?>">
                            <img src="<?php print thumbnail($item['image']); ?>" width="273" height="273" alt="product" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="<?php print $item['url']; ?>"><?php print $item['title'] ?></a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->

                        <div class="price-box">
                            <?php if ($show_fields == false or in_array('price', $show_fields)) : ?>
                                <?php if (isset($item['prices']) and is_array($item['prices'])) { ?>
                                    <?php $prices = get_product_prices($item['id'], true);
                                    $price_offer = DB::table('content_data')
                                        ->where('rel_id', $item['id'])
                                        ->where('field_name', '=', "special_price")->first();

                                    ?>
                                    <?php if (($prices[0]) && is_array($prices) && !empty($prices[0]['value'])) { ?>
                                        <?php if (!empty($prices[0]['original_value'])) : ?>
                                            <span class="old-price"><?php print currency_format($prices[0]['original_value']); ?></span>
                                        <?php endif; ?>
                                        <?php if (empty($prices[0]['original_value'])) : ?>
                                            <span class="old-price"><?php print currency_format($prices[0]['value']); ?></span>
                                        <?php else : ?>
                                            <span class="product-price"><?php print currency_format($price_offer->field_value); ?></span>
                                        <?php endif; ?>
                                        
                                    <?php } ?>

                                <?php } ?>
                            <?php endif; ?>
                        </div>
                    </div><!-- End .product-details -->
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>