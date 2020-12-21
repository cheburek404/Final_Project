<!DOCTYPE html>
<html lang="en">
<head>
    <title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!-- Custom Theme files -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/fasthover.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}" /> <!-- countdown -->
    <!-- //js -->
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
</head>
<body>
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<div class="container" style="padding-top:40px">
    <div class="w3l_logo">
        <h1 style="margin-left:65px"><a href="/">Electronic Store<span>Your stores. Your place.</span></a></h1>
    </div>
    <div class="wrapper fadeInDown">
        <div id="formContent"><br>
            <h2>Log in</h2><br>
            @include('layouts.errors')
            <form action="/auth" method="post">
                @csrf
                <input type="email" class="fadeIn first" name="Email" placeholder="Email">
                <input type="password" class="fadeIn first" name="Password" placeholder="Password"><br><br>
                <input type="submit" class="fadeIn first" value="Sign in">
            </form>
            <div id="formFooter">
                <a class="underlineHover" href="{{ route('RegAuth.reg') }}">Don't have an account?</a>
            </div>
        </div>
    </div>
</div>
