 <!-- Footer -->
 <footer id="footer" class="clearfix bg-style ft-home-1">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-6 col-12">
                 <div class="widget widget-logo">
                     <div class="logo-footer" id="logo-footer">
                         <a href="index.html">
                             <img id="logo_footer" src="{{ asset('quickvote/assets/images/logo/logo_dark.png') }}"
                                 alt="Quickvote" width="151" height="45"
                                 data-retina="{{ asset('quickvote/assets/images/logo/logo.png') }}" data-width="151"
                                 data-height="45">
                         </a>
                     </div>
                     <p class="sub-widget-logo">QuickVote is an efficient voting system that allows event organizers
                         to set-up their PAID OR FREE contests for their events. Our product gives a wide range of local
                         and global users the opportunity to participate and cast their votes effortlessly from any part
                         of the world.</p>
                     <div class="widget-social">
                         <ul>
                             <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                             <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                             <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                 <div class="widget widget-menu menu-marketplace">
                     <h5 class="title-widget">Quick Links</h5>
                     <ul>
                         <li><a href="/">Homepage <i
                                     style="padding:3px; color:rgb(255, 123, 0);"class="fa fa-caret-right"
                                     aria-hidden="true"></i> </a></li>
                         <li><a href="{{ route('about.show') }}">About Us <i
                                     style="padding:3px; color:gold;"class="fa fa-caret-right"
                                     aria-hidden="true"></i></a></li>
                         <li><a href="{{ route('admin.profile') }}">My Dashboard <i
                                     style="padding:3px;color:gold;"class="fa fa-caret-right"
                                     aria-hidden="true"></i></a></li>
                         <li><a href="/">Privacy Policy <i
                                     style="padding:3px;color:gold;"class="fa fa-caret-right"
                                     aria-hidden="true"></i></a></li>
                         <li><a href="/">Legal <i style="padding:3px; color:gold;"class="fa fa-caret-right"
                                     aria-hidden="true"></i></a></li>
                         <li><a href="{{ route('contact.show') }}">Contact Us <i
                                     style="padding:3px; color:gold;"class="fa fa-caret-right"
                                     aria-hidden="true"></i></a></li>

                     </ul>







                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                 <div class="widget widget-menu menu-supports">
                     <h5 class="title-widget">Contests</h5>
                     <ul>
                         <li><a href="{{ route('contest.create') }}">Create Contest <i
                                     style="padding:3px; color:gold;"class="fa fa-caret-right"
                                     aria-hidden="true"></i></a></li>
                         <li><a href="{{ route('contest.archive') }}">Live Contests <i
                                     style="padding:3px; color:gold;"class="fa fa-caret-right"
                                     aria-hidden="true"></i></a>
                         </li>

                     </ul>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                 <div class="widget widget-post">
                     <h5 class="title-widget">Get in Touch</h5>
                     <p style="font-size: 15px;font-weight:bold;margin-bottom:8px;"><i style="color:rgb(232, 166, 23);"
                             class="fa fa-phone-square"></i> 080
                         536 82130
                     </p>
                     <p style="font-size: 15px;font-weight:bold;margin-bottom:8px;"><i style="color:rgb(232, 166, 23);"
                             class="fa fa-envelope"></i>
                         info@quickvote.ng</p>
                     <p style="font-size: 15px;font-weight:bold;margin-bottom:8px;"><i style="color:rgb(232, 166, 23);"
                             class="fa fa-map-marker"></i> No 16
                         Banjul Street, Wuse II - Abuja,
                         Nigeria</p>

                 </div>
             </div>
         </div>
     </div>
 </footer><!-- /#footer -->

 <!-- Bottom -->
 <div class="bottom">
     <div class="container">
         <div class="bottom-inner" style="margin-bottom: 40px; margin-top:20px;">
             Copyright © 2022 QuickVote | by <a href="http://toastnigeria.com/" target="_blank">Toast Technologies
                 Limited</a>
         </div>
     </div>
 </div>

 </div>
 <!-- /#page -->
 </div>
 <!-- /#wrapper -->

 <a id="scroll-top"></a>



 <!-- Javascript -->
 <script src="{{ asset('quickvote/assets/js/jquery.min.js') }}"></script>
 <script src="{{ asset('quickvote/assets/js/jquery.easing.js') }}"></script>
 <script src="{{ asset('quickvote/assets/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('quickvote/assets/js/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('quickvote/assets/js/swiper.js') }}"></script>

 <script src="{{ asset('quickvote/assets/js/plugin.js') }}"></script>
 <script src="{{ asset('quickvote/assets/js/count-down.js') }}"></script>
 <script src="{{ asset('quickvote/assets/js/shortcodes.js') }}"></script>
 <script src="{{ asset('quickvote/assets/js/main.js') }}"></script>
 <script src="{{ asset('backend/assets/js/app.js') }}"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 <script>
     @if (Session::has('message'))
         var type = "{{ Session::get('alert-type', 'info') }}"
         switch (type) {
             case 'info':
                 toastr.info(" {{ Session::get('message') }} ");
                 break;

             case 'success':
                 toastr.success(" {{ Session::get('message') }} ");
                 break;

             case 'warning':
                 toastr.warning(" {{ Session::get('message') }} ");
                 break;

             case 'error':
                 toastr.error(" {{ Session::get('message') }} ");
                 break;
         }
     @endif
 </script>
 @include('sweetalert::alert')
 </body>

 </html>
