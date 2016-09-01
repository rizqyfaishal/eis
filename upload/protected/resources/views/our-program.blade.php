@extends('layout/master')

@section('title')

    Our Program

@endsection

@section('add-css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slick-theme.css') }}">
    <style type="text/css">
        /*   html, body {
             margin: 0;
             padding: 0;
           }

           * {
             box-sizing: border-box;
           }*/

        .slider-slick {
            width: 90%;
            margin: 100px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }
    </style>

@endsection

@section('content')

    <div class="row whole-content">

        <div class="container">
            <h1 class="title-program-page text-center">OUR PROGRAMS</h1>

            <div class="row">
                <div class="container">
                    <!-- <div class="col-sm-2"></div> -->
                    <div class="col-lg-12">
                        <div class="responsive-slick slider-slick">
                            <div>
                                <!-- <div class="col-sm-4"> -->
                                <div class="text-center program-block">
                                    <h2>A NIGHT TO REMEMBER</h2>
                                    <div class="program-img-ins">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img src="http://placehold.it/50x50" style="width:100%;">
                                                </div>

                                                <div class="item">
                                                    <img src="http://placehold.it/150x150" style="width:100%;">
                                                </div>

                                                <div class="item">
                                                    <img src="http://placehold.it/350x350" style="width:100%;">
                                                </div>

                                                <div class="item">
                                                    <img src="http://placehold.it/250x250" style="width:100%;">
                                                </div>
                                            </div>

                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
                                                <!-- <span class="sr-only">Previous</span> -->
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span> -->
                                            </a>
                                        </div>
                                        <!-- <img src="http://placehold.it/250x250" style="width:100%;"> -->
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <img src="http://placehold.it/350x300?text=99"> -->
                            </div>
                            <div>
                                <div class="text-center program-block">
                                    <h2>EDUNATION</h2>
                                    <div class="program-img-ins">
                                        <img src="http://placehold.it/250x250" style="width:100%;">
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- <img src="http://placehold.it/350x300?text=2"> -->
                            </div>
                            <div>
                                <div class="text-center program-block">
                                    <h2>CREATIVE INDUSTRY</h2>
                                    <div class="program-img-ins">
                                        <img src="http://placehold.it/250x250" style="width:100%;">
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- <img src="http://placehold.it/350x300?text=3"> -->
                            </div>
                            <div>
                                <div class="text-center program-block">
                                    <h2>CREATIVE BUSINESS</h2>
                                    <div class="program-img-ins">
                                        <img src="http://placehold.it/250x250" style="width:100%;">
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- <img src="http://placehold.it/350x300?text=4"> -->
                            </div>
                            <div>
                                <div class="text-center program-block">
                                    <h2>CREATIVE OF EVERYTHING</h2>
                                    <div class="program-img-ins">
                                        <img src="http://placehold.it/250x250" style="width:100%;">
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- <img src="http://placehold.it/350x300?text=5"> -->
                            </div>
                            <div>
                                <div class="text-center program-block">
                                    <h2>CREATIVE FOR TEXTING</h2>
                                    <div class="program-img-ins">
                                        <img src="http://placehold.it/250x250" style="width:100%;">
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- <img src="http://placehold.it/350x300?text=6"> -->
                            </div>
                            <div>
                                <div class="text-center program-block">
                                    <h2>CREATIVE ENGLISH</h2>
                                    <div class="program-img-ins">
                                        <img src="http://placehold.it/250x250" style="width:100%;">
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- <img src="http://placehold.it/350x300?text=7"> -->
                            </div>
                            <div>
                                <div class="text-center program-block">
                                    <h2>CREATIVE FOR YOU</h2>
                                    <div class="program-img-ins">
                                        <img src="http://placehold.it/250x250" style="width:100%;">
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- <img src="http://placehold.it/350x300?text=8"> -->
                            </div>
                            <div>
                                <div class="text-center program-block">
                                    <h2>CREATIVITY OF YOU</h2>
                                    <div class="program-img-ins">
                                        <img src="http://placehold.it/250x250" style="width:100%;">
                                    </div>
                                    <div class="program-img-ins">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                        <a href="#"><i>read more>></i></a>
                                    </div>
                                </div>
                                <!-- <img src="http://placehold.it/350x300?text=9"> -->
                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-lg-offset-1 col-lg-10">
                        <div class="col-sm-4">
                            <div class="text-center program-block">
                                <h2>A NIGHT TO REMEMBER</h2>
                                <div class="program-img-ins">
                                <img src="http://placehold.it/250x250" style="width:100%;">
                                </div>
                                <div class="program-img-ins">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                <a href="#"><i>read more>></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 program-block-middle">
                            <div class="text-center program-block">
                                <h2>EDUNATION</h2>
                                <div class="program-img-ins">
                                <img src="http://placehold.it/250x250" style="width:100%;">
                                </div>
                                <div class="program-img-ins">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                <a href="#"><i>read more>></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center program-block">
                                <h2>CREATIVE INDUSTRY</h2>
                                <div class="program-img-ins">
                                <img src="http://placehold.it/250x250" style="width:100%;">
                                </div>
                                <div class="program-img-ins">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices..</p>
                                <a href="#"><i>read more>></i></a>
                                </div>
                            </div>
                        </div>
                    </div>   -->

                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".regular").slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
            $(".center").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
            $(".variable").slick({
                dots: true,
                infinite: true,
                variableWidth: true
            });


            $('.responsive-slick').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });


        });
    </script>
@endsection