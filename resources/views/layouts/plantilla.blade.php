<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>RD Business - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/pogo-slider.min.css')}}" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- Responsive CSS -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{asset('assets/images/loader.gif')}}" alt="#" />
        </div>
    </div>
    <!-- END LOADER -->
    

    <!-- Start header ESTATICO -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="{{route('home')}}">Home</a></li>
                        <li><a class="nav-link" href="{{route('about')}}">Aboutus</a></li>
                        <li><a class="nav-link" href="{{route('servicio')}}">Services</a></li>
                        <li><a class="nav-link" href="#">Blog</a></li>
                        <li><a class="nav-link" href="{{route('contacto')}}">Contact us</a></li>
                        <li><a class="nav-link active" style="background:#f2184f;color:#fff;" href="#">Sinup now</a>
                        </li>
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="{{asset('assets/images/search_icon.png')}}" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
        
    </header>
    <!-- End header -->
    @yield('franja')
    

    {{-- INICIO DEL CUERPO --}}
    @yield('contenido')

    {{-- FIN DEL CUERPO --}}

    <!-- Start Footer estatico -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 margin-bottom_30">
                    <img src="{{asset('assets/img/f_logo.png')}}" alt="#" />
                </div>
                <div class="col-xl-6 white_fonts">
                    <div class="row">
                        <div class="col-md-12 white_fonts margin-bottom_30">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="full icon">
                                <img src="{{asset('assets/images/social1.png')}}">
                            </div>
                            <div class="full white_fonts">
                                <p>London 145
                                    <br>United Kingdom</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="full icon">
                                <img src="{{asset('assets/images/social2.png')}}">
                            </div>
                            <div class="full white_fonts">
                                <p>consultation@gmail.com
                                    <br>consultation@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="full icon">
                                <img src="{{asset('assets/images/social3.png')}}">
                            </div>
                            <div class="full white_fonts">
                                <p>+7586656566
                                    <br>+7586656566</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="full social_icon margin-top_20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 white_fonts">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer_blog footer_menu">
                                <h3>Menus</h3>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>
                            <div class="footer_blog recent_post_footer">
                                <h3>Recent Post</h3>
                                <p>Participate in staff meetings manage dedicated to marketing November 25, 2019</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer_blog full">
                                <h3>Newsletter</h3>
                                <div class="newsletter_form">
                                    <form action="index.html">
                                        <input type="email" placeholder="Your Email" name="#" required />
                                        <button>Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© 2019 Business . All Rights Reserved.</p>
                    <ul class="bottom_menu">
                        <li><a href="#">Term of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.pogo-slider.min.js')}}"></script>
    <script src="{{asset('assets/js/slider-index.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/images-loded.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
        /* counter js */

        (function ($) {
            $.fn.countTo = function (options) {
                options = options || {};

                return $(this).each(function () {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof (settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof (settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 1000,           // how long it should take to count between the target numbers
                refreshInterval: 100,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function ($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
</body>

</html>