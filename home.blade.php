<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SHP</title>

    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="shortcut icon" href="48x48px.ico">
    <link rel="icon" type="image/x-icon" href="48x48px.ico">
    <!-- <link rel="icon" type="image/png" href="16x16px.png" sizes="16x16">
    <link rel="icon" type="image/png" href="32x32px.png" sizes="32x32">
    <link rel="icon" type="image/png" href="48x48px.png" sizes="48x48"> -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
</head>
<body >
<div  id="headers"></div>
<header id="headers" class="header">
    <a class="logo " href="#headers" >
        @if($genereallogo)
        <img class="logo_image" src="{{asset('uploads/header/'.$genereallogo)}}" alt="logo_image">
        @endif
    </a>

    <div class="header_right">
        <button class="get-quote js-popup-toggle" data-popup="request">
            <div class="get-quote_filled-bg"></div>
            <span class="get-quote_text">{{$butontext}}</span>
        </button>
        <button class="menu-toggle">
            <div class="menu-toggle_bg"></div>
            <div class="menu-toggle_filled-bg"></div>
            <div class="menu-toggle_close-bg"></div>
        </button>
    </div>

    <nav class="menu">
        <div >
@if($job2[0]->job != " ")
        @foreach($menu->slice(0, 5) as $menuas)
        <a href="#{{str_replace(' ','_',$menuas->name)}}" class="menu_link">
                <span class="menu_link-text">
                    {{$menuas->name}}
                </span>
        </a>
        @endforeach
    @else 
            @foreach($menu->slice(0, 4) as $menuas)
                <a href="#{{str_replace(' ','_',$menuas->name)}}" class="menu_link">
                <span class="menu_link-text">
                    {{$menuas->name}}
                </span>
                </a>
            @endforeach
    @endif
    
    </div>
    </nav>

</header>

<main >
    @if($canvasphoto)
    <div class="particles js-particles" data-image="{{asset('uploads/header/'.$canvasphoto)}}">
    </div>
    @endif
    <div class="content">

        <div class="about js-mask-holder">

            <h1>
                <span class="about_title-line" >
                    <span class="about_title-text"><strong> @if($generaltitleArr[0]){{$generaltitleArr[0]}} @else @endif</strong> @if($generaltitleArr[1]){{$generaltitleArr[1]}}@else   @endif</span>
                </span>

                <span class="about_title-line">
                    <span class="about_title-text">@if($generaltitleArr[2]){{$generaltitleArr[2]}} @else @endif<strong> @if ($generaltitleArr[3]){{$generaltitleArr[3]}} @else  @endif</strong></span>
                </span>
            </h1>




            <div class="about_text">
                @if($abouttextone)
                <p>{{$abouttextone}}</p>
                    @endif
                <h3>
                    @if($abouttexttwo)
                    {{$abouttexttwo}}
                        @endif
                    @if($buttoncontact)
                    <a href="" class="js-popup-toggle" data-popup="request">{{$buttoncontact}}</a>
                        @else

                    @endif
                </h3>
            </div>
            <div class="about_mask js-mask"></div>

        </div>
        <a name="what-we-do"></a>
        <div id="{{str_replace(' ','_',$menu[0]->name)}}" class="services">
            <div class="services_title-wrapper">
                <h2 class="services_title">{{$header3}}</h2>
            </div>
            <div class="services_holder">
                <div class="services_item">
                    <div class="service service__red  js-animation">
                        <svg class="service_bg" width="267" height="348" viewBox="0 0 267 348" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <style>
                                @keyframes figure { 0% { stroke-dashoffset: -656px; animation-timing-function: cubic-bezier(.5,0,.5,1); } 100% { stroke-dashoffset: -1311px; } }

                                .animated .figure {
                                    animation: 1.9s linear forwards figure;
                                }
                            </style>
                            <path class="figure" d="M132.579 169.652L132.579 115.866C125.687 135.715 114.335 151.78 95.8209 162.169C85.1279 168.239 73.0134 171.359 60.7182 171.206L60.7182 99.0076L205.217 99.0076C205.335 120.241 197.227 137.59 182.243 151.999C168.358 165.446 145.62 173.504 132.579 169.652Z" stroke="#FF6547" stroke-width="2.51645" stroke-dasharray="656" stroke-dashoffset="-656"/>
                            <path class="service_bg-border" d="M139.467 3.10716L260.415 72.9365C264.039 75.0285 266.271 78.8947 266.271 83.0787V265.702C266.271 269.886 264.039 273.752 260.415 275.844L139.467 345.674C135.844 347.766 131.379 347.766 127.756 345.674L6.80793 275.844C3.18449 273.752 0.952354 269.886 0.952354 265.702V83.0787C0.952354 78.8947 3.18449 75.0285 6.80793 72.9365L127.756 3.10716C131.379 1.01516 135.844 1.01516 139.467 3.10716Z" stroke="#FF6547" stroke-width="1.25822"/>
                        </svg>
                        <span class="service_title">Event design and production</span>
                        <div class="service_text">
                            <ul>
                                @if($line1)
                                <li>
                                    <span class="service_text-line" >{{$line1}}</span>
                                </li>
                                @else
                                    @endif
                                @if($line2)
                                <li>
                                    <span class="service_text-line">{{$line2}}</span>
                                </li>
                                    @else
                                    @endif
                                    @if($line3)
                                <li>
                                    <span class="service_text-line">{{$line3}}</span>
                                </li>
                                    @else
                                        @endif
                                    @if($line4)
                                <li>
                                    <span class="service_text-line">{{$line4}}</span>
                                </li>
                                    @else
                                        @endif
                                    @if($line5)
                                <li>
                                    <span class="service_text-line">{{$line5}}</span>
                                </li>
                                    @else
                                        @endif
                                    @if($line6)
                                <li>
                                    <span class="service_text-line">{{$line6}}</span>
                                </li>
                                        @else
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="services_item">
                    <div class="service service__yellow js-animation">
                        <svg class="service_bg" width="307" height="308" viewBox="0 0 307 308" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <style>
                                @keyframes a0_do { 0% { stroke-dashoffset: -200px; } 100% { stroke-dashoffset: -200px; } }
                                @keyframes a1_do { 0% { stroke-dashoffset: 200px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 33.3333% { stroke-dashoffset: 0px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 100% { stroke-dashoffset: 400px; } }
                                @keyframes a2_do { 0% { stroke-dashoffset: 200px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 53.3333% { stroke-dashoffset: 0px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 100% { stroke-dashoffset: 400px; } }
                                @keyframes a3_do { 0% { stroke-dashoffset: 200px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 66.6667% { stroke-dashoffset: 0px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 100% { stroke-dashoffset: 400px; } }
                                @keyframes a4_do { 0% { stroke-dashoffset: 200px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 33.3333% { stroke-dashoffset: 0px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 100% { stroke-dashoffset: 400px; } }
                                @keyframes a5_do { 0% { stroke-dashoffset: 200px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 60% { stroke-dashoffset: 0px; animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 100% { stroke-dashoffset: 400px; } }

                                .animated .figure1 {
                                    animation: 1.5s linear both a0_do;
                                }
                                .animated .figure2 {
                                    animation: 1.5s linear both a1_do;
                                }
                                .animated .figure3 {
                                    animation: 1.5s linear both a2_do;
                                }
                                .animated .figure4 {
                                    animation: 1.5s linear both a3_do;
                                }
                                .animated .figure5 {
                                    animation: 1.5s linear both a4_do;
                                }
                                .animated .figure6 {
                                    animation: 1.5s linear both a5_do;
                                }
                            </style>
                            <g style="transform: scale(0.72) translate(34.5%, 18%)">
                                <path class="figure1" d="M100.311,0.610352L100.311,200.61" stroke="#FFD369" stroke-width="6" stroke-dashoffset="-200" stroke-dasharray="200" transform="translate(100.311,100.61) translate(-100.311,-100.61)" />
                                <path d="M100.311,0.610352L100.311,200.61" stroke="#FFD369" stroke-width="6" stroke-dashoffset="-200" stroke-dasharray="200" transform="translate(100.311,100.61) rotate(-180) translate(-100.311,-100.61)"/>
                                <path class="figure2" d="M100.311,0.610352L100.311,200.61" stroke="#FFD369" stroke-width="6" stroke-dashoffset="200" stroke-dasharray="200" transform="translate(100.311,100.61) rotate(90) translate(-100.311,-100.61)" />
                                <path class="figure3" d="M100.311,0.610352L100.311,200.61" stroke="#FFD369" stroke-width="6" stroke-dashoffset="200" stroke-dasharray="200" transform="translate(100.311,100.61) translate(-100.311,-100.61)" />
                                <path class="figure4" d="M171.02,171.321L29.5982,29.8997" stroke="#FFD369" stroke-width="6" stroke-dasharray="200" stroke-dashoffset="200" transform="translate(100.309,100.61) translate(-100.309,-100.61)" />
                                <path class="figure5" d="M171.02,171.321L29.5982,29.8997" stroke="#FFD369" stroke-width="6" stroke-dasharray="200" stroke-dashoffset="200" transform="translate(100.309,100.61) rotate(90) translate(-100.309,-100.61)" />
                                <path class="figure6" d="M171.02,171.321L29.5982,29.8997" stroke="#FFD369" stroke-width="6" stroke-dasharray="200" stroke-dashoffset="200" transform="translate(100.309,100.61) rotate(-90) translate(-100.309,-100.61)" />
                            </g>
                            <path class="service_bg-border service_bg-border__yellow" d="M139.758 3.14813C143.143 1.06524 147.352 0.840504 150.939 2.55123L170.049 11.6665C172.425 12.7994 175.088 13.1829 177.687 12.7662L198.593 9.41315C202.516 8.78387 206.491 10.1871 209.15 13.1402L223.318 28.8749C225.079 30.8306 227.393 32.2043 229.953 32.8136L250.551 37.7162C254.417 38.6363 257.552 41.454 258.879 45.1998L265.947 65.1586C266.825 67.6392 268.438 69.7939 270.57 71.3365L287.723 83.7484C290.943 86.0779 292.761 89.8809 292.553 93.8492L291.445 114.994C291.308 117.621 291.973 120.229 293.352 122.47L304.45 140.502C306.533 143.886 306.758 148.095 305.047 151.682L295.932 170.793C294.799 173.168 294.415 175.832 294.832 178.43L298.185 199.336C298.814 203.26 297.411 207.235 294.458 209.894L278.723 224.062C276.768 225.823 275.394 228.137 274.785 230.697L269.882 251.295C268.962 255.16 266.144 258.296 262.398 259.622L242.44 266.69C239.959 267.569 237.804 269.181 236.262 271.313L223.85 288.467C221.52 291.686 217.717 293.505 213.749 293.297L192.605 292.189C189.977 292.051 187.369 292.716 185.128 294.095L167.096 305.194C163.712 307.276 159.503 307.501 155.916 305.79L136.805 296.675C134.43 295.542 131.767 295.159 129.168 295.575L108.262 298.929C104.338 299.558 100.363 298.155 97.7044 295.201L83.5366 279.467C81.7758 277.511 79.4616 276.137 76.9016 275.528L56.3037 270.625C52.4379 269.705 49.3025 266.888 47.976 263.142L40.9081 243.183C40.0296 240.702 38.4173 238.548 36.2853 237.005L19.1315 224.593C15.9122 222.264 14.0936 218.461 14.3016 214.492L15.4096 193.348C15.5473 190.72 14.8823 188.113 13.5029 185.871L2.40472 167.84C0.321833 164.456 0.0970956 160.246 1.80782 156.66L10.9231 137.549C12.056 135.174 12.4395 132.51 12.0228 129.912L8.66974 109.005C8.04046 105.082 9.44372 101.107 12.3968 98.4478L28.1315 84.28C30.0871 82.5192 31.4608 80.205 32.0702 77.645L36.9728 57.0471C37.8929 53.1813 40.7105 50.0459 44.4564 48.7194L64.4152 41.6515C66.8958 40.773 69.0505 39.1608 70.5931 37.0288L83.005 19.875C85.3345 16.6556 89.1375 14.837 93.1058 15.045L114.25 16.153C116.878 16.2907 119.486 15.6257 121.727 14.2464L139.758 3.14813Z" stroke="#FFD369" stroke-width="1.25822"/>
                        </svg>
                        <span class="service_title">Brand Experiences</span>

                        <div class="service_text">
                            <ul>
                                @if($line7)
                                <li>
                                    <span class="service_text-line">{{$line7}}</span>
                                </li>
                                @else
                                    @endif
                                @if($line8)
                                <li>
                                    <span class="service_text-line">{{$line8}}</span>
                                </li>
                                @else
                                @endif
                                @if($line9)
                                <li>
                                    <span class="service_text-line">{{$line9}}</span>
                                </li>
                                @else
                                @endif
                                @if($line10)
                                <li>
                                    <span class="service_text-line">{{$line10}}</span>
                                </li>
                                @else
                                    @endif
                                @if($line11)
                                <li>
                                    <span class="service_text-line">{{$line11}}</span>
                                </li>
                                @else
                                    @endif
                                @if($line12)
                                <li>
                                    <span class="service_text-line">{{$line12}}</span>
                                </li>
                                    @else
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="services_item js-animation">
                    <div class="service service__purple js-animation">
                        <svg class="service_bg" width="262" height="295" viewBox="0 0 262 295" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <mask id="Mask-1">
                                    <ellipse class="figure-7" rx="103.5" ry="103" fill="#ffffff" stroke="none" transform="translate(103.5,103) scale(0,0)"/>
                                </mask>
                            </defs>
                            <style>
                                @keyframes a0_t { 0% { transform: translate(103.508px,103.065px) rotate(0deg) translate(-103.508px,-103.065px); animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 100% { transform: translate(103.508px,103.065px) rotate(180deg) translate(-103.508px,-103.065px); } }
                                @keyframes a0_d { 0% { d: path('M99.3037,0.187988L107.711,0.187988L107.711,57.2346C107.711,57.2346,149.338,98.8616,149.338,98.8616L206.385,98.8616L206.385,108.268L149.338,108.268C149.338,108.268,107.711,149.895,107.711,149.895L107.711,205.942L99.3037,205.942L99.3037,149.895C99.3037,149.895,57.6767,108.268,57.6767,108.268L0.630859,108.268L0.630859,98.8616L57.6767,98.8616C57.6767,98.8616,99.3037,57.2346,99.3037,57.2346L99.3037,0.187988Z'); } 50% { d: path('M99.3037,0.187988L107.711,0.187988L107.711,57.2346C107.711,57.2346,149.338,98.8616,149.338,98.8616L206.385,98.8616L206.385,108.268L149.338,108.268C149.338,108.268,107.711,149.895,107.711,149.895L107.711,205.942L99.3037,205.942L99.3037,149.895C99.3037,149.895,57.6767,108.268,57.6767,108.268L0.630859,108.268L0.630859,98.8616L57.6767,98.8616C57.6767,98.8616,99.3037,57.2346,99.3037,57.2346L99.3037,0.187988Z'); animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 100% { d: path('M99.3037,0.187988L107.711,0.187988L107.711,57.2346C107.711,80.2245,126.348,98.8616,149.338,98.8616L206.385,98.8616L206.385,108.268L149.338,108.268C126.348,108.268,107.711,126.905,107.711,149.895L107.711,205.942L99.3037,205.942L99.3037,149.895C99.3037,126.905,80.6667,108.268,57.6767,108.268L0.630859,108.268L0.630859,98.8616L57.6767,98.8616C80.6667,98.8616,99.3037,80.2245,99.3037,57.2346L99.3037,0.187988Z'); } }
                                @keyframes a1_t { 0% { transform: translate(103.5px,103px) scale(0,0); animation-timing-function: cubic-bezier(0.455,0.03,0.515,0.955); } 100% { transform: translate(103.5px,103px) scale(1,1); } }

                                .animated .figure-7 {
                                    animation: 1s linear both a1_t;
                                }
                                .animated .figure-8 {
                                    animation: 1s linear both a0_t, 1s linear both a0_d;
                                }
                            </style>
                            <g mask="url(#Mask-1)" style="transform: scale(0.72) translate(22.5%, 17%)">
                                <path class="figure-8" d="M99.3037,0.187988L107.711,0.187988L107.711,57.2346L149.338,98.8616L206.385,98.8616L206.385,108.268L149.338,108.268L107.711,149.895L107.711,205.942L99.3037,205.942L99.3037,149.895L57.6767,108.268L0.630859,108.268L0.630859,98.8616L57.6767,98.8616L99.3037,57.2346L99.3037,0.187988Z" fill="#9870FF" fill-rule="nonzero" transform="translate(103.508,103.065) translate(-103.508,-103.065)" />
                            </g>
                            <path class="service_bg-border service_bg-border__purple" d="M260.752 0.629124C260.567 37.9519 243.975 70.8948 218.687 90.8662L217.265 91.9891H219.077H260.752C260.567 129.312 243.975 162.255 218.687 182.226L217.265 183.349H219.077H260.752C260.45 244.45 216.205 293.753 161.815 293.753H0.629112L0.629123 0.629112L260.752 0.629124Z" stroke="#9870FF" stroke-width="1.25822"/>
                        </svg>
                        <span class="service_title">Digital and Hybrid experiences</span>
                        <div class="service_text">
                            <ul>
                                @if($line13)
                                <li>
                                    <span class="service_text-line">{{$line13}}</span>
                                </li>
                                @else
                                    @endif
                                @if($line14)
                                <li>
                                    <span class="service_text-line">{{$line14}}</span>
                                </li>
                                    @else
                                    @endif
                                    @if($line15)
                                <li>
                                    <span class="service_text-line">{{$line15}}</span>
                                </li>
                                    @else
                                        @endif
                                    @if($line16)
                                <li>
                                    <span class="service_text-line">{{$line16}}</span>
                                </li>
                                    @else
                                    @endif
                                    @if($line17)
                                <li>
                                    <span class="service_text-line">{{$line17}}</span>
                                </li>
                                    @else
                                        @endif
                                    @if($line18)
                                <li>
                                    <span class="service_text-line">{{$line18}}</span>
                                </li>
                                        @else
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a name="partners"></a>
    <div id="{{str_replace(' ','_',$menu[1]->name)}}" class="partners">
        @foreach($partner->slice(0 , 1) as $partners)
        <h3 class="partners_title">{{$partners->header}}</h3>
        @endforeach
        <div class="partners_row js-animation">
                <div class="partners_carousel">
                    @foreach($partner1 as $partners)
                    <a target="_blank" href="{{$partners->url}}" class="partners_item">
                        <img class="partners_image" src="{{asset('uploads/partner/'.$partners->logo)}}" alt="">
                    </a>
                    @endforeach
                </div>
            <!-- dublicated items, needed fro animation -->
            <div class="partners_carousel partners_carousel__duplicate">
                @foreach($partner1 as $partners_dup)

                <a target="_blank" href="{{$partners_dup->url}}" class="partners_item">
                        <img class="partners_image" src="{{asset('uploads/partner/'.$partners_dup->logo)}}" alt="">
                </a>
                @endforeach

            </div>

        </div>

        <div class="partners_row js-animation">
            <div class="partners_carousel">
                @foreach($partner2 as $partners)
                <a target="_blank" href="{{$partners->url}}" class="partners_item">
                    <img class="partners_image" src="{{asset('uploads/partner/'.$partners->logo)}}" alt="">
                </a>
                @endforeach
            </div>
            <!-- dublicated items, needed fro animation -->
            <div class="partners_carousel partners_carousel__duplicate">
                @foreach($partner2 as $partners)
                <a target="_blank" href="{{$partners->url}}" class="partners_item">
                    <img class="partners_image" src="{{asset('uploads/partner/'.$partners->logo)}}" alt="">
                </a>
                @endforeach
            </div>
        </div>
        <div class="partners_row js-animation">
            <div class="partners_carousel">
                @foreach($partner3 as $partners)
                <a target="_blank" href="{{$partners->url}}" class="partners_item">
                    <img class="partners_image" src="{{asset('uploads/partner/'.$partners->logo)}}" alt="">
                </a>
                @endforeach
            </div>
            <!-- dublicated items, needed fro animation -->
            <div class="partners_carousel partners_carousel__duplicate">
                @foreach($partner3 as $partners)
                <a target="_blank" href="{{$partners->url}}" class="partners_item">
                        <img class="partners_image" src="{{asset('uploads/partner/'.$partners->logo)}}" alt="">

                </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="content">
        <a name="what-we-did"></a>
        <div  id="{{str_replace(' ','_',$menu[2]->name)}}" class="gallery">
            <div class="gallery_title-wrapper">
                <h2 class="gallery_title">
                    @foreach($eventheader->slice(0, 1) as $venttitle)
                    @if($venttitle->leftitle)
                    <strong> {{$venttitle->leftitle}}</strong>
                        @else
                    @endif
                        @endforeach
                </h2>
            </div>
            <div>

                @foreach($event as $events)
{{--                    <style>--}}
{{--                        .gallery_row .gallery_subtitle {--}}
{{--                            --}}{{--background-image: url({{asset('uploads/event/'.$events->icon)}});--}}
{{--                            height: 74px;--}}
{{--                            line-height: 74px;--}}
{{--                            padding-left: 60px;--}}
{{--                        }--}}
{{--                    </style>--}}
                @if($events->photo4 != NULL)
                <div class="gallery_row">

                    <h4 class="gallery_subtitle js-animation"  style="   background-image:  url({{asset('uploads/event/'.$events->icon)}});">{{$events->title}}</h4>

                        <div class="gallery_items gallery_items__pattern-1 js-slider-gallery">
                        <div class="gallery_item">
                            <img src="{{asset('uploads/event/'.$events->photo1)}}" alt="" class="gallery_image js-animation">
                        </div>
                        <div class="gallery_item">
                            <img src="{{asset('uploads/event/'.$events->photo2)}}" alt="" class="gallery_image js-animation">
                        </div>
                        <div class="gallery_item">
                            <img src="{{asset('uploads/event/'.$events->photo3)}}" alt="" class="gallery_image js-animation">
                        </div>
                        <div class="gallery_item">
                            <img src="{{asset('uploads/event/'.$events->photo4)}}" alt="" class="gallery_image js-animation">
                        </div>
                    </div>
                </div>
                    @else

                <div class="gallery_row">

                    <h4 class="gallery_subtitle js-animation" style=" background-image:  url({{asset('uploads/event/'.$events->icon)}});">{{$events->title}}</h4>

                        <div class="gallery_items gallery_items__pattern-2 js-slider-gallery">


                        <div class="gallery_item">
                            <img src="{{asset('uploads/event/'.$events->photo1)}}" alt="" class="gallery_image js-animation">
                        </div>
                        <div class="gallery_item">
                            <img src="{{asset('uploads/event/'.$events->photo2)}}" alt="" class="gallery_image js-animation">
                        </div>
                        <div class="gallery_item">
                            <img src="{{asset('uploads/event/'.$events->photo3)}}" alt="" class="gallery_image js-animation">
                        </div>
                    </div>

                </div>
                    @endif
                        @endforeach

                <div class="gallery_more">
                    <button class="more-button">
                        <div class="more-button_bg"></div>
                        <span class="more-button_text">Explore more</span>
                    </button>
                </div>
                    @foreach($event2 as $events2)

                        @if($events2->photo4 != NULL)
                            <div class="gallery_row">

                                <h4 class="gallery_subtitle js-animation" style=" background-image:  url({{asset('uploads/event/'.$events2->icon)}});">{{$events2->title}}</h4>

                                    <div class="gallery_items gallery_items__pattern-1 js-slider-gallery">
                                    <div class="gallery_item">
                                        <img src="{{asset('uploads/event/'.$events2->photo1)}}" alt="" class="gallery_image js-animation">
                                    </div>
                                    <div class="gallery_item">
                                        <img src="{{asset('uploads/event/'.$events2->photo2)}}" alt="" class="gallery_image js-animation">
                                    </div>
                                    <div class="gallery_item">
                                        <img src="{{asset('uploads/event/'.$events2->photo3)}}" alt="" class="gallery_image js-animation">
                                    </div>
                                    <div class="gallery_item">
                                        <img src="{{asset('uploads/event/'.$events2->photo4)}}" alt="" class="gallery_image js-animation">
                                    </div>
                                </div>
                            </div>
                        @else

                            <div class="gallery_row">
                                <h4 class="gallery_subtitle js-animation" style=" background-image:  url({{asset('uploads/event/'.$events2->icon)}});">{{$events2->title}}</h4>
                                <div class="gallery_items gallery_items__pattern-2 js-slider-gallery">


                                    <div class="gallery_item">
                                        <img src="{{asset('uploads/event/'.$events2->photo1)}}" alt="" class="gallery_image js-animation">
                                    </div>
                                    <div class="gallery_item">
                                        <img src="{{asset('uploads/event/'.$events2->photo2)}}" alt="" class="gallery_image js-animation">
                                    </div>
                                    <div class="gallery_item">
                                        <img src="{{asset('uploads/event/'.$events2->photo3)}}" alt="" class="gallery_image js-animation">
                                    </div>
                                </div>

                            </div>
                        @endif
                    @endforeach
            </div>
        </div>

        <div class="connect">
            <h2 class="connect_title">
                    <span class="js-mask-holder">
                        We are looking for new <strong>and creative ways</strong>
                        <span class="connect_mask js-mask"></span>
                    </span>
                <span>
                        to <strong>connect</strong> with <strong>brands</strong>
                    </span>
            </h2>
            <form  method="post" class="connect_form form_idea">
                @csrf
                <textarea class="connect_textarea js-textarea" placeholder="Type your idea and contacts here"></textarea>
                <button class="connect_form-button js-connect-button">
                    <div class="connect_form-button-bg"></div>
                    <span class="connect_form-button-text">Send</span>
                    <span class="connect_form-check"></span>
                </button>
            </form>
        </div>

        <a name="team"></a>
        <div  id="{{str_replace(' ','_',$menu[3]->name)}}" class="team">
            <!--
                <div class="team_particles js-particles" data-image="images/team-bg.jpg"></div>
            -->
            <div class="team_title-wrapper">
            @if($photoTeam1 != " ")
                @if($headerTeam)
                <h2 class="team_title">
                    {{$headerTeam}}
                </h2>
                @endif

                @else

                @endif
            </div>
            <div class="team_slider js-slider-team" >
               @if($photoTeam1)
                <div class="team_member" >
                    <img class="team_member-image" src="{{asset('uploads/Team/'.$photoTeam1)}}" alt="">
                    <div class="team_member-tooltip">
                        <span class="team_member-title">{{$name1}}</span>
                        <span class="team_member-description">{{$textTeam1}}</span>
                    </div>
                    @endif
             @if($photoTeam2)
                </div>
                <div class="team_member">
                    <img class="team_member-image" src="{{asset('uploads/Team/'.$photoTeam2)}}" alt="">
                    <div class="team_member-tooltip">
                        <span class="team_member-title">{{$name2}}</span>
                        <span class="team_member-description">{{$textTeam2}}</span>
                    </div>
                </div>
                @endif
                @if($photoTeam3)
                <div class="team_member" >
                    <img class="team_member-image" src="{{asset('uploads/Team/'.$photoTeam3)}}" alt="">
                    <div class="team_member-tooltip">
                        <span class="team_member-title">{{$name3}}</span>
                        <span class="team_member-description">{{$textTeam3}}</span>
                    </div>
                </div>
                   @endif
                   @if($photoTeam4)
                <div class="team_member" >
                    <img class="team_member-image" src="{{asset('uploads/Team/'.$photoTeam4)}}" alt="">
                    <div class="team_member-tooltip">
                        <span class="team_member-title">{{$name4}}</span>
                        <span class="team_member-description">{{$textTeam4}}</span>
                    </div>
                </div>
                   @endif
                   @if($photoTeam5)
                <div class="team_member">
                    <img class="team_member-image" src="{{asset('uploads/Team/'.$photoTeam5)}}" alt="">
                    <div class="team_member-tooltip">
                        <span class="team_member-title">{{$name5}}</span>
                        <span class="team_member-description">{{$textTeam5}}</span>
                    </div>
                </div>
                   @endif
                   @if($photoTeam6)
                <div class="team_member">
                    <img class="team_member-image" src="{{asset('uploads/Team/'.$photoTeam6)}}" alt="">
                    <div class="team_member-tooltip">
                        <span class="team_member-title">{{$name6}}</span>
                        <span class="team_member-description">{{$textTeam6}}</span>
                    </div>
                </div>
                   @endif
                   @if($photoTeam7)
                <div class="team_member" >
                    <img class="team_member-image" src="{{asset('uploads/Team/'.$photoTeam7)}}" alt="">
                    <div class="team_member-tooltip">
                        <span class="team_member-title">{{$name7}}</span>
                        <span class="team_member-description">{{$textTeam7}}</span>
                    </div>
                </div>
                   @endif
            </div>
        </div>


        <div id="{{str_replace(' ','_',$menu[4]->name)}}" class="careers" >
            @foreach($job as $jobs)
                @if($job)
            <div class="careers_title-wrapper">
                <h2 class="careers_title">
                    {{$job[0]->title}}
                </h2>

            </div>

            @endif
            @endforeach
            <div class="careers_items js-slider-careers">
                @if($job)
                    @foreach($job as $jobs)
                <div class="career">


                        <div class="career_icon-wrapper js-popup-toggle" data-popup="cv">
                        <img class="career_icon" src="{{asset('src/img/careers-shapes/'.$jobs->photo)}}" alt="">
                        <img class="career_icon-filled" src="{{asset('src/img/careers-shapes/'.$jobs->backphoto)}}" alt="">
                    </div>
                    <span class="career_title">{{$jobs->job}}</span>
                    <p class="career_description">{{$jobs->jobfunction}}</p>
                    <button class="career_button js-popup-toggle" data-popup="cv">
                        <span class="career_button-text">Send CV</span>
                        <div class="career_button-bg"></div>
                    </button>
                </div>
                @endforeach
                @else

@endif


            </div>
        </div>
    </div>
</main>



<footer class="footer">
    <div class="footer_holder">
        <div class="footer_left" >
            <p  class="footer_copyrights">@if($linefooter1)
                <strong class="footer_column-title">{{$linefooter1}}</strong>
                @endif
               @if($linefooter2) © {{$linefooter2}} @endif
            </p>
        </div>
        <div class="footer_right">
            <div class="footer_menu">
                <div class="footer_column">
                    <div class="footer_subcolumn">
                        @if($linefooter3)
                        <span class="footer_column-title">{{$linefooter3}}</span>
                        @endif
                        <div>
                            @if($phone)
                            <a href="tel:{{$phone}}">@if($phone == '#') @else{{$phone}} @endif</a>
                                @endif
                        </div>
                        <div>
                            @if($telegram)
                            <a target="_blank" href="https://telegram.me/{{$telegram}}">Telegram</a>
                                @endif
                        </div>
                        <div>
                            @if($WhatsApp)
                            <a target="_blank" href="https://wa.me/{{$WhatsApp}}">WhatsApp</a>
                                @endif
                        </div>
                    </div>
                    <div class="footer_subcolumn">
                        @if($line7)
                        <span class="footer_column-title">{{$linefooter7}}</span>
                        @endif
                        @if($email)
                        <a href="mailto:{{$email}}">{{$email}}</a>
                            @endif
                    </div>
                </div>
                <div class="footer_column">
                    <div class="footer_subcolumn">
                        @if($address)
                        <a target="_blank" href=" http://maps.google.com/?q={{$address}}">
                            <div>
                              {{$address}}
                            </div>
                        </a>
                            @endif
                    </div>
                    <div class="footer_subcolumn">
                        <div>
                            @if($privacy)
                            <a href="#"class="js-popup-toggle"  data-popup="privacy-policy">{{$privacy}}</a>
                       @endif
                        </div>
                        <div>
                            @if($cookie)
                            <a href="#" class="js-popup-toggle" data-popup="cookie-policy">{{$cookie}}</a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_column">
                <div class="social">

@if($instagram)

                    <a target="_blank" href="http://instagram.com/_u/{{$instagram}}" class="social_link">
                        <img class="social_icon" src="{{asset('src/img/social/insta.svg')}}" alt="">
                    </a>
                    @endif
                    @if($facebook)
                    <a target="_blank" href="{{$facebook}}" class="social_link">
                        <img class="social_icon" src="{{asset('src/img/social/fb.svg')}}" alt="">
                    </a>
                     @endif
    @if($linkdine)
                    <a target="blank" href="{{$linkdine}}" class="social_link">
                        <img class="social_icon" src="{{asset('src/img/social/ln.svg')}}" alt="">
                    </a>
        @endif
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="popup" data-popup="cookie-policy">
    <button class="popup_close"></button>
    <div class="popup_content">
        @if($cookietext)
        <p>
        {!! json_decode($cookietext) !!}<br><br>
        </p>
        @endif
    </div>
</div>

<div class="popup" data-popup="privacy-policy">
    <button class="popup_close"></button>
    <div class="popup_content">
        @if($privacytext)
        <p>
         {!! json_decode($privacytext) !!}<br><br>
        </p>
        @endif
    </div>
</div>

<div class="popup" data-popup="request">
    <button class="popup_close"></button>
    <div class="popup_content popup_content__center">

        <form  method="POST" class="contact-form form1">

            <p class="contact-form_text">
                {{$contactus2[0]}} {{$contactus2[1]}} {{$contactus2[2]}} {{$contactus2[3]}} {{$contactus2[4]}} <span id="name" contenteditable>{{$contactus2[5]}} {{$contactus2[6]}}  {{$contactus2[7]}}   {{$contactus2[8]}}</span>
                {{$contactus2[9]}}  {{$contactus2[10]}}   {{$contactus2[11]}} <span id="companyname" contenteditable>    {{$contactus2[12]}}  {{$contactus2[13]}} </span>
                {{$contactus2[14]}}
                {{$contactus2[15]}} {{$contactus2[16]}} {{$contactus2[17]}}
                <span id="text" contenteditable>{{$contactus2[18]}} {{$contactus2[19]}} {{$contactus2[20]}} {{$contactus2[21]}} {{$contactus2[22]}} {{$contactus2[23]}} {{$contactus2[24]}} {{$contactus2[25]}} {{$contactus2[26]}} {{$contactus2[27]}} {{$contactus2[28]}} </span>
                {{$contactus2[29]}} {{$contactus2[30]}} {{$contactus2[31]}} {{$contactus2[32]}} {{$contactus2[33]}} {{$contactus2[34]}} <span id="email" contenteditable>{{$contactus2[35]}} </span> {{$contactus2[36]}}
                <br>
                <span id="erroremail"></span>
            </p>
            <div>
            <button  class="contact-form_button js-send-form sendform2">Send request</button>
            </div>
            <div class="contact-form_success">
                <p>We are on it! A few moments ago, we received your request. We will contact you shortly to discuss further details and next steps.</p>
            </div>
        </form>



    </div>
</div>

<div class="popup" data-popup="cv">
    <button class="popup_close"></button>
    <div class="popup_content popup_content__center">
        <form method="post"  class="contact-form"  enctype="multipart/form-data">
            @csrf
            <p class="contact-form_text">
                {{$cv2[0]}} {{$cv2[1]}} {{$cv2[2]}} {{$cv2[3]}} {{$cv2[4]}}
                <span id="names" contenteditable >{{$cv2[5]}} {{$cv2[6]}} {{$cv2[7]}} {{$cv2[8]}} </span> &nbsp;{{$cv2[9]}} {{$cv2[10]}} {{$cv2[11]}} {{$cv2[12]}} {{$cv2[13]}}
                <span id="phone" contenteditable>{{$cv2[14]}} {{$cv2[15]}} {{$cv2[16]}} </span> &nbsp;{{$cv2[17]}} {{$cv2[18]}} {{$cv2[19]}} {{$cv2[20]}} {{$cv2[21]}} {{$cv2[22]}} {{$cv2[23]}}
             <a class="js-file-upload-link" href="">{{$cv2[24]}} {{$cv2[25]}} {{$cv2[26]}}</a>
                <input  class="contact-form_file js-file-upload"   type="file" name="cv" id="cv" placeholder="asd">

               <br>
                <br>
                 <span id="error"></span>
            </p>
            <div>

            <button class="contact-form_button js-send-form sendemail3">Send request</button>
            </div>
            <div class="contact-form_success">
                <p>We’ve received your CV, and we want to thank you for sending it! We'll be in touch soon. </p>
            </div>
        </form>
    </div>
</div>

<div class="cookies">
    <p class="cookies_text">
        <strong>SHP uses cookies</strong> to improve your experience on this website. To learn more <strong>about our cookies</strong>, check out our
        <a href="#" class="js-popup-toggle" data-popup="cookie-policy">Cookie Policy</a>.
    </p>
    <button class="cookies_button">Accept all cookies</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('src/js/particles.js')}}"></script>
<script src="{{asset('src/js/myjquery.js')}}"></script>
<script src="{{asset('src/js/tiny-slider.js')}}"></script>
<script src="{{asset('src/js/js-cookie.js')}}"></script>
<script src="{{asset('src/js/main.js')}}"></script>
</body>
</html>
