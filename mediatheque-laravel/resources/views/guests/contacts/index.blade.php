@extends('guests.parent')

@section('content')

<img src="{{URL::asset('img/contact.jpg')}}"class="img img-responsive" alt="..." style="width: 100%">
<link rel="stylesheet" href="{{ asset('css/contact_us.css') }}">
<div class="container">
    <br><h4 align="center">Contact Us</h4>
    <div class="p-divider"></div><br>
    <h6 align="center">If you have any problem/feedback, feel free to contact. We will be glad to assist you the best way we can.</h6><br>
    <div class="row">
        <div class="contactmsg-col col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4>Send Us Message</h4><br>
            <form method="post" action="{{ url('contact') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="text" class="form-control contact-form" required="required" name="name" placeholder="Enter your Name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="email" class="form-control contact-form" required="required" name="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="tel" class="form-control contact-form" required="required" name="phone_number" placeholder="Enter your phone number">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <textarea class="form-control contact-form" required="required" name="message" rows="3" placeholder="Leave your Message"></textarea>
                    </div>
                </div>
                
                    <button type="submit" class="btn btn-primary btn-submit">Send</button>
                
            </form>
        </div>

        <div class="contactinfo-col col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <ul style="list-style-type:none; font-size: 18px"><h4>Company - Media Team</h4><br>
                <li>Office Hour</li>
                <li>Mon - Fri: 8am - 5:30pm</li>
                <li>Sat: 8am - 12pm</li><br>

                <li>Email: media_team@gmail.com</li>
                <li>Tel: 010 888 111</li>
            </ul>
        </div>
    </div>
</div><br>
@endsection