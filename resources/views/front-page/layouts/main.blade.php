<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','Smile | Responsive Bootstrap Ecommerce Template')</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('css',view('front-page.components.css'))
</head>
<body>

<!-- PRELOADER -->
<div id="loader"></div>

<div class="body">
    <!-- TOPBAR -->
@yield('top_bar',view('front-page.components.top_bar'))

    <!-- HEADER -->
@yield('top_bar',view('front-page.components.header'))


    <!-- SLIDER -->
@yield('top_bar',view('front-page.components.slider'))

    @yield('content')
    <!-- BLOCKS WRAP -->


    <!-- FOOTER -->
@yield('js',view('front-page.components.footer.top'))

    <!-- FOOTER COPYRIGHT -->

    @yield('js',view('front-page.components.footer.bottom'))
</div>

<!-- Newsletter -->

@yield('js',view('front-page.components.subscribe'))

<!-- Modal -->
@yield('js',view('front-page.components.product_model'))

<div id="backtotop"><i class="fa fa-chevron-up"></i></div>

<!-- Javascript -->
@yield('js',view('front-page.components.js'))
</body>
</html>
