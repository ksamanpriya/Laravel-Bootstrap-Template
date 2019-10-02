<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 10/02/2019
 * Time: 12:48 AM
 */
?>
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo">Admiry</a>-->
            <a href="index.html" class="logo"><img src="{{asset('dash-board/images/logo.png')}}" height="24" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div class="user-details">
            <div class="text-center">
                <img src="{{asset('dash-board/images/users/avatar-6.jpg')}}" alt="" class="rounded-circle">
            </div>
            <div class="user-info">
                <h4 class="font-16 text-white">Elena Retson</h4>
                <span class="text-white"><i class="fa fa-dot-circle-o text-success "></i> Online</span>
            </div>
        </div>

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title text-white">General</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ti-home"></i>
                        <span> Dashboard <span class="badge badge-primary pull-right">3</span></span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-light-bulb"></i> <span> User Interface </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-images.html">Images</a></li>
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-lightbox.html">Lightbox</a></li>
                        <li><a href="ui-navs.html">Navs</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                        <li><a href="ui-badge.html">Badge</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-video.html">Video</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-crown"></i> <span> Advanced UI </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="advanced-animation.html">Animation</a></li>
                        <li><a href="advanced-highlight.html">Highlight</a></li>
                        <li><a href="advanced-rating.html">Rating</a></li>
                        <li><a href="advanced-nestable.html">Nestable</a></li>
                        <li><a href="advanced-alertify.html">Alertify</a></li>
                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                        <li><a href="advanced-sessiontimeout.html">Session Timeout</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-spray"></i> <span> Icons </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="icons-material.html">Material Design</a></li>
                        <li><a href="icons-ion.html">Ion Icons</a></li>
                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                        <li><a href="icons-themify.html">Themify Icons</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-typicons.html">Typicons Icons</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Forms </span> <span class="badge badge-success pull-right">8</span></a>
                    <ul class="list-unstyled">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-advanced.html">Form Advanced</a></li>
                        <li><a href="form-editors.html">Form Editors</a></li>
                        <li><a href="form-uploads.html">Form File Upload</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        <li><a href="form-xeditable.html">Form Xeditable</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Charts </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="charts-morris.html">Morris Chart</a></li>
                        <li><a href="charts-chartist.html">Chartist Chart</a></li>
                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="charts-flot.html">Flot Chart</a></li>
                        <li><a href="charts-c3.html">C3 Chart</a></li>
                        <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout"></i><span> Tables </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Table</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li>

                <li class="menu-title text-white">Extra</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-map"></i><span> Maps </span> <span class="badge badge-danger pull-right">2</span></a>
                    <ul class="list-unstyled">
                        <li><a href="maps-google.html"> Google Map</a></li>
                        <li><a href="maps-vector.html"> Vector Map</a></li>
                    </ul>
                </li>

                <li>
                    <a href="calendar.html" class="waves-effect"><i class="ti-calendar"></i><span> Calendar </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Pages </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-directory.html">Directory</a></li>
                        <li><a href="pages-login.html">Login</a></li>
                        <li><a href="pages-register.html">Register</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        <li><a href="pages-blank.html">Blank Page</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
