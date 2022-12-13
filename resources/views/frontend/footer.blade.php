<footer>
    <div class="">
        <section class="book_meeting_banner "
            style="background-image: url({{ asset('/public/frontend/Icon_Images/contact-header.jpg') }});">
            <div class="bg-color ">
                <div class="book_meeting">
                    <span>Book a Meeting With Us, and Let's Discuss</span>
                    <a href="{{ route('contact_us') }}">
                        <img src="{{ asset('/public/frontend/Icon_Images/Contact.png') }}" alt="">
                    </a>

                </div>
            </div>
        </section>
    </div>
    <div class="contant ">

        <div class="container">
            <div class="row py-5 pb-2">

                <div class="col-md-4 wrapper">
                    <div class="mb-5">
                        <span class="tbold">Get In Touch</span>
                    </div>
                    <a href="" class=""><img width="128px"
                            src="{{ asset('/public/frontend/Icon_Images/Root Devs.png') }}" alt=""
                            srcset=""></a>
                    <p class="mt-3">House no- 02, Road No- 05,<br>
                        Block B, Dhaka Uddan, <br> Mohammadpur, Dhaka 1207</p>
                    <div class="office_time mt-4">
                        <p> <strong class="text-white f100">Open: </strong> Sunday to Thursday From <br>
                            10 am to 7 pm. </p>
                    </div>
                    <div class="office_time mt-4">
                        <ul class="p-0">
                            <li><a class="text-white" href="tel:01794-780-707"><img
                                        style="width: 25px ; margin-right: 5px; margin-left: 0"
                                        src="public/frontend/Icon_Images/Root_icons/bangladesh.png" alt=""
                                        sizes="" srcset=""> 01794-780707</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-3 wrapper">
                    <div class="mb-5"><span class="tbold">Quick Links</span></div>
                    <ul class="p-0">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('case_study') }}">Case Study</a></li>
                        <li><a href="{{ route('how_we_work') }}">How We Work</a></li>
                        <li><a href="{{ route('dedicated_team') }}">Our Team</a></li>
                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                        <li><a href="{{ asset('career') }}">Career</a></li>
                    </ul>
                </div>
                <div class="col-md-3 wrapper Services">
                    <div class="mb-5"><span class="tbold">Our Services</span></div>
                    <p>Mobile App Development </p>
                    <p>Web Development</p>
                    <p> Custom Software</p>
                </div>
                <div class="col-md-2 wrapper">
                    <div class="mb-5"><span class="tbold">Follow Us</sp>
                    </div>

                    <div class="row text-center socalmedeya">

                        <div class=" icon col col-md-3">
                            <a href="{{ get_option('co_facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('whatsapp') }}"><i class="fab fa-whatsapp"></i> </a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('twitter') }}"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('youtube') }}"><i class="fab fa-youtube-square"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('skype') }}"><i class="fab fa-skype"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('instagram') }}"><i class="fab fa-instagram"></i></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="contant" style="padding-top: 50px;">
        <div class="copyright">
            <p class="f1rem text-center py-3"><i class="far fa-copyright"></i> Copyright 2022 RootDevs All
                Rights
                Reserved.</p>
        </div>
    </div>

</footer>
