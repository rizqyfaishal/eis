@extends('layout/master')

@section('title')

    Meet EIS

@endsection

@section('content')
    <div class="meet">
        <div class="left-container" data-stellar-ratio="1.1">
           <div class="qqq">
               <div class="ppp">
                   <div class="box">
                       <div class="image-circle">
                           <img src="{{ URL::asset('img/team/President.jpg') }}" class="img-team-member">
                       </div>
                       <h1>Rafi Biagi Sjarif</h1>
                       <p>PRESIDENT OF EIS</p>
                   </div>
               </div>
           </div>
           <div class="qqq">
               <div class="ppp">
                   <div class="box">
                       <div class="image-circle">
                           <img src="{{ URL::asset('img/team/Controller.jpg') }}" class="img-team-member">
                       </div>
                       <h1>Ratna Siti <br>Aisyah</h1>
                       <p>CONTROLLER</p>
                   </div>
                   <div class="box">
                       <div class="image-circle">
                           <img src="{{  URL::asset('img/team/Treasurer.jpg') }}" class="img-team-member">
                       </div>
                       <h1>Naufal Shidqi <br>Andyara</h1>
                       <p>TREASURER</p>
                   </div>
               </div>
           </div>
           <div class="qqq">
               <div class="ppp">
                   <div class="box">
                       <div class="image-circle">
                           <img src="{{ URL::asset('img/team/VicePresidentInternal.jpg') }}" class="img-team-member">
                       </div>
                       <h1>Andika Prawira</h1>
                       <p>VICE PRESIDENT of INTERNAL</p>
                   </div>
               </div>
           </div>
           <div class="qqq">
               <div class="ppp">
                   <div class="box">
                       <div class="image-circle">
                           <img src="{{ URL::asset('img/team/VicePresidentInternal.jpg') }}" class="img-team-member">
                       </div>
                       <h1>Alma Roosnelia</h1>
                       <p>VICE PRESIDENT of INTERNAL</p>
                   </div>
               </div>
           </div>

        </div>
        <div class="right-container" data-stellar-ratio="1.3"
             data-stellar-offset-parent="true">
            <div class="qqq">
                <div class="ppp">
                    <div class="whoweare text-center">WHO WE ARE</div>
                    <p class="post-title-team-member">EIS Description</p>
                    <article class="article">
                        <p>
                            {{ $description }}
                        </p>
                    </article>
                </div>
            </div>
            <div class="qqq">
                <div class="ppp">
                    <div class="box">
                        <div class="left-content">
                            <div class="image-circle left-m xxx">
                                <img src="{{ URL::asset('img/team/Finance.jpg') }}" >
                            </div>
                        </div>
                        <div class="right-content">
                            <h1 class="text-center">PROJECT</h1>
                            <h2>Arya | Rozan</h2>
                            <p>Finance is in charge of making money which would be used to fund all eis
                                activities. Money is collected by conducting our 3 programs, which are street selling,
                                garage sale and merchandise selling.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qqq">
                <div class="ppp">
                    <div class="box">
                        <div class="left-content">
                            <div class="image-circle left-m xxx">
                                <img src="{{ URL::asset('img/team/A&S.jpg') }}" >
                            </div>
                        </div>
                        <div class="right-content">
                            <h1 class="text-center">ARTS & SPORTS</h1>
                            <h2>Dicky | Jeremy</h2>
                            <p>EIS&#39; &quot;Arts and Sports&quot; is a division of EIS that facilitates FEB IUP
                                students to express their passion for arts and sports. This division aims to unite and
                                create bonds within the IUP community with various activities and events such as
                                2k/FIFA competitions, the futsal club, film screenings and art exhibitions.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="left-content">
                            <h1 class="text-center">MARKETING</h1>
                            <h2>Nigel | Alyssa</h2>
                            <p>We strive to increase public awareness by making EIS’ core values well
                                known through our programs, which include: Face of EIS, EIS Open Day, and
                                Creative Industry</p>
                        </div>
                        <div class="right-content">
                            <div class="image-circle left-m xxx">
                                <img src="{{ URL::asset('img/team/Marketing.jpg') }}" >
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="left-content">
                            <div class="image-circle left-m xxx">
                                <img src="{{ URL::asset('img/team/Project.jpg') }}" >
                            </div>
                        </div>
                        <div class="right-content">
                            <h1 class="text-center">PROJECT</h1>
                            <h2>Gisel | Rini</h2>
                            <p>We are responsible for a number of outsourced programs aimed to satisfy
                                talents and aspirations, held by the EIS in attempts of developing soft skills through:
                                EDUNATION, A NIGHT TO REMEMBER, and REALIZATION PROGRAM.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="left-content">
                            <h1 class="text-center">VISUALIZATION</h1>
                            <h2>Askhi | Avi</h2>
                            <p>Visualization is a supporting division exists to aid eis&#39; design needs.
                                Our job involves realizing idea into forms of interpretation such as posters,
                                presentation and many more. We build what you see.</p>
                        </div>
                        <div class="right-content">
                            <div class="image-circle left-m xxx">
                                <img src="{{ URL::asset('img/team/Marketing.jpg') }}" >
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
@section('stellar')
    <script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
    <script>
        $(window).stellar({
            horizontalScrolling: false,
            verticalScrolling: true,
        });
    </script>
@endsection