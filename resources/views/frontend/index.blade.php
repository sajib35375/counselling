@extends('frontend.front_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/style.css') }}">

    <div class="full-slider ">
        <div class="slider">
            <div class="back-ground">
                <img src="{{ URL::to('') }}/admin/images/{{ $header->photo }}" alt="">
            </div>
            <div class="w3-content w3-section slide-pic">

                @foreach($all_slider as $slider)
                <img class="mySlides" src="{{ URL::to('') }}/admin/images/{{ $slider->photo }}" >
                @endforeach
            </div>
        </div>
    </div>


    <div class="home-balance ">
        <div class="home-section">
            <div class="home-body">
                <div class="title">
                    <h1>{{ $home->title }}</h1>
                </div>
                <div class="title-text">
                    <h5>{{ $home->head_title }}</h5>
                </div>
                <div class="quote">
                    <q>{{ $home->quote }}</q>
                    <a href="#">{{ $home->author }}</a>
                </div>
                <div class="img-text">
                    <img src="{{ URL::to('') }}/admin/images/{{ $home->photo }}" alt="">
                    <div class="door-content">
                        <p>{{ $home->opportunity_title }}:</p>
                        <ul>
                            <li>{{ $home->text_one }}</li>
                            <li>{{ $home->text_two }}</li>
                            <li>{{ $home->text_three }}</li>
                            <li>{{ $home->text_four }}</li>
                            <li>{{ $home->text_five }}</li>
                            <li>{{ $home->text_six }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="issue-card">
        <div class="issue-container">
            <div class="issue-heading">
                <h3>Some of the issue we work with:</h3>
            </div>

            <div class="issue-position">

            @foreach($all_issue as $issue)
                <div class="issue-wrapper">
                    <a href="{{ route('single.page',$issue->id) }}">
                    <div class="issue-wrapper_{{ $issue->id }} ">
                        <div class="card-body">
                            <img src="{{ URL::to('') }}/admin/images/{{ $issue->photo }}" alt="">
                            <h1>{{ Str::of($issue->title)->words(3) }}</h1>
                            <p>{{ Str::of($issue->top_text)->words(8) }}</p>
                        </div>
                    </div>
                    </a>
                </div>
                    <script>
                        $(document).ready(function(){
                            $(document).on('mouseover','.issue-wrapper_{{ $issue->id }}',function(){
                                $('.issue-wrapper_{{ $issue->id }}').toggleClass('animate__flipOutY');
                            });
                        });
                    </script>
                @endforeach





            </div>

        </div>
    </div>



    <div class="slider-wrapper">
        <div class="comment-slider">
            <div class="w3-content w3-section slide-item">
                @foreach($all_comment as $comment)
                <div class="my-slides">
                    <p>{{ $comment->comment }}</p>
                    <div class="item">
                        <span>{{ $comment->author }}</span>
                    </div>

                </div>

                @endforeach


            </div>
        </div>
    </div>


    <div class="therapy-container">
        <div class="therapy-wrapper">
            <div class="title">
                <h1>WELLBEING THERAPIES</h1>
                <p>Therapy Harley Street supports personal accomplishment by promoting health and fitness of mind and body.</p>
            </div>

            <div class="card-body-therapy">

                @foreach($all_therapy as $therapy)
                <div class="card-container_{{ $therapy->id }}">
                    <a href="{{ route('therapy.single.page',$therapy->id) }}">
                    <div class="therapy-card">
                        <div class="therapy-card-body">
                            <img src="{{ URL::to('') }}/admin/images/{{ $therapy->photo }}" alt="">
                            <div class="type">
                                <h1>{{ Str::limit($therapy->title, 15) }}</h1>
                            </div>
                            <div class="heading">
                                <h4>{{ Str::of($therapy->top_text)->words(3) }}</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                    <script>
                        $(document).ready(function(){

                            $(document).on('mouseover','.card-container_{{ $therapy->id }}',function(){
                                $('.card-container_{{ $therapy->id }}').toggleClass('animate__flipOutY');

                            });


                        });
                    </script>

                @endforeach



            </div>

        </div>
    </div>












@endsection
