@extends('frontend.app')
@section('container')
    <div class=" work card_bg nav-top">
        <div class="container">
            <section class="pt-5 text-center heading ">
                <h3 class="my-4">Engagement Models</h3>
                <p class="mb-5 mt-5 ">We provide a distinctive method of service delivery. <br>
                    This has supported us in two ways with our engagement models...</p>
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
                                    <li>Manage your team's work schedule.</li>
                                    <li>Keep your hired team for as long as
                                        necessary.</li>
                                    <li>Make any necessary changes at any
                                        period.</li>
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
                                    <li>Opportunity to make additional changes.</li>
                                    <li>Produce your ideas</li>
                                    <li>Make software solutions that are suited
                                        to your company's needs.</li>
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
