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
                     <h5 class="title-widget">Marketplace</h5>
                     <ul>
                         <li><a href="item.html">Gaming </a></li>
                         <li><a href="item.html">Product </a></li>
                         <li><a href="item.html">All NFTs</a></li>
                         <li><a href="item.html">Social Network</a></li>
                         <li><a href="item.html">Domain Names</a></li>
                         <li><a href="item.html">Collectibles</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                 <div class="widget widget-menu menu-supports">
                     <h5 class="title-widget">Supports</h5>
                     <ul>
                         <li><a href="contact.html">Setting & Privacy </a></li>
                         <li><a href="contact.html">Help & Support </a></li>
                         <li><a href="item.html">Live Auctions</a></li>
                         <li><a href="item-details.html"> Item Details</a></li>
                         <li><a href="contact.html"> 24/7 Supports</a></li>
                         <li><a href="blog.html">Blog</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                 <div class="widget widget-post">
                     <h5 class="title-widget">News & Post</h5>
                     <ul class="post-new">
                         <li>
                             <div class="post-img">
                                 <img src="{{ asset('quickvote/assets/images/post/post-recent-new-4.jpg') }}"
                                     alt="Post New">
                             </div>
                             <div class="post-content">
                                 <h6 class="title"><a href="blog-details.html">Roll Out New Features Without
                                         Hurting Loyal Users</a></h6>
                                 <a href="blog-details.html" class="post-date"><i class="far fa-calendar-week"></i>
                                     25 JAN 2022</a>
                             </div>
                         </li>
                         <li>
                             <div class="post-img">
                                 <img src="{{ asset('quickvote/assets/images/post/post-recent-new-5.jpg') }}"
                                     alt="Post New">
                             </div>
                             <div class="post-content">
                                 <h6 class="title"><a href="blog-details.html">An Overview The Most Comon UX
                                         Design Deliverables</a></h6>
                                 <a href="blog-details.html" class="post-date"><i class="far fa-calendar-week"></i>
                                     25 JAN 2022</a>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer><!-- /#footer -->

 <!-- Bottom -->
 <div class="bottom">
     <div class="container">
         <div class="bottom-inner">
             Copyright © 2022 QuickVote | by <a href="http://toasttech.co/" target="_blank">Toast Technologies
                 Limited</a>
         </div>
     </div>
 </div>

 </div>
 <!-- /#page -->
 </div>
 <!-- /#wrapper -->

 <a id="scroll-top"></a>

 <!-- Modal Popup Bid -->
 <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
             <div class="modal-body space-y-20 pd-40">
                 <h3 class="text-center">Your Bidding
                     Successfuly Added</h3>
                 <p class="text-center">your bid <span class="price color-popup">(5.23ETH) </span> has been listing
                     to our database</p>
                 <a href="#" class="btn btn-primary"> Watch the listings</a>
             </div>
         </div>
     </div>
 </div>
 <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
             <div class="modal-body space-y-20 pd-40">
                 <h3>Place a Bid</h3>
                 <p class="text-center">You must bid at least <span class="price color-popup">5.23 ETH</span>
                 </p>
                 <input type="text" class="form-control" placeholder="00.00 ETH">
                 <p>Enter quantity. <span class="color-popup">1 available</span>
                 </p>
                 <input type="text" class="form-control quantity" value="1">
                 <div class="hr"></div>

                 <div class="d-flex justify-content-between">
                     <p> Current Bid</p>
                     <p class="text-right price color-popup"> 5.23 ETH </p>
                 </div>
                 <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup_bid_success"
                     data-dismiss="modal" aria-label="Close"> Place a bid</a>
             </div>
         </div>
     </div>
 </div>

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
