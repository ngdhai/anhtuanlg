<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout
*/


?>

<?php include template_dir() . "header.php"; ?>
<module type="layouts" template="search"/>
<module type="layouts" template="welcome"/>
<module type="layouts" template="countUp"/>
<module type="layouts" template="about"/>
<module type="testimonials" template="default"/>
<module type="pictures" template="default"/>
<module type="testimonials" template="box"/>
<module type="posts" template="home"/>


<!-- Google Map -->
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Anh%20Tuan%20Logistics,%20Đường%20Nguyễn%20Văn%20Cừ,%20Gia%20Thụy,%20Long%20Biên,%20Hà%20Nội,%20Việt%20Nam&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br />
    <style>
      .mapouter {                                                                             
        position: relative;
        text-align: right;
        height: 500px;
        width: 100%;
      }
    </style><a href="https://www.embedgooglemap.net">embed google map wordpress</a>
    <style>
      .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 500px;
        width: 100%;
      }
    </style>
  </div>
</div>
<!-- End Google Map -->

<?php include template_dir() . "footer.php"; ?>