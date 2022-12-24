<!DOCTYPE html>
<html style="font-size: 16px;" lang="tr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login Page">
    <meta name="description" content="">
    <title>Giriş</title>
    <link rel="stylesheet" href="{{asset('site4/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('site4/Giris.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('site4/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('site4/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Giriş">
    <meta property="og:type" content="website">
</head>
<body class="u-body u-xl-mode" data-lang="tr">
<section class="u-align-center u-clearfix u-palette-2-base u-section-1" id="carousel_fda3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-black u-border-2 u-border-black u-container-style u-group u-shape-rectangle u-group-1">
            <div class="u-container-layout u-valign-top u-container-layout-1">
                <div class="u-black u-container-style u-expanded-width u-group u-group-2">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <h2 class="u-text u-text-default u-text-white u-text-1">REGİSTER Form</h2>
                    </div>
                </div>
                <div class="u-black u-form u-login-control u-form-1">
                    <form method="post"  action="{{route('kayit.post')}}" class="u-clearfix u-form-custom-backend u-form-spacing-16 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                        @csrf
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="username-a30d" class="u-label u-text-body-alt-color u-label-1">Full Name *</label>
                            <input type="text" placeholder="Enter your Full Name"  name="username" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-1">
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="username-a30d" class="u-label u-text-body-alt-color u-label-1">TC *</label>
                            <input type="text" placeholder="Enter your TC"  name="tc" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-1">
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="username-a30d" class="u-label u-text-body-alt-color u-label-1">Phone Number *</label>
                            <input type="text" placeholder="Enter your Phone Number"  name="phonenumber" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-1">
                        </div>
                        <div class="u-form-group u-form-password u-label-top">
                            <label for="password-a30d" class="u-label u-text-body-alt-color u-label-2">Password *</label>
                            <input type="password" placeholder="Enter Password"  name="password" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2">
                        </div>
                        <div class="u-form-group u-form-password u-label-top">
                            <label for="password-a30d" class="u-label u-text-body-alt-color u-label-2">Password *</label>
                            <input type="password" placeholder="Again Password"  name="password_confirmation" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2">
                        </div>
                        <div class="u-align-left u-form-group u-form-submit u-label-top">
                            <input type="submit" value="REGİSTER" class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-white u-palette-2-base u-radius-50 u-text-active-palette-2-base u-text-hover-palette-2-base u-btn-1">
                        </div>
                    </form>

                </div>
                <p class="u-text u-text-body-alt-color u-text-default u-text-2"><a href="{{route('giris')}}" class="u-active-none u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-4">Login Page</a>
                </p>
            </div>
        </div>
    </div>
</section>



<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
    </a>
    <p class="u-text">
        <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
    </a>.
</section>

</body></html>










