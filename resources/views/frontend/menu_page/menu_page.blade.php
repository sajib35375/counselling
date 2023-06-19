@extends('frontend.front_master')
<link rel="stylesheet" href="{{ asset('frontend/page/style.css') }}">
@section('content')




<div class="home-container shadow">
    <div class="home-wrapper">




        <div class="issue-card">
            <div class="issue-container">
                <div class="issue-heading">
                    <h1>{{ $single_menu->name }}</h1>
                </div>
                <div class="issue-position">

                    @foreach($all_post as $post)
                    <div class="issue-wrapper">
                        <a href="{{ route('menu.single.view',$post->id) }}">
                        <div class="issue-wrapper_{{ $post->id }} ">
                            <div class="card-body">
                                <img src="{{ URL::to('') }}/admin/images/{{ $post->photo }}" alt="">
                                <h1>{{ Str::of($post->title)->words(2) }}</h1>
                                <p>{{ Str::of($post->top_text)->words(7) }}</p>
                            </div>
                        </div>
                        </a>
                    </div>

                        <script>
                            $(document).ready(function(){
                                $(document).on('mouseover','.issue-wrapper_{{ $post->id }}',function(){
                                    $('.issue-wrapper_{{ $post->id }}').toggleClass('animate__flipOutY');
                                });
                            });
                        </script>



                    @endforeach


                </div>

            </div>
        </div>




    </div>
</div>


<script>
    $(document).ready(function(){

        $(document).on('mouseover','.card-container_1 .therapy-card .therapy-card-body img',function(){
            $('.card-container_1').toggleClass('animate__flipOutY');

        });


    });
</script>







<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("my-slides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->

@endsection





