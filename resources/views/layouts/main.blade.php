<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') :: Cinema A Entertainment Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header-section-starts -->
<div class="full">
    <div class="menu">
        <ul>
            <li><a class="active" href="{!! URL::route('front.index') !!}"><i class="home"></i></a></li>
            <li><a href="{!! URL::route('front.reviews') !!}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
            <li><a href="{!! URL::route('front.contact') !!}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
        </ul>
    </div>
    <div class="main">
        @yield('content')
        <div class="footer">
            <h6>disclamer: </h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci commodi consequuntur cum dicta dignissimos doloremque eos esse, ex fugiat illo itaque, nulla recusandae repellendus similique totam, vel veniam voluptates?</p>
            <a href="example@mail.com">example@mail.com</a>
            <div class="copyright">
                <p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</body>
</html>
