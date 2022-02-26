<?php

/*

type: layout

name: Count up

description: Count up

*/

?>
<!-- data -->
<script>
    $(document).ready(function() {
        $(".count").counterUp({
            delay: 10,
            time: 500,
        });
    });
</script>
<div class="counter-area p-relative pb-90 edit safe-mode nodrop" >
    <div class="container">
        <div class="row p-relative">
            <div class="col-lg-3 col-md-6 col-sm-12 padding-couter">
                <div class="wow">
                    <div class="flex-container">
                        <div class="flex-item-left safe-element">
                            <img src="<?php print template_url(); ?>assets/img/truck-icon.png" width="80px" alt="" />
                        </div>
                        <div class="flex-item-right counter p-relative">
                            <span class="count safe-element">5878</span>
                            <p>Kho chứa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 padding-couter">
                <div class="wow">
                    <div class="flex-container">
                        <div class="flex-item-left safe-element" >
                            <img src="<?php print template_url(); ?>assets/img/truck-icon.png" width="80px" alt="" />
                        </div>
                        <div class="flex-item-right counter p-relative">
                            <span class="count safe-element">5878</span>
                            <p>Tiết kiệm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 padding-couter">
                <div class="wow">
                    <div class="flex-container">
                        <div class="flex-item-left safe-element">
                            <img src="<?php print template_url(); ?>assets/img/truck-icon.png" width="80px" alt="" />
                        </div>
                        <div class="flex-item-right counter p-relative">
                            <span class="count safe-element">5878</span>
                            <p>Đơn hàng</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 padding-couter">
                <div class="wow">
                    <div class="flex-container">
                        <div class="flex-item-left safe-element">
                            <img src="<?php print template_url(); ?>assets/img/truck-icon.png" width="80px" alt="" />
                        </div>
                        <div class="flex-item-right counter p-relative">
                            <span class="count safe-element">5878</span>
                            <p>Chu đáo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end data-->