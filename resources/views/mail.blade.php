@extends('layouts.wrapper')
@section('content')

<!-- banner -->
<div class="banner banner10">
    <div class="container">
        <h2>Mail Us</h2>
    </div>
</div>
<!-- //banner -->
<!-- breadcrumbs -->
<div class="breadcrumb_dress">
    <div class="container">
        <ul>
            <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
            <li>Mail Us</li>
        </ul>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- mail -->
<div class="mail">
    <div class="container">
        <h3>Mail Us</h3>
        <div class="agile_mail_grids">
            <div class="col-md-5 contact-left">
                <h4>Address</h4>
                <p>est eligendi optio cumque nihil impedit quo minus id quod maxime
                    <span>26 56D Rescue,US</span></p>
                <ul>
                    <li>Free Phone :+1 078 4589 2456</li>
                    <li>Telephone :+1 078 4589 2456</li>
                    <li>Fax :+1 078 4589 2456</li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="col-md-7 contact-left">
                <h4>Contact Form</h4>
                <form action="#" method="post">
                    <input type="text" name="Name" placeholder="Your Name" required="">
                    <input type="email" name="Email" placeholder="Your Email" required="">
                    <input type="text" name="Telephone" placeholder="Telephone No" required="">
                    <textarea name="message" placeholder="Message..." required=""></textarea>
                    <input type="submit" value="Submit" >
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="contact-bottom">
            <iframe src="https://www.google.com/maps/d/viewer?ie=UTF8&hl=en&msa=0&ll=43.234916929674306%2C76.90983270754201&spn=0.260384%2C0.617294&t=h&z=19&mid=1Y8x38xRYjkHArBX1JV6hxlxbaPo" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- //mail -->
@endsection
