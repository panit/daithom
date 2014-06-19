
<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicons -->



        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/images/icons/favicon.png">

        <!--[if lt IE 9]>
          <script src="assets/js/minified/core/html5shiv.min.js"></script>
          <script src="assets/js/minified/core/respond.min.js"></script>
        <![endif]-->

        <!-- AgileUI CSS Core -->
{{ HTML::style('assets/css/minified/aui-production.min.css'); }}

        <!-- Theme UI -->
{{ HTML::style('assets/themes/minified/agileui/color-schemes/layouts/default.min.css'); }}
{{ HTML::style('assets/themes/minified/agileui/color-schemes/elements/default.min.css'); }}


        <!-- AgileUI Responsive -->


{{ HTML::style('assets/themes/minified/agileui/responsive.min.css'); }}
        <!-- AgileUI Animations -->


{{ HTML::style('assets/themes/minified/agileui/animations.min.css'); }}
        <!-- AgileUI JS -->

{{ HTML::script('assets/js/minified/aui-production.min.js'); }}


    </head>
   <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="login-page" class="mrg25B">

            <div id="page-header" class="clearfix">
                <div id="page-header-wrapper" class="clearfix">
                    <div id="header-logo">
                        AgileUI <i class="opacity-80">v1.01</i>

                        <a href="#" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                        <a href="#" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                        <a href="#" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                    </div>
                    <div class="button-group dropdown">
                        <a class="btn" href="index.html" title="Dashboard">
                            <span class="button-content text-center float-none font-size-11 text-transform-upr">
                                <i class="glyph-icon icon-dashboard float-left"></i>
                                Dashboard
                            </span>
                        </a>
                        <a class="btn" href="javascript:;" data-toggle="dropdown">
                            <span class="glyph-icon icon-separator">
                                <i class="glyph-icon icon-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu push-left">
                            <li class="dropdown-submenu">
                                <a href="javascript:;" data-toggle="dropdown" title="">
                                    Login pages
                                </a>
                                <ul class="dropdown-menu bg-white no-shadow">
                                    <li>
                                        <a href="login.html" title="Login example 1">
                                            Login example 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login-alt.html" title="Login example 2">
                                            Login example 2
                                        </a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="javascript:;" title="">
                                            Submenus
                                        </a>
                                        <ul class="dropdown-menu bg-white no-shadow">
                                            <li>
                                                <a href="javascript:;" title="">
                                                    Nav link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" title="">
                                                    Nav link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" title="">
                                                    Nav link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="javascript:;" title="">
                                            Dummy link
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" class="font-orange" title="Link example 1">
                                    <i class="glyph-icon icon-user mrg5R"></i>
                                    Different color link
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="Link example 2">
                                    <i class="glyph-icon icon-envelope font-red mrg5R"></i>
                                    <span class="font-italic">Link with red icon</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <span class="badge badge-absolute float-right radius-all-100 mrg5R bg-green tooltip-button" title="You can add badges even to dropdown menus!">7</span>
                                <a href="badges.html" class="font-gray-dark tooltip-button" data-placement="right" title="Click for more badges examples!">
                                    <i class="glyph-icon icon-user mrg5R"></i>
                                    Link with badge
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div><!-- #page-header -->

        </div>
<img src="assets/images/login-bg.png" class="login-img" alt="">
<div class="ui-widget-overlay bg-black opacity-60"></div>
        <div class="pad20A mrg25T">
            <div class="row mrg25T">


                <form action="{{ URL::route('login') }}" class="col-md-4 center-margin form-vertical mrg25T" method="POST">

                    <div class="ui-dialog modal-dialog mrg25T" id="login-form" style="position: relative !important;">
                        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                            <span class="ui-dialog-title">Login page</span>
                        </div>
                        <div class="pad20A pad0B ui-dialog-content ui-widget-content">
                           @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    <label for="">
                                        Username:
                                    </label>
                                </div>
                                <div class="form-input col-md-10">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-unlock-alt ui-state-default"></i>
                                        <input placeholder="Email address" type="text" name="username" id="username" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    <label for="">
                                        Password:
                                    </label>
                                </div>
                                <div class="form-input col-md-10">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-unlock-alt ui-state-default"></i>
                                        <input placeholder="Password" type="password" name="password" id="password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-checkbox-radio col-md-6">
                                    <input type="checkbox" class="custom-checkbox" name="remember-password" id="remember-password">
                                    <label for="remember-password" class="pad5L">Remember password?</label>
                                </div>
                                <div class="form-checkbox-radio text-right col-md-6">
                                    <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="ui-dialog-buttonpane text-center">
                            <button type="submit" class="btn large primary-bg text-transform-upr font-bold font-size-11 radius-all-4" id="demo-form-valid" title="Validate!">
                                <span class="button-content">
                                    Login
                                </span>
                            </button>
                             <a href="logout"><button type="button" class="btn large primary-bg text-transform-upr font-bold font-size-11 radius-all-4" id="demo-form-valid" title="Validate!">
                                <span class="button-content">
                                    Logout
                                </span>
                            </button></a>
                        </div>
                    </div>

                    <div class="ui-dialog mrg15T hide" id="login-forgot" style="position: relative !important;">
                        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                            <span class="ui-dialog-title">Recover password</span>
                        </div>
                        <div class="pad20A ui-dialog-content ui-widget-content">
                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    <label for="">
                                        Email address:
                                    </label>
                                </div>
                                <div class="form-input col-md-10">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-envelope-o ui-state-default"></i>
                                        <input placeholder="Email address" type="text" name="" id="">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="ui-dialog-buttonpane text-center">
                            <button type="submit" class="btn large primary-bg radius-all-4" id="demo-form-valid" onclick="javascript:$(&apos;#demo-form&apos;).parsley( &apos;validate&apos; );" title="Validate!">
                                <span class="button-content">
                                    Recover Password
                                </span>
                            </button>
                            <a href="javascript:;" switch-target="#login-form" switch-parent="#login-forgot" class="btn large transparent no-shadow toggle-switch font-bold font-size-11 radius-all-4" id="demo-form-valid" onclick="javascript:$(&apos;#demo-form&apos;).parsley( &apos;validate&apos; );" title="Validate!">
                                <span class="button-content">
                                    Cancel
                                </span>
                            </a>
                        </div>
                    </div>

                </form>

            </div>

        </div>


        <div id="page-footer-wrapper" class="login-footer">
            <div id="page-footer">
        	    Copyright &copy; 2013 - AgileUI
            </div>
        </div><!-- #page-footer-wrapper -->

    </body>

</html>
