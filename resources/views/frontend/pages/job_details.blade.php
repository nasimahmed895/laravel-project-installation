@extends('frontend.app')
@section('container')
    <div class="casestudy nav-top">
        <div class="slider  text-center position-relative"
            style="background-image:url({{ asset('/public/frontend/Icon_Images/JobDetails/abstract-digital-grid-black-background.jpg') }}); height: 325px;">
            <div class="bgclor " style="background: none">
                <div class="slider_text container">

                    <img src="{{ asset('/public/frontend/Icon_Images/Root Devs.png') }}" alt="" srcset=""
                        style="width: 17rem">
                    <h4 class="mt-3  f100  text-center">Join Our Team </h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container jobdetails">
        <div class="heading_top">
            <div class="heading pt-5">
                <div class="row m-auto ">
                    <div class="col-9 p-0 d-flex align-items-center">
                        <h3 class=" float-start">{{ $career->title }}r</h3>
                        <div class="share_wraper float-start position-relative">
                            <div class="menu">
                                <input type="checkbox" id="toggle" class="d-none" />
                                <label id="show-menu" for="toggle">
                                    <div class="share_button border-0 main">
                                        <img src="{{ asset('/public/frontend/Icon_Images/share/share.png') }}"
                                            alt="" srcset="">
                                    </div>
                                    <div class="share_button">
                                        <a href="#"> <img
                                                src="{{ asset('/public/frontend/Icon_Images/share/facebook.png') }}"
                                                alt="" srcset=""></a>
                                    </div>
                                    <div class="share_button">
                                        <img src="{{ asset('/public/frontend/Icon_Images/share/instagram.png') }}"
                                            alt="" srcset="">
                                    </div>
                                    <div class="share_button">
                                        <img src="{{ asset('/public/frontend/Icon_Images/share/linkedin.png') }}"
                                            alt="" srcset="">
                                    </div>
                                    <div class="share_button">
                                        <img src="{{ asset('/public/frontend/Icon_Images/share/messenger.png') }}"
                                            alt="" srcset="">
                                    </div>
                                    <div class="share_button">
                                        <img src="{{ asset('/public/frontend/Icon_Images/share/telegram.png') }}"
                                            alt="" srcset="">
                                    </div>

                                    <div class="share_button">
                                        <img src="{{ asset('/public/frontend/Icon_Images/share/twitter.png') }}"
                                            alt="" srcset="">
                                    </div>
                                    <div class="share_button">
                                        <img src="{{ asset('/public/frontend/Icon_Images/share/whatsapp.png') }}"
                                            alt="" srcset="">
                                    </div>
                                    <div class="share_button bg-black">
                                        <span class=" text-white"><i class="fas fa-copy"></i></span>
                                    </div>
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="col-3 p-0">
                        <div class="" id="appy_button">
                            <a href="{{ url('basicInformation', [$career->slug]) }}" class=" float-end"><img
                                    style="width: 7rem"
                                    src="{{ asset('/public/frontend/Icon_Images/Root_icons/apply.png') }}" alt=""
                                    srcset=""></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="details">
                <h6><span class="root">Root</span><span class="Devs">Devs.</span> <span
                        style="color: #a59898">{{ $career->address }}</span></h6>
            </div>
            <div class="row heading_bottom mb-5 mt-3 m-auto text-center text-md-start">
                <div class=" col-6 col-md-3  border-bottom ">
                    <p>Experience</p>
                    <h5 class="m-0">{{ $career->experience }}</h5>
                </div>
                <div class="col-6 col-md-3  border-bottom border-right-0">
                    <p>Work Level</p>
                    <h5 class="m-0">{{ $career->work_level }}</h5>
                </div>
                <div class=" col-6 col-md-3  border-bottom ">
                    <p>Employee Type</p>
                    <h5 class="m-0">{{ $career->job_time }}</h5>
                </div>
                <div class=" col-6 col-md-3  border-bottom ">
                    <p>Offer Salary</p>
                    <h5 class="m-0">{{ $career->salary }}</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="card_bg">
        <div class="container ">
            <div class="job-details">
                <div class="details "><img class="img_responsive"
                        src="{{ asset('/public/frontend/Icon_Images/JobDetails/overview.png') }}" alt=""
                        srcset="" style="height: 80%"></div>
                <div class="details">
                    <div class="details_main">
                        <h4 class="mb-4">Overview</h4>
                        <p class="text-justify">{{ $career->overview }} </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="job-details_right">
                <div class="details text">
                    <div class="details_main">
                        <h4 class="">Job Description</h4>
                        <ul>
                            @foreach (json_decode($career->overview_list) as $item)
                                <li>{{ $item->list }} </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="details img"><img class="img_responsive"
                        src="{{ asset('/public/frontend/Icon_Images/JobDetails/skill.png') }}" alt=""
                        srcset=""></div>
            </div>
        </div>
    </div>
    <div class="card_bg">
        <div class="container ">
            <div class="job-details">
                <div class="details "><img class="img_responsive"
                        src="{{ asset('/public/frontend/Icon_Images/JobDetails/education.png    ') }}" alt=""
                        srcset=""></div>
                <div class="details">
                    <div class="details_main">
                        <h4 class="mb-4">Educational Requirements
                        </h4>
                        <p>{{ $career->requirements }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wreapper text-center py-5">
            <h4>Life at <strong style="color: red; text-shadow: 2px 3px 2px #ddd;">Root</strong> Devs</h4>
            <div class="grid-container gallery">
                <div class="grid-item1 grid-item"><img class="team1 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/IMG20220301182928.png') }}" alt=""
                        srcset=""></div>
                <div class="grid-item2 grid-item"><img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/IMG20220301183839.png') }}" alt=""
                        srcset=""></div>
                <div class="grid-item3 grid-item"><img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/IMG20220301193011.png') }}" alt=""
                        srcset=""></div>
                <div class="grid-item4 grid-item"> <img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/IMG20220301200524.png') }}" alt=""
                        srcset=""></div>

            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        let appy_button = document.getElementById("appy_button");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
                appy_button.classList.add("button_scroll");
            } else {
                appy_button.classList.remove("button_scroll");

            }
        }

        // When the user clicks on the button, scroll to the top of the document
    </script>
@endsection
