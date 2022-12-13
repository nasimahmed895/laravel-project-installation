@extends('frontend.app')
@section('container')
    <div class="cover position-relative"
        style="background-image: url({{ asset('/public/frontend/Icon_Images/businesspeople-celebrating-success.png') }});">
        <!-- <div class="extra" style="padding-top: 65px;"></div> -->
        <div class="bgclor  hire_team">
            <h2 class="text-white text-center ">Make Your project Done With
                <br>
                Our Dedicated Team
            </h2>
            <h5 class="text-white text-center mt-3">Our dedicated team will be your lifetime supporting role!</h5>
        </div>
    </div>
    <div class="container hire_dedicate_team mt-3">
        <div class="row py-5 ">
            <div class="  col-md-5 d-flex align-items-center justify-content-center">
                <div class="text-center ">
                    <h3 class="fbold">Advantage</h3>
                </div>
            </div>
            <div class="  col-md-7 content_center">
                <ul class="f1rem md-f1rem f500 m-b ul-b-10px ">
                    <li>Hassle-free hiring process and lower recruitment cost.</li>
                    <li>Hassle-free hiring process and lower recruitment cost.</li>
                    <li>Experienced offshore members at a comparatively low cost</li>
                    <li>You can get experts working for you from any part of the world.</li>
                    <li>You can connect with providers from all around the world.</li>
                    <li>You can get experts working for you from any part of the world.</li>
                    <li>You can connect with providers from all around the world.</li>
                </ul>
            </div>

        </div>
    </div>

    <div class=" hire_dedicate_team card_bg">

        <div class="container">
            <div class="row py-5 ">
                <div class="  col-md-5 d-flex align-items-center justify-content-center">
                    <div class="text-center ">
                        <h3 class="fbold">Who Will Help?</h3>
                    </div>
                </div>
                <div class="  col-md-7 content_center">
                    <ul class="f1rem f500 m-b ul-b-10px">
                        <li>Who doesn't have the resources to hire offshore members.</li>
                        <li>You can get experts working for you from any part of the world.</li>
                        <li>Projects with a long-term goal.</li>
                        <li>Complete monitoring power and authority over your team.</li>

                    </ul>
                </div>

            </div>
        </div>

    </div>

    <div class="container about">

        <div class="mission py-5 ">
            <div class="">
                <section class="client_think ">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 ">
                            <div class="client_video image transition b-r-20">
                                <img src="{{ asset('/public/frontend/Icon_Images/workers-it-company-working-computer.png') }}"
                                    alt="" srcset="" class="img-fluid ">
                            </div>

                        </div>

                        <div class="  col-lg-6">
                            <div class="client_info">
                                <h4 class="mt-3 mb-4">Get Complete Authority</h4>
                                <p class="">The dedicated team entirely under your control. The team will
                                    Manage the work schedule as per your requirements Hire your
                                    dedicated team as long as you need Monitor daily work progress
                                    Of each resource Make any changes anytime as required with
                                    your dedicated team.</p>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>

    <div class="card_bg">
        <div class="container hire_dedicate_team py-5 ">
            <div class="row">
                <div class="  col-md-5 d-flex align-items-center justify-content-center">
                    <div class="text-center ">
                        <h4 class="fbold">How it works?</h4>
                    </div>
                </div>
                <div class="how_it_word col-md-7">
                    <p class="f1rem f400 text-center text-md-start">
                        With <span class="root">Root</span><span class="devs">Devs</span>, recruiting offshore teams is
                        more
                        flexible. With Our years Of
                        experience,
                        we've developed a process that will make every step Of your development journey, from
                        hiring to getting the job done, a lot easier, faster, transparent, and efficient.

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
