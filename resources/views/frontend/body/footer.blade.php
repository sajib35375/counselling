@php
    $data = \App\Models\SiteSetting::find(1);
@endphp


<div class="footer-container">
    <div class="footer-wrapper">
        <div class="footer-body">
            <div class="first-part">
                <h4>THERAPY HARLEY STREET – PSYCHOTHERAPY, COUNSELLING AND WELL-BEING</h4>
                <p>{{ $data->address }}</p>
                <p>Phone: {{ $data->phone }}</p>
                <p>Email: {{ $data->email }}</p>
                <div class="social">
                    <h4>GET SOCIAL</h4>
                    <ul>
                        <li><a href="{{ $data->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="{{ $data->twitter }}"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="{{ $data->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="{{ $data->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="{{ $data->blogger }}"><i class="fa-brands fa-blogger"></i></a></li>
                        <li><a href="{{ $data->social_email }}"><i class="fa-regular fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="second-part">
                <h4>HEALTHCARE PROVIDERS</h4>
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/vitality-1.png" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/vitality-1.png" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/vitality-1.png" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/vitality-1.png" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/vitality-1.png" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/vitality-1.png" alt="">

                <p>Welcome form ></p>
                <p>Terms and Conditions ></p>
                <p>Privacy Policy ></p>
                <p>Legal ></p>
            </div>
            <div class="third-part">
                <h4>THERAPISTS’ ACCREDITATIONS & PROFESSIONAL MEMBERSHIP BODIES</h4>
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
                <img src="https://www.therapyharleystreet.co.uk/wp-content/uploads/2021/08/ukcplogo.jpg" alt="">
            </div>
        </div>
    </div>
</div>
