@extends('newfrontend.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('quickvote/assets/css/aboutpage.css') }}">
@endsection

@section('page_content')
    <!-- page title -->
    <section class="fl-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner flex">
                        <div class="page-title-heading">
                            <h2 class="heading">Contact</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-contact tf-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sc-contact-infor">
                        <h4>Chat Us on Whatsapp</h4>
                        <div class="icon">
                            <i class="fal fa-phone-volume"></i>
                        </div>
                        <div class="infor">
                            <a href="tel:08053682130">+234 805 368 2130</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sc-contact-infor">
                        <h4>Address</h4>
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="infor">
                            16 Banjul Street Wuse II, Abuja
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sc-contact-infor">
                        <h4>Send us an Email</h4>
                        <div class="icon">
                            <i class="fal fa-envelope-open"></i>
                        </div>
                        <div class="infor">
                            <a href="mailto:abc@gmail.com">info@quickvote.ng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <iframe class="map-contact"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.7948074701335!2d7.4721495!3d9.082449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0af04983a8af%3A0x6a4740aecadc1eef!2s16%20Banjul%20St%2C%20Wuse%20904101%2C%20Abuja!5e0!3m2!1sen!2sng!4v1662487319840!5m2!1sen!2sng"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <section class="tf-section login-page contact-page pd-top-0">
        <div class="container">
            <div class="row jtf-content-center">
                <div class="col-md-8">
                    <div class="form-create-item-content">
                        <div class="form-create-item">
                            <div class="sc-heading">
                                <h3>Send Us Message</h3>
                                <p class="desc">Most popular voting platform in Nigeria </p>
                            </div>

                            @foreach ($errors->all() as $error)
                                {{ $error }}<br />
                            @endforeach
                            <form id="create-item-1" method="post" data-parsley-validate 
                                action="{{ route('contact.store') }}">
                                @csrf
                                <input type="text" id="name" class="tb-my-input" name="name" tabindex="1"
                                    placeholder="Your Full Name" value="" aria-required="true" required="">
                                <input type="email" name="email" class="tb-my-input" name="email" tabindex="2"
                                    placeholder="Email Address" value="" aria-required="true" required="">
                                <input type="text" id="phone" class="tb-my-input" name="phonenumber" tabindex="1"
                                    placeholder="Your Phone Number" value="" aria-required="true" required="">
                                <select class="valid" name="subject" required>

                                    <option disabled selected value> -- Select Subject -- </option>
                                    <option value="General Enquiry">General Enquiry</option>
                                    <option value="Technical Issues">Technical Issues</option>
                                    <option value="Partnerships">Partnerships</option>
                                </select>
                                <textarea id="comment-message" name="message" tabindex="4" placeholder="Write Message" aria-required="true" required></textarea>


                                <button name="submit" type="submit" id="comment-reply"
                                    class="sc-button style letter style-2"><span>Send Message</span> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <br> <br> <br>
@endsection
