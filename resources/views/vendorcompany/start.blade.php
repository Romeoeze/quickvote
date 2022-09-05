@extends('admin.admin-master')
@section('css')
    <link rel="stylesheet" href="{{ asset('quickvote/assets/css/aboutpage.css') }}">
@endsection
@section('content')
    <div class="container">


        <section class="text-center dark-grey-text">




            <h3 class="font-weight-bold pb-2 ">Simple, Fair & Affordable prices for all. </h3>
            <p class="text-muted w-responsive mx-auto mb-5" style="font-size: 24px; line-height:30px;">Explore our Paid or
                Freemium plans for instant voting and other cool features. </p>


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
                        <span class="info" style="font-size:9px; color:rgb(0, 0, 0); font-weight:900;">/ Service
                            Charge Per Paid Vote</span>
                    </div>
                </div>
                <div class="badge-box">
                    <span>Features</span>
                </div>
                <ul class="listt">
                    <li>
                        <p><i class="fas fa-check green-text pr-2"></i>Vendor Can Set Price Per Vote</p>
                    </li>
                    <li>
                        <p><i class="fas fa-check green-text pr-2"></i>Voters Pays to Vote</p>
                    </li>

                    <li>
                        <p class="mt-2"><i class="fas fa-check green-text pr-2"></i>Instant voting: Single & Multi
                            Category.</p>
                    </li>
                    <li>
                        <p><i class="fas fa-check green-text pr-2"></i>Support & Monitoring</p>
                    </li>

                    <li>
                        <p><i class="fas fa-check green-text pr-2"></i>Results Export</p>
                    </li>

                    <li>
                        <p style="line-height: 18px;"><strong>Cost: </strong> 25% Service Charge Per Paid Vote Processed By
                            Quickvote</p>
                        <p style="line-height: 18px;"><strong>Ideal For: </strong> PAGAENTS | AWARDS SHOWS | REALITY TV
                            SHOWS</p>
                    </li>


                </ul>
                <div class="buy-button-box">
                    <a href="{{ route('contest.select') }}"><button class="sc-button style letter style-2"><span>Create
                                Paid Contest <i class="ri-arrow-right-circle-line"></i></span> </button></a><br><br>
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
                            <small>₦</small><span> 1,000</span>
                        </span>
                        <span class="info" style="font-size:9px; color:rgb(0, 0, 0); font-weight:700;">Setup Fee
                            for every Pre-registered Voters</span>
                    </div>
                </div>
                <div class="badge-box">
                    <span>Features</span>
                </div>
                <ul class="listt">
                    <li>
                        <p><i class="fas fa-times red-text pr-2"></i>Vendor Can Set Price Per Vote</p>
                    </li>
                    <li>
                        <p><i
                                class="
                                
                                
                                
                                
                                         fas fa-times red-text pr-2""></i>Voters
                            Pays
                            to
                            Vote</p>
                    </li>
                    <li>
                        <p class="
                                
                                                mt-2"><i
                                class="fas fa-check green-text pr-2"></i>Instant
                            voting:
                            Single & Multi
                            Category.</p>
                    </li>
                    <li>
                        <p><i class="fas fa-check green-text pr-2"></i>Support & Monitoring</p>
                    </li>
                    <li>
                        <p><i class="fas fa-check green-text pr-2"></i>Results Export</p>
                    </li>
                    <li>
                        <p style="line-height: 18px;"><strong>Cost: </strong> A One time setup fee of ₦ 1,000 per Voter
                            (Pre-registered)
                            by your organization.</p>
                        <p style="line-height: 18px;"> <strong>Ideal For: </strong> CORPORATE & NON-GOVERNMENTAL
                            ORAGAINSATIONS</p>
                    </li>


                </ul>









                <div class="buy-button-box">
                    <a href="{{ route('corporatesinglecontest.select') }}"><button
                            class="sc-button2 style letter style-2"><span> Create
                                Freemium Contest <i class="ri-arrow-right-circle-line"></i></span> </button></a><br><br>
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
