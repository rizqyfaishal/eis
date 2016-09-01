@extends('layout/master')

@section('title')

    Our Program

@endsection

@section('add-css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slick-theme.css') }}">
    <style type="text/css">

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
                    <div class="col-lg-12">
                        <div class="responsive-slick slider-slick">
                            @foreach($programs as $program)
                                <div class="text-center program-block">
                                    <h2>{{ $program->title }}</h2>
                                    <div class="program-img-ins">
                                        <div id="myCarousel_{{ $program->id }}" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                @foreach($program->thumbnails as $index => $thumbnail)
                                                    <li data-target="#myCarousel_{{ $program->id }}" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                @endforeach
                                            </ol>

                                            <div class="carousel-inner" role="listbox">
                                                @foreach($program->thumbnails as $index => $thumbnail)
                                                    <div class="item {{ $index == 0 ? 'active' : '' }}">
                                                        <img src="{{ action('AttachmentController@get',$thumbnail->hashcode) }}" style="width:100%;">
                                                    </div>
                                                @endforeach
                                            </div>

                                            <a class="left carousel-control" href="#myCarousel_{{ $program->id }}" role="button" data-slide="prev">
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel_{{ $program->id }}" role="button" data-slide="next">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="program-img-ins">
                                        <p>
                                            {{ $program->snippet }}
                                        </p>
                                        <a href="{{ action('ProgramController@show',$program->id) }}"><i>read more>></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
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