<?php

/*

type: layout

name: Skin 1

description: Skin 1

*/

?>

<?php if ($social_links_has_enabled == false) {
    print lnotif('Social links');
} ?>
<div class="footer-right">
    <div class="social-icons">
        <?php if ($facebook_enabled) { ?>
                <a href="//facebook.com/<?php print $facebook_url; ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                <a href="//facebook.com/<?php print $facebook_url; ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                <a href="//facebook.com/<?php print $facebook_url; ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram" class="social-icon social-instagram icon-instagram" target="_blank"></a>
        <?php } ?>
    </div><!-- End .social-icons -->
</div>
<!-- <ul class="social-list "> -->
