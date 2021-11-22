<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title') | Crypto Growth Labs</title>


    <link rel="stylesheet" href="{{ asset('main/js/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css') }}"
          type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/js/plugins/goodlayers-core/plugins/fa5/fa5.css') }}"
          type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/js/plugins/goodlayers-core/plugins/elegant/elegant-font.css') }}"
          type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/js/plugins/goodlayers-core/plugins/ionicons/ionicons.css') }}"
          type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/js/plugins/goodlayers-core/plugins/simpleline/simpleline.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/js/plugins/goodlayers-core/plugins/style.css') }}"
          type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/js/plugins/goodlayers-core/include/css/page-builder.css') }}"
          type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/js/plugins/revslider/public/assets/css/rs6.css') }}"
          type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/css/style-core.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/css/corzo-style-custom.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('main/js/plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css') }}" type="text/css" media="all" />

    @yield('top-assets')
</head>

<body class="home page-template-default page page-id-12613 theme-corzo gdlr-core-body woocommerce-no-js corzo-body corzo-body-front corzo-full corzo-with-sticky-navigation corzo-blockquote-style-3 gdlr-core-link-to-lightbox"
      data-home-url="index.html">

<div class="corzo-mobile-header-wrap">
    <div class="corzo-mobile-header corzo-header-background corzo-style-slide corzo-sticky-mobile-navigation" id="corzo-mobile-header">
        <div class="corzo-mobile-header-container corzo-container clearfix">
            <div class="corzo-logo corzo-item-pdlr">
                <div class="corzo-logo-inner">
                    <a class="corzo-fixed-nav-logo" href="{{ url('/') }}">
                        <img src="{{ asset('crypto-growth-labs-logo.png') }}" alt="" width="200"
                            title="logox1"/>
                    </a>
                    <a class="corzo-orig-logo" href="{{ url('/') }}">
                        <img src="{{ asset('crypto-growth-labs-logo.png') }}" alt="" width="200"
                             title="logox1"/>
                    </a>
                </div>
            </div>
            <div class="corzo-mobile-menu-right">

                <div class="corzo-mobile-menu">
                    <a class="corzo-mm-menu-button corzo-mobile-menu-button corzo-mobile-button-hamburger" href="#corzo-mobile-menu"><span></span></a>
                    <div class="corzo-mm-menu-wrap corzo-navigation-font" id="corzo-mobile-menu" data-slide="right">
                        <ul id="menu-main-navigation" class="m-menu">
                            <li class="menu-item menu-item-home current-menu-item page_item page-item-12613 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children">
                                <a href="{{ url('/') }}" aria-current="page">Home</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="">Company</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ url('about') }}">About Us</a></li>
                                    <li class="menu-item"><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                                    <li class="menu-item"><a href="{{ url('legal') }}">Legal</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('services') }}">Services</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('contact') }}">Contact</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('login') }}">Login</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('register') }}">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="corzo-body-outer-wrapper">
    <div class="corzo-body-wrapper clearfix corzo-with-transparent-header corzo-with-frame">

        <div class="corzo-header-background-transparent">

            <div class="corzo-top-bar">
                <div class="corzo-top-bar-background"></div>
                <div class="corzo-top-bar-container corzo-container">
                    <div class="corzo-top-bar-container-inner clearfix">
                        <div class="corzo-top-bar-left corzo-item-pdlr">
                            <div class="corzo-top-bar-left-text">
                                <i class="fa fa-phone" style="font-size: 19px; color: #d32525; margin-right: 10px;"></i>+1-2353-4352-555
                                <i class="fa fa-clock-o" style="font-size: 19px; color: #d32525; margin-left: 20px; margin-right: 10px;"></i>Mon-Sat : 10:00 - 19:00
                            </div>
                        </div>
                        <div class="corzo-top-bar-right corzo-item-pdlr">
                            <div class="corzo-top-bar-right-text">
                                <i class="fa5s fa5-envelope-open" style="font-size: 19px; color: #d32525; margin-left: 20px; margin-right: 10px;"></i>
                                <a href="#" class="__cf_email__">info@cryptogrowthlabs.com</a>
                            </div>
                            <div class="corzo-top-bar-right-social">
                                <a href="#" target="_blank" class="corzo-top-bar-social-icon" title="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank" class="corzo-top-bar-social-icon" title="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <header class="corzo-header-wrap corzo-header-style-plain corzo-style-menu-right corzo-sticky-navigation corzo-style-slide" data-navigation-offset="75">
                <div class="corzo-header-background"></div>
                <div class="corzo-header-container corzo-container">
                    <div class="corzo-header-container-inner clearfix">
                        <div class="corzo-logo corzo-item-pdlr">
                            <div class="corzo-logo-inner">
                                <a class="corzo-fixed-nav-logo" href="{{ url('/') }}">
                                    <img src="{{ asset('crypto-growth-labs-logo.png') }}" alt=""
                                        width="200" title="logox1" />
                                </a>
                                <a class="corzo-orig-logo" href="{{ url('/') }}">
                                    <img src="{{ asset('crypto-growth-labs-logo.png') }}" alt="" width="200"
                                        title="logox1"/>
                                </a>
                            </div>
                        </div>
                        <div class="corzo-navigation corzo-item-pdlr clearfix">
                            <div class="corzo-main-menu" id="corzo-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item menu-item-home current-menu-item page_item page-item-12613 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children corzo-normal-menu">
                                        <a href="{{ url('/') }}" class="sf-with-ul-pre"><span class="corzo-menu-item-description">01</span>Home</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children corzo-normal-menu">
                                        <a href="" class="sf-with-ul-pre"><span class="corzo-menu-item-description">02</span>About Us</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ url('about') }}">About Us</a></li>
                                            <li class="menu-item"><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                                            <li class="menu-item"><a href="{{ url('legal') }}">Legal</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item corzo-normal-menu">
                                        <a href="{{ url('services') }}" class="sf-with-ul-pre"><span class="corzo-menu-item-description">03</span>Services</a>
                                    </li>
                                    <li class="menu-item corzo-normal-menu">
                                        <a href="{{ url('contact') }}" class="sf-with-ul-pre"><span class="corzo-menu-item-description">04</span>Contact</a>
                                    </li>
                                </ul>
                                <div class="corzo-navigation-slide-bar corzo-navigation-slide-bar-style-dot" data-size-offset="0" id="corzo-navigation-slide-bar"></div>
                            </div>
                            <div class="corzo-main-menu-right-wrap clearfix">
                                <a class="corzo-main-menu-right-button corzo-button-1 corzo-style-round"
                                   href="{{ route('login') }}" target="_self">Login</a>
                                <a class="corzo-main-menu-right-button corzo-button-1 corzo-style-round"
                                   href="{{ route('register') }}" target="_self">Sign up</a>
                            </div>
                        </div>
                        <!-- corzo-navigation -->
                    </div>
                    <!-- corzo-header-inner -->
                </div>
                <!-- corzo-header-container -->
            </header>
            <!-- header -->
        </div>

        @yield('content')

        <footer>
            <div class="corzo-footer-wrapper">
                <div class="corzo-footer-container corzo-container clearfix">
                    <div class="corzo-footer-column corzo-item-pdlr corzo-column-15">
                        <div id="text-7" class="widget widget_text corzo-widget">
                            <div class="textwidget">
                                <p>
                                    <img
                                        loading="lazy"
                                        src="{{ asset('crypto-growth-labs-logo.png') }}"
                                        alt=""
                                        width="240"
                                        title="logox1"
                                    />
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="corzo-footer-column corzo-item-pdlr corzo-column-15">
                        <div id="gdlr-core-custom-menu-widget-1" class="widget widget_gdlr-core-custom-menu-widget corzo-widget">
                            <h1 class="corzo-widget-title corzo-with-divider">About Us</h1>
                            <span class="clear"></span>
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                                    <li class="menu-item corzo-normal-menu">
                                        <a href="{{ url('services') }}">Services</a></li>
                                    <li class="menu-item corzo-normal-menu">
                                        <a href="{{ url('terms') }}">Terms</a></li>
                                    <li class="menu-item corzo-normal-menu">
                                        <a href="{{ url('legal') }}">Legal</a></li>
                                    <li class="menu-item corzo-normal-menu">
                                        <a href="{{ url('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="corzo-footer-column corzo-item-pdlr corzo-column-15">
                        <div id="text-3" class="widget widget_text corzo-widget">
                            <h1 class="corzo-widget-title corzo-with-divider">New York</h1>
                            <span class="clear"></span>
                            <div class="textwidget">
                                <p>
                                    <span style="font-size: 18px; color: #999999; font-weight: 400;">Email</span><br />
                                    <span style="font-size: 18px; color: #ffffff; font-weight: 600;">
                                                <a href="#" class="__cf_email__">info@cryptogrowthlabs.com</a>
                                            </span>
                                    <br />
                                    <span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span><br />
                                    <span style="font-size: 18px; color: #999999; font-weight: 400;">Phone</span><br />
                                    <span style="font-size: 18px; color: #ffffff; font-weight: 600;">+1-2345-3456</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="corzo-footer-column corzo-item-pdlr corzo-column-15">
                        <div id="text-8" class="widget widget_text corzo-widget">
                            <h1 class="corzo-widget-title corzo-with-divider">London</h1>
                            <span class="clear"></span>
                            <div class="textwidget">
                                <p>
                                    <span style="font-size: 18px; color: #999999; font-weight: 400;">Email</span><br />
                                    <span style="font-size: 18px; color: #ffffff; font-weight: 600;">
                                                <a href="#" class="__cf_email__">info@cryptogrowthlabs.com</a>
                                            </span>
                                    <br />
                                    <span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span><br />
                                    <span style="font-size: 18px; color: #999999; font-weight: 400;">Phone</span><br />
                                    <span style="font-size: 18px; color: #ffffff; font-weight: 600;">+44-345-3456</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="corzo-copyright-wrapper">
                <div class="corzo-copyright-container corzo-container">
                    <div class="corzo-copyright-text corzo-item-pdlr">
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align" style="padding-bottom: 0px;">
                            <a
                                href="#"
                                target="_blank"
                                class="gdlr-core-social-network-icon"
                                title="facebook"
                                style="font-size: 17px; color: #060606; width: 40px; line-height: 40px; background-color: #ffffff; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                            >
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a
                                href="#"
                                target="_blank"
                                class="gdlr-core-social-network-icon"
                                title="linkedin"
                                style="font-size: 17px; color: #060606; margin-left: 10px; width: 40px; line-height: 40px; background-color: #ffffff; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                            >
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a
                                href="#"
                                target="_blank"
                                class="gdlr-core-social-network-icon"
                                title="twitter"
                                style="font-size: 17px; color: #060606; margin-left: 10px; width: 40px; line-height: 40px; background-color: #ffffff; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                            >
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a
                                href="#"
                                target="_blank"
                                class="gdlr-core-social-network-icon"
                                title="instagram"
                                style="font-size: 17px; color: #060606; margin-left: 10px; width: 40px; line-height: 40px; background-color: #ffffff; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"
                            >
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>


<script type="text/javascript" src="{{ asset('main/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/plugins/revslider/public/assets/js/rbtools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/plugins/revslider/public/assets/js/rs6.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/plugins/goodlayers-core/plugins/script.js') }}"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var gdlr_core_pbf = { admin: "", video: { width: "640", height: "360" }, ajax_url: "#" };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('main/js/plugins/goodlayers-core/include/js/page-builder.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/ui/effect.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/plugins/jquery.mmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/plugins/jquery.superfish.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/plugins/script-core.js') }}"></script>
<!-- Rev Slider Plugins Starts Here: -->

<script type="text/javascript">
    function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                var m = pw > e.gw[ix] + e.tabw + e.thumbw ? 1 : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
                newh = e.gh[ix] * m + (e.tabh + e.thumbh);
            }
            if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
            document.getElementById(e.c).height = newh + "px";
            window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e);
        }
        //});
    }
</script>
<script type="text/javascript">
    setREVStartSize({
        c: "rev_slider_1_1",
        rl: [1240, 1240, 778, 480],
        el: [935, 935, 600, 500],
        gw: [1320, 1320, 778, 480],
        gh: [935, 935, 600, 500],
        type: "standard",
        justify: "",
        layout: "fullwidth",
        mh: "0",
    });
    var revapi1, tpj;
    function revinit_revslider11() {
        jQuery(function () {
            tpj = jQuery;
            revapi1 = tpj("#rev_slider_1_1");
            if (revapi1 == undefined || revapi1.revolution == undefined) {
                revslider_showDoubleJqueryError("rev_slider_1_1");
            } else {
                revapi1.revolution({
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1240,1240,778,480",
                    gridwidth: "1320,1320,778,480",
                    gridheight: "935,935,600,500",
                    perspective: 600,
                    perspectiveType: "local",
                    editorheight: "935,768,600,500",
                    responsiveLevels: "1240,1240,778,480",
                    progressBar: { disableProgressBar: true },
                    navigation: {
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true,
                        },
                        bullets: {
                            enable: true,
                            tmp: '<span class="tp-bullet-inner"></span>',
                            style: "uranus",
                            hide_over: "1280px",
                            v_offset: 36,
                            space: 7,
                        },
                        tabs: {
                            enable: true,
                            tmp: '<div class="tp-tab-content">  <span class="tp-tab-title"></span></div>',
                            style: "corzo-rev",
                            hide_onmobile: true,
                            hide_under: "1280px",
                            h_offset: 1,
                            v_offset: 46,
                            space: 40,
                            width: 280,
                            height: 80,
                            wrapper_padding: 5,
                            wrapper_color: "transparent",
                            mhoff: 0,
                        },
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true,
                    },
                });
            }
        });
    } // End of RevInitScript
    var once_revslider11 = false;
    if (document.readyState === "loading") {
        document.addEventListener("readystatechange", function () {
            if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
                once_revslider11 = true;
                revinit_revslider11();
            }
        });
    } else {
        once_revslider11 = true;
        revinit_revslider11();
    }
</script>
<script>
    var htmlDivCss = unescape(".jost-font%7B%20font-family%3A%20%27jost%27%20%21important%3B%20%7D");
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script>
    var htmlDivCss = unescape(
        "%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C255%2C255%2C0%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C255%2C255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgba%28255%2C255%2C255%2C0%29%3B%0A%20%20background-color%3A%20rgba%28255%2C255%2C255%2C0.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_1_1_wrapper%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argba%28255%2C255%2C255%2C1%29%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.corzo-rev%20.tp-tab%7B%20%0A%20%20opacity%3A1%3B%20%20%20%20%20%20%0A%20%20padding%3A10px%3B%0A%20%20box-sizing%3Aborder-box%3B%0A%20%20font-family%3A%20%27Jost%27%2C%20sans-serif%3B%0A%20%20border-top%3A%203px%20solid%20%23e5e5e5%3B%0A%20%20background%3A%20none%3B%0A%20%7D%0A%23rev_slider_1_1_wrapper%20.corzo-rev%20.tp-tab-content%7B%0A%20%20%20%20background%3A%20none%3B%0A%20%20%20%20position%3Arelative%3B%0A%20%20%20%20padding%3A26px%2015px%2015px%200px%3B%0A%20left%3A0px%3B%0A%20overflow%3Ahidden%3B%0A%20margin-top%3A-15px%3B%0A%20%20%20%20box-sizing%3Aborder-box%3B%0A%20%20%20%20color%3A%23333%3B%0A%20%20%20%20display%3A%20inline-block%3B%0A%20%20%20%20width%3A100%25%3B%0A%20%20%20%20height%3A100%25%3B%0A%20position%3Aabsolute%3B%20%0A%7D%0A%23rev_slider_1_1_wrapper%20.corzo-rev%20.tp-tab-date%7B%0A%20%20display%3Ablock%3B%0A%20%20color%3A%20%23aaaaaa%3B%0A%20%20font-weight%3A500%3B%0A%20%20font-size%3A12px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%7D%0A%23rev_slider_1_1_wrapper%20.corzo-rev%20.tp-tab-title%7B%0A%20%20%20%20display%3Ablock%3B%09%0A%20%20%20%20text-align%3A%20left%3B%0A%20%20%20%20color%3A%23ffffff%3B%0A%20%20%20%20font-size%3A20px%3B%0A%20%20%20%20font-weight%3A400%3B%0A%20%20%20%20text-transform%3Anone%3B%0A%20%20%20%20line-height%3A17px%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.corzo-rev%20.tp-tab%3Ahover%2C%0A%23rev_slider_1_1_wrapper%20.corzo-rev%20.tp-tab.selected%20%7B%0A%09background%3A%20none%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.corzo-rev%20.tp-tab.selected%20.tp-tab-title%20%0A%7B%0A%20%20%20%20color%20%3A%20%23d32525%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.corzo-rev%20.tp-tab.selected%20%7B%20%0A%20%20border-top%3A%203px%20solid%20%23d32525%3B%0A%20%7D%0A%0A%2F%2A%20media%20queries%20%2A%2F%0A%40media%20only%20screen%20and%20%28max-width%3A%20960px%29%20%7B%0A%0A%7D%0A%40media%20only%20screen%20and%20%28max-width%3A%20768px%29%20%7B%0A%20%0A%7D%0A"
    );
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script>
    var htmlDivCss = unescape("%0A%0A%0A%0A%0A%0A%0A%0A");
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }
</script>
<script type="text/javascript">
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            var err = "<div class='rs_error_message_box'>";
            err += "<div class='rs_error_message_oops'>Oops...</div>";
            err += "<div class='rs_error_message_content'>";
            err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
            err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
            err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
            err += "</div>";
            err += "</div>";
            var slider = document.getElementById(sliderID);
            slider.innerHTML = err;
            slider.style.display = "block";
        }
    }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/619bf8996bb0760a4943d24f/1fl4k67dl';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
