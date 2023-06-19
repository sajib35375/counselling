@extends('frontend.front_master')
<link rel="stylesheet" href="{{ asset('frontend/single/style.css') }}">
@section('content')



    <div class="home-container">
        <div class="home-wrapper">

            <div class="single-container">
                <div class="single-wrapper">
                    <div class="header">
                        <h1>{{ $single_post->title }}</h1>
                    </div>
                    <div class="single-body">
                        <div class="join-body">
                            <div class="body-image">
                                <img src="{{ URL::to('') }}/admin/images/{{ $single_post->photo }}" alt="">
                            </div>
                            <div class="body-text">
                                <p class="top-text">{{ Str::of($single_post->top_text)->words(60) }}</p>



                                <div class="bottom-text">{!! $single_post->bottom_text !!}</div>
                            </div>
                            <div class="address">
                                <h3>THERAPY HARLEY STREET</h3>
                                <p>10 Harley Street</p>
                                <p>London W1G 9PF</p>
                                <p>+44 (0) 207 289 5656</p>
                                <p>sajibsust99@gmail.com</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
