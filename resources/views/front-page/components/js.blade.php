<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 10/02/2019
 * Time: 12:44 AM
 */
?>
<!-- jQuery  -->
<script src="{{asset('front-page/js/jquery.js')}}"></script>

<!-- ADDTHIS -->
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
<script type="text/javascript">
    // Call this function once the rest of the document is loaded
    function loadAddThis() {
        addthis.init()
    }
</script>

<!-- ADDTHIS -->
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
<script type="text/javascript">
    // Call this function once the rest of the document is loaded
    function loadAddThis() {
        addthis.init()
    }
</script>

<script src="{{asset('front-page/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front-page/plugin/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('front-page/js/bs-navbar.js')}}"></script>
<script src="{{asset('front-page/js/vendors/isotope/isotope.pkgd.js')}}"></script>
<script src="{{asset('front-page/js/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('front-page/js/vendors/tweets/tweecool.min.js')}}"></script>
<script src="{{asset('front-page/js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('front-page/js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front-page/js/jquery.sticky.js')}}"></script>
<script src="{{asset('front-page/js/jquery.subscribe-better.js')}}"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="{{asset('front-page/js/vendors/select/jquery.selectBoxIt.min.js')}}"></script>
<script src="{{asset('front-page/js/main.js')}}"></script>

@stack('js-link')
@stack('js-script')
