@extends('frontend.front_master')
<link rel="stylesheet" href="{{ asset('frontend/assets/style.css') }}">
@section('content')





    <div class="body-container">

        <div class="full-form">
            <form action="{{ route('reg.store') }}" method="POST">
                @csrf
                <div class="name">
                    <label for="">Name</label><br>
                    <input class="input" name="name" type="text">
                    @error('name')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="name">
                    <label for="">Email</label><br>
                    <input class="input" name="email" type="text">
                    @error('email')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="name">
                    <label for="">Phone</label><br>
                    <input class="input" name="phone" type="text">
                    @error('phone')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="name">
                    <label for="">Location</label><br>
                    <input class="input" name="location" type="text">
                    @error('location')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="name">
                    <label for="">Age</label><br>
                    <input class="input" name="age" type="text">
                    @error('age')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="gender">
                    <label for="">Gender</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    @error('gender')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="btn">
                    <button class="sub_btn" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>










@endsection
