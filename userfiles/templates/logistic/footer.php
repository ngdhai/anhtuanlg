 <!--   footer section start    -->
 <footer>
   <div class="top-footer">
     <div class="container">
       <div class="row">
         <div class="col-xl-4 col-lg-4">
           <div class="logo-wrapper">
             <module type="logo" template="default" id="logo" rel="global" field="logo" />
           </div>
           <p>
             Anh Tuấn Logistics <br>
             Dịch vụ chuyển phát nhanh
           </p>
         </div>
         <div class="offset-xl-1 col-md-4 col-xl-2 col-lg-2">
           <h4>Useful Links</h4>
           <module type="menu" template="footer" />
         </div>
         <div class="col-xl-2 col-md-4 col-lg-2">
           <h4>Services</h4>
           <ul class="userful-links">
             <li><a href="#">Order</a></li>
           </ul>
         </div>
         <div class="col-md-4 col-xl-3 col-lg-4">
           <h4>Liên hệ</h4>
           <div class="footer-contact">
             <div class="contact-info">
               <div class="icon-wrapper">
                 <i class="flaticon-placeholder"></i>
               </div>
               <p>Số 44 ngõ 548, 53 Đ. Nguyễn Văn Cừ, Gia Thụy, Long Biên, Hà Nội, Việt Nam</p>
             </div>
             <div class="contact-info">
               <div class="icon-wrapper"><i class="flaticon-call"></i></div>
               <p>+094 319 6162</p>
             </div>
             <div class="contact-info">
               <div class="icon-wrapper"><i class="flaticon-email"></i></div>
               <p>Info@gmail.com</p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </footer>
 <!--   footer section end    -->

 <!-- preloader section start -->
 <div class="loader-container loader-fadeout">
   <span class="loader">
     <span class="loader-inner"></span>
   </span>
 </div>
 <!-- preloader section end -->

 <!-- back to top area start -->
 <div class="back-to-top">
   <i class="fas fa-chevron-up"></i>
 </div>
 <!-- back to top area end -->

 <!-- popper js -->
 <script src="<?php print template_url(); ?>assets/js/popper.min.js"></script>
 <!-- bootstrap js -->
 <script src="<?php print template_url(); ?>assets/js/bootstrap.min.js"></script>
 <!-- owl carousel js -->
 <script src="<?php print template_url(); ?>assets/js/owl.carousel.min.js"></script>
 <!-- isotope js -->
 <script src="<?php print template_url(); ?>assets/js/isotope.pkgd.min.js"></script>
 <!-- slicknav js -->
 <script src="<?php print template_url(); ?>assets/js/jquery.slicknav.min.js"></script>
 <!-- wow js -->
 <script src="<?php print template_url(); ?>assets/js/wow.min.js"></script>
 <!-- main js -->
 <script src="<?php print template_url(); ?>assets/js/main.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
 <script>
   $(document).ready(function() {
     $('.image-header').owlCarousel({
       margin: 0,
       loop: true,
       autoplay: true,
       singleItem: true,
       items: 1,
       dots: false
     })
   })
 </script>
 <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset"></div>
 <iframe id="nr-ext-rsicon" style="
        position: absolute;
        display: none;
        width: 50px;
        height: 50px;
        z-index: 2147483647;
        border-style: none;
        background: transparent;
      "></iframe>
 </body>

 </html>