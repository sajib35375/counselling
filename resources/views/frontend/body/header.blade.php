@php
    $data = \App\Models\SiteSetting::find(1);
@endphp
<link rel="stylesheet" href="{{ asset('frontend/single/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/style.css') }}">
<div class="header shadow">
    <div class="top-header">
        <ul>
            <li><a href="{{ $data->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="{{ $data->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="{{ $data->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="{{ $data->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="{{ $data->blogger }}"><i class="fa-brands fa-blogger"></i></a></li>
            <li><a href="{{ $data->social_email }}"><i class="fa-regular fa-envelope"></i></a></li>
        </ul>
    </div>

    <div class="fixed-header">
        <img src="{{ URL::to('') }}/admin/images/{{ $data->logo }}" alt="">
        <span>Call us {{ $data->phone }}</span>

        @php
            $all_menu = App\Models\Menu::where('status',true)->get();
        @endphp
    </div>
    <div class="header-menu ">
        <div class="menu">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>

                @foreach($all_menu as $menu)
                <li><a href="{{ route('menu.page.view',$menu->id) }}">{{ $menu->name }}</a></li>
                @endforeach

                <li><a href="{{ route('reg.view') }}">Registration</a></li>
            </ul>
        </div>
    </div>




</div>
