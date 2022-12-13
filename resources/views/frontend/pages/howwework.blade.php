@extends('frontend.app')
@section('container')
    <div class=" work card_bg nav-top">
        <div class="container">
            <section class="pt-5 text-center heading ">
                <h3 class="my-4">Engagement Models</h3>
                <p class="mb-5 mt-5 ">Business Settings will help you to set up your business as you wish. You will get lots
                    Of
                    configuration
                    to <br>
                    make your business unique.</p>
            </section>
            <section>
                <div class="row pb-5">
                    <div class=" col-lg-6 my-5 word_card">
                        <div class="card  b-r-20 border-0">
                            <img class="card-img-top"
                                src="{{ asset('/public/frontend/Icon_Images/group-asian-young-creative-happy-people-entrepreneur-business-meeting-office-background-good-leadership-teamwork-lead-success.png') }}"
                                alt="Card image cap">
                            <div class="card-body p-4">
                                <h5 class="card-title">Hired Dedicated Team</h5>
                                <ul>
                                    <li>Keep your team as long as you need</li>
                                    <li>Make any changes anytime.</li>
                                    <li>Make any changes anytime as required.</li>
                                </ul>
                            </div>
                            <a class="btn text-white " href="{{ route('dedicated_team') }}">Explore </a>
                        </div>
                    </div>

                    <div class=" col-lg-6 my-5 d-flex justify-content-end  word_card">
                        <div class="card  b-r-20 border-0 right">
                            <img class="card-img-top"
                                src="{{ asset('/public/frontend/Icon_Images/group-asian-caucasian-young-creative-happy-enjoy-laugh-smile-great-success-emotion-teamwork-people-business-startup-entrepreneur-casual-brainstorm-business-meeting-office-background.png') }}"
                                alt="Card image cap">
                            <div class="card-body p-4">
                                <h5 class="card-title">Project Based</h5>
                                <ul>
                                    <li>Scope of making additional changes</li>
                                    <li>Make any changes anytime.</li>
                                    <li>Make any changes anytime as required.</li>
                                </ul>
                            </div>
                            <a class="btn text-white" href="{{ route('project_base') }}"> Explore</a>
                        </div>

                    </div>

                </div>

            </section>
        </div>
    </div>
@endsection
