
@extends('newfrontend.master')
@section('css')
<link rel="stylesheet" href="{{ asset('quickvote/assets/css/aboutpage.css') }}"> 
@endsection



@section('page_content')
<br><br>
 <!--feature start-->
 <section>
    <div class="container-fluid mt-5 mb-5 feature1 withpad" >
        <div class="row align-items-center justify-content-between">
        <div class="col-12 col-lg-5 col-xl-5 mb-8 mb-lg-0 order-lg-1 ann">
            <img src="{{asset('test/img/06.png')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-12 col-lg-7 col-xl-6">
            <div class="mb-8 withpad">
            <h3 class="font-w-9 mb-4">About Quickvote</h3>
              <!-- Section description -->
        <p class="text-muted w-responsive mx-auto mb-5">QuickVote is an efficient voting system that allows event organizers to set-up their PAID OR FREE contests for their events. Our product gives a wide range of local and global users the opportunity to participate and cast their votes effortlessly from any part of the world.</p>
        
            </div>
            <div class="row">
            <div class="col-lg-6 col-md-6 withpad">
                <div class="d-flex align-items-start">
                <div class="mr-3 p-3 border rounded border-light shadow-primary">
                    <img class="img-fluid" src="{{asset('test/img/svg/2.svg')}}" alt="">
                </div>
                <div>
                    <h5 class="mb-3 text-primary">Instant Vote Count</h5>
                    <p class="mb-0">
                        Voting results are published immediately after voting ends, so our system is ideal for voting during meetings, instant polls at conferences, or a quick second round of voting in the event of a tie.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-6 mt-md-0 withpad">
                <div class="d-flex align-items-start">
                <div class="mr-3 p-3 border rounded border-light shadow-primary">
                    <img class="img-fluid" src="{{asset('test/img/svg/5.svg')}}" alt="">
                </div>
                <div>
                    <h5 class="mb-3 text-primary">Results Safety</h5>
                    <p class="mb-0">Your results are safe and always available real time in graphs and charts. our pages are  secured with 256bit SSL encryption,no one can tamper with your results</p>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-6 withpad">
                <div class="d-flex align-items-start">
                <div class="mr-3 p-3 border rounded border-light shadow-primary">
                    <img class="img-fluid" src="{{asset('test/img/svg/6.svg')}}" alt="">
                </div>
                <div>
                    <h5 class="mb-3 text-primary">Easy to Customize</h5>
                    <p class="mb-0">You can easily setup your poll Contests with your category, add your own contestants or partcicipants and also the amount for paid votes.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-6 withpad">
                <div class="d-flex align-items-start">
                <div class="mr-3 p-3 border rounded border-light shadow-primary">
                    <img class="img-fluid" src="{{asset('test/img/svg/4.svg')}}" alt="">
                </div>
                <div>
                    <h5 class="mb-3 text-primary">Mobile Ready</h5>
                    <p class="mb-0">Our system is optimized for desktop and mobile devices. Voters can vote from a PC web browser or browsers on mobile devices.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!--feature end-->


<br><br>
<div class="container">


    <section class="text-center dark-grey-text">

        

    
        <h3 class="font-weight-bold pb-2 ">Simple, Fair & Affordable prices for all. </h3>
            <p class="text-muted w-responsive mx-auto mb-5" style="font-size: 24px; line-height:30px;">Explore our Paid or Freemium plans for instant voting and other cool features.	</p>


    </section>

    


</div>
    <div class="containerr">

        <div class="column">
            <div class="pricing-card pro">
              <div class="popular">POPULAR</div>
              <div class="pricing-header">
                <span class="plan-title" style="font-weight:900;">PAID PLAN</span>
                <div class="price-circle">
                  <span class="price-title">
                    <small></small><span>25%</span>
                  </span>
                  <span class="info">/ Service Charge Per Paid Vote</span>
                </div>
              </div>
              <div class="badge-box">
                <span>Features</span>
              </div>
              <ul>
                <li>
                    <p><i class="fas fa-check green-text pr-2"></i>Vendor Can Set Price Per Vote</p>
                </li>
                <li>
                    <p><i class="fas fa-check green-text pr-2"></i>Voters Pays to Vote</p>
                </li>

                <li>
                    <p class="mt-2"><i class="fas fa-check green-text pr-2"></i>Instant voting</p>
                </li>
                <li>
                    <p><i class="fas fa-check green-text pr-2"></i>Support & Monitoring</p>
                </li>
               
                <li>
                    <p><i class="fas fa-check green-text pr-2"></i>Results Export</p>
                </li>

                <li>
                   <p><strong>Cost: </strong> 25% Service Charge Per Paid Vote Processed By Quickvote</p> 
                </li>
                <li>
                    <p><strong>Ideal For: </strong> PAGAENTS | AWARDS SHOWS | REALITY TV SHOWS</p>
                 </li>

              </ul>
              <div class="buy-button-box">
                <a href="{{ route('contest.create') }}"><button 
                    class="sc-button style letter style-2"><span>Create Paid Contest</span> </button></a>
              </div>
            </div>
            <br><br>
        </div>
      
          {{-- <div class="column">
        <div class="pricing-card basic">
          <div class="pricing-header">
            <span class="plan-title">BASIC PLAN</span>
            <div class="price-circle">
              <span class="price-title">
                <small>$</small><span>6.95</span>
              </span>
              <span class="info">/ Month</span>
            </div>
          </div>
          <div class="badge-box">
            <span>Save 35%</span>
          </div>
          <ul>
            <li>
              <strong>1</strong> Domain
            </li>
            <li>
              <strong>10 GB</strong> Disk Space
            </li>
            <li>
              <strong>50 GB</strong> Bandwith
            </li>
            <li>
              <strong>1 Free</strong> Domain
            </li>
            <li>
              <strong>1 FTP</strong> Account
            </li>
          </ul>
          <div class="buy-button-box">
            <a href="#" class="buy-now">BUY NOW</a>
          </div>        
        </div>
      </div> --}}

      <br><br>
      <div class="column">
        <div class="pricing-card eco">
          <div class="pricing-header">
            <span class="plan-title" style="font-weight:900;">FREEMIUM PLAN</span>

            <div class="price-circle">
              <span class="price-title">
                <small>₦</small><span>50,000</span>
              </span>
              <span class="info">One-time Setup Fee</span>
            </div>
          </div>
          <div class="badge-box">
            <span>Features</span>
          </div>
          <ul>
            <li>
                <p><i class="fas fa-times red-text pr-2""></i>Vendor Can Set Price Per Vote</p>
            </li>
            <li>
                <p><i class="fas fa-times red-text pr-2""></i>Voters Pays to Vote</p>
            </li>
            <li>
                <p class="mt-2"><i class="fas fa-check green-text pr-2"></i>Instant voting</p>
            </li>
            <li>
                <p><i class="fas fa-check green-text pr-2"></i>Support & Monitoring</p>
            </li>
            <li>
                <p><i class="fas fa-check green-text pr-2"></i>Results Export</p>
            </li>
            <li>
                <p><strong>Cost: </strong> A One time setup fee of N50,000 by Quickvote</p> 
             </li>

             <li>

                <p><strong>Ideal For: </strong> CORPORATE & NON-GOVERNMENTAL ORAGAINSATIONS</p> 
                
             </li>

             
          </ul>



          





          <div class="buy-button-box">
            <a href="{{ route('contest.create') }}"><button 
                class="sc-button style letter style-2"><span>  Create Freemium Contest</span> </button></a>
          </div>
        </div>
      </div>
      
      {{-- <div class="column">
        <div class="pricing-card business">
          <div class="pricing-header">
            <span class="plan-title">BUSINESS PLAN</span>
            <div class="price-circle">
              <span class="price-title">
                <small>$</small><span>59.95</span>
              </span>
              <span class="info">/ Month</span>
            </div>
          </div>
          <div class="badge-box">
            <span>Save 5%</span>
          </div>
          <ul>
            <li>
              <strong>Unlimited</strong> Domain
            </li>
            <li>
              <strong>250 GB</strong> Disk Space
            </li>
            <li>
              <strong>Unlimited</strong> Bandwith
            </li>
            <li>
              <strong>5 Free</strong> Domains
            </li>
            <li>
              <strong>Unlimited FTP</strong> Account
            </li>
          </ul>
          <div class="buy-button-box">
            <a href="#" class="buy-now">BUY NOW</a>
          </div>
        </div>
      </div> --}}
    </div><br><br><br><br><br>



    
        
       



@endsection