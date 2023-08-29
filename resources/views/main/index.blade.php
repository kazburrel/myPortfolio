<!DOCTYPE html>
<html lang="en" data-random-animation="false" data-animation="16">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="resume, cv, portfolio" />
    <meta name="description" content="Kizito's portfolio" />
    <meta name="author" content="cosmos-themes" />

    <!--Page Title-->
    <title>{{ $profile->first_name }} {{ $profile->last_name }}</title>

    <!--Plugins Css-->
    <link rel="stylesheet" href="{{ asset('/main_asset/css/plugins.css') }}">
    <!--Main Styles Css-->
    <link rel="stylesheet" href="{{ asset('/main_asset/css/style-dark.css') }}">
    <!--Color Css-->
    <link rel="stylesheet" href="{{ asset('/main_asset/css/blue-color.css') }}">

    <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />


    <!--Modernizr Js-->
    <script src="{{ asset('/main_asset/js/modernizr.js') }}"></script>

    <!--Favicons-->
    <link rel="shortcut icon" href="{{ asset('assets/logo/kazLogo.PNG') }}" type="image/x-icon">

</head>

<body>

    <!--Preloader Start-->
    <div class="preloader">
        <div class="loader">
            <!--Your Name-->
            <h4>{{ $profile->first_name }} {{ $profile->last_name }}</h4>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--Preloader End-->

    <div id="page">

        <!--Header Start-->
        <header>
            <div class="header-content">

                <!--Mobile Header-->
                <div class="header-mobile">
                    <a class="header-toggle"><i class="fas fa-bars"></i></a>
                    <h2>{{ $profile->first_name }} {{ $profile->last_name }}</h2>
                </div>

                <!--Main Header-->
                <div class="header-main" data-simplebar>
                    <div class="image-container">
                        <h2 class="header-name">{{ $profile->first_name }} &nbsp; {{ $profile->last_name }}</h2>
                        <img src="{{ asset('storage/' . $profile->avatar) }}" alt="profile-pic">
                    </div>

                    <!--Nav Menus-->
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="#home" class="pt-link active"><span class="nav-menu-icon"><i
                                            class="lnr lnr-home"></i></span>Home </a> </li>
                            <li><a href="#about" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-user"></i></span>About Me</a></li>
                            <li><a href="#resume" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-license"></i></span>Resume</a></li>
                            <li><a href="#portfolio" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-briefcase"></i></span>Portfolio</a></li>
                            <li><a href="#contact" class="pt-link"><span class="nav-menu-icon"><i
                                            class="lnr lnr-envelope"></i></span>Contact</a></li>
                        </ul>
                    </nav>

                    <!--Nav Footer-->
                    <div class="nav-footer">
                        <!--Social Links-->
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fab fa-github"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                        <!--Copyright Text-->
                        <div class="copy">
                            <p>2022 &copy; {{ $profile->first_name }} {{ $profile->last_name }} <br>All Right
                                Reserved.</p>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!--Header End-->


        <!--Main Start-->
        <div id="main" class="site-main">

            <!--Banner Section Start-->
            <section id="home" class="banner-section pt-page">

                <!--Video Container-->
                <div id="video-container"></div>

                <div class="banner-content">
                    <!--Banner Text-->
                    <h1 class="mb-20">{{ $profile->first_name }} <span> {{ $profile->last_name }}</span></h1>

                    <!--Animated Text-->
                    <p class="cd-headline clip is-full-width">
                        <span>I am a </span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Web Developer</b>
                            <b class="is-visible">Medical Lab. Scientist</b>
                        </span>
                    </p>

                </div>

            </section>
            <!--Banner Section End-->


            <!--About Section Start-->
            <section id="about" class="about-section pt-page">
                <div class="section-container">
                    <!--Page Heading-->
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-user"></i></span>
                        <h2>About Me.</h2>
                    </div>

                    <!-- About Info Row Start-->
                    <div class="row about mb-70">

                        <div class="col-lg-8">
                            <!--Personal Intro-->
                            <h3 class="mb-20">Web Developer</h3>
                            <p>Aspirational and Industrious software and web developer with a diploma in Medical
                                laboratory science. Extensively experienced in management skills. Looking to expand his
                                services with a professional IT company that specializes in web and Web Development
                            </p>
                            <p>Prior to that, he has analyzed and built websites as a very knowledgeable manager.
                                Guarded with an accountable and answerable personality, and is endowned with delivering
                                high quality voice and data services over broadband access networks while leveraging
                                investment with network infrastructures.</p>
                        </div>

                        <!--Personal Info-->
                        <div class="col-lg-4">
                            <div class="about-info">
                                <h3 class="mb-20">Personal Information</h3>
                                <ul>
                                    <li><span class="title">Name</span><span
                                            class="value">{{ $profile->first_name }}
                                            {{ $profile->last_name }}</span></li>
                                    <li><span class="title">Age</span><span class="value">{{ $profile->age }}
                                            Years</span></li>
                                    <li><span class="title">Residence</span><span
                                            class="value">{{ $profile->country }} </span></li>
                                    {{-- <li><span class="title">Address</span><span class="value">10 Barton Court,
                                            Rathfarnham</span></li> --}}
                                    <li><span class="title">Email </span><span
                                            class="value">{{ $profile->email }}</span></li>
                                    <li><span class="title">Phone</span><span class="value">{{ $profile->phone }}
                                        </span></li>
                                    <li><span class="title">Freelance</span><span
                                            class="value">{{ $profile->freelance }} </span>
                                    </li>
                                </ul>
                                {{-- <div class="resume-button mt-30">
                                    <a class="btn-main" href="extras/Kizito_Nzeka_CV.zip" download>Download Resume</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- About Info Row End-->

                    <!--Services Row Start-->
                    <div class="row services mb-30">
                        <div class="col-md-12">
                            <div class="subheading">
                                <h3>Services</h3>
                            </div>
                        </div>

                        <!--Service Item-->
                        <div class="col-lg-12 col-sm">
                            <div class="service-item">
                                <div class="icon"><i class="lnr lnr-laptop"></i></div>
                                <h4>Web Development</h4>
                                <p>A Full-stack web developer working proficiently in both front and back-end. Balancing
                                    functionality and aesthetics to meet clients' expectations with great attention to
                                    details and creative solutions to design challenges.</p>
                            </div>
                        </div>

                        <!--Service Item-->
                        {{-- <div class="col-lg-6 col-sm">
                            <div class="service-item">
                                <div class="icon"><i class="lnr lnr-laptop-phone"></i></div>
                                <h4>Software Development</h4>
                                <p>Design, manage and optimize computer programs that run on desktops, laptops and other
                                    devices. With Interpersonal competences, critical thinking and analytical skills to
                                    analyze and design content and managment needs of clients.</p>
                            </div>
                        </div> --}}

                    </div>




                </div>
            </section>
            <!--About Section Start-->


            <!--Resume Section Start-->
            <section id="resume" class="resume-section pt-page">
                <div class="section-container">
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-license"></i></span>
                        <h2>My Resume.</h2>
                    </div>

                    <!--Education & Experience Row Start-->
                    <div class="row mb-20">

                        <!--Experience Column Start-->
                        <div class="col-lg-6">
                            <div class="subheading">
                                <h3>EXPERIENCE</h3>
                            </div>
                            @forelse ($resumes as $resume)
                                @if ($resume->type == 'experience')
                                    <ul class="experience">
                                        <li>
                                            <span class="line-left"></span>
                                            <div class="content">
                                                <h4>{{ $resume->title }}</h4>
                                                <h5>{{ $resume->location }}</h5>
                                                <p class="info">
                                                    {{ $resume->description }}
                                                </p>
                                            </div>
                                            <span class="year">
                                                <span class="to">{{ $resume->end }}</span>
                                                <span class="from">{{ $resume->start }}</span>
                                            </span>
                                        </li>
                                    </ul>
                                @endif
                            @empty
                            @endforelse

                        </div>
                        <!--Experience Column End-->

                        <!--Education Column Start-->
                        <div class="col-lg-6">
                            <div class="subheading">
                                <h3>EDUCATION</h3>
                            </div>
                            @forelse ($resumes as $resume)
                                @if ($resume->type == 'education')
                                    <ul class="experience">
                                        <li>
                                            <span class="line-left"></span>
                                            <div class="content">
                                                <h4>{{ $resume->title }}</h4>
                                                <h5>{{ $resume->location }}</h5>
                                                <p class="info">
                                                    {{ $resume->description }}
                                                </p>
                                            </div>
                                            <span class="year">
                                                <span class="to">{{ $resume->end }}</span>
                                                <span class="from">{{ $resume->start }}</span>
                                            </span>
                                        </li>
                                    </ul>
                                @endif
                            @empty
                            @endforelse

                        </div>
                        <!--Education Column End-->

                    </div>
                    <!--Education & Experience Row End-->


                    <!--Skills Row Start-->
                    <div class="row">

                        <!--Design Skills Column Start-->
                        <div class="col-lg-4 skills">
                            <div class="subheading">
                                <h3>DATABASES</h3>
                            </div>
                            @forelse ($skills as $skill)
                                @if ($skill->type == 'databases')
                                    <!--Design Skill Item-->
                                    <div class="skill-item">
                                        <h4 class="progress-title">{{ $skill->language }}</h4>
                                        <div class="progress">
                                            <div class="progress-bar"
                                                data-progress-value="{{ $skill->percentage }}">
                                                <div class="progress-value">{{ $skill->percentage }}%</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>

                        <!--Design Skills Column End-->

                        <!--Coding Skills Column Start-->
                        <div class="col-lg-4 skills">
                            <div class="subheading">
                                <h3>TECHNOLOGIES</h3>
                            </div>
                            @forelse ($skills as $skill)
                                @if ($skill->type == 'technologies')
                                    <!--Design Skill Item-->
                                    <div class="skill-item">
                                        <h4 class="progress-title">{{ $skill->language }}</h4>
                                        <div class="progress">
                                            <div class="progress-bar"
                                                data-progress-value="{{ $skill->percentage }}">
                                                <div class="progress-value">{{ $skill->percentage }}%</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>
                        <!--Coding Skills Column End-->

                        <!--Database Skills Column Start-->
                        <div class="col-lg-4 skills">
                            <div class="subheading">
                                <h3><span>
                                        <h5>PROGRAMMING LANGUAGE</h5>
                                    </span></h3>
                            </div>
                            @forelse ($skills as $skill)
                                @if ($skill->type == 'programming_languages')
                                    <!--Design Skill Item-->
                                    <div class="skill-item">
                                        <h4 class="progress-title">{{ $skill->language }}</h4>
                                        <div class="progress">
                                            <div class="progress-bar"
                                                data-progress-value="{{ $skill->percentage }}">
                                                <div class="progress-value">{{ $skill->percentage }}%</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                            @endforelse
                        </div>
                        <!--Database Skills Column End-->

                    </div>
                    <!--Skills Row End-->
                </div>
            </section>
            <!--Resume Section End-->


            <!--Porfolio Section Start-->
            <section id="portfolio" class="portfolio-section pt-page">
                <div class="section-container">

                    <!--Page Heading-->
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-briefcase"></i></span>
                        <h2>Portfolio.</h2>
                    </div>

                    <div class="row">
                        <!--Portfolio Filter-->
                        <div class="col-md-12 portfolio-filter text-center">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                @forelse ($portfolio_cats as $portfolio_cat)
                                    <li data-filter=".{{ Str::slug($portfolio_cat->cat_name, '-') }}">
                                        {{ Str::upper($portfolio_cat->cat_name) }}
                                    </li>
                                @empty
                                @endforelse

                            </ul>
                        </div>
                    </div>

                    <!--Portfolio Items-->
                    <div class="row portfolio-items mb-50">

                        <!--Portfolio Item-->
                        @forelse ($portfolios as $portfolio)
                            <div class="item col-lg-4 col-sm-6 {{ Str::slug($portfolio->pro_type, '-') }}">
                                <a class="" href="{{ $portfolio->pro_url }}" target="_blank">
                                    <figure>
                                        <img src="{{ asset('storage/' . $portfolio->pro_img) }}" alt="">
                                        <figcaption>
                                            <h4>{{ $portfolio->pro_name }}</h4>
                                            <p>{{ $portfolio->pro_des }}</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                        @empty
                        @endforelse

                        <!--Portfolio Item-->
                        {{-- <div class="item col-lg-4 col-sm-6 node">
                            <a class="" href="https://nameless-fortress-34615.herokuapp.com/" target="_blank">
                                <figure>
                                    <img src="{{ asset('/main_asset/img/single-work/shortly.png') }}"
                                        alt="">
                                    <figcaption>
                                        <h4>Shortly</h4>
                                        <p>Shorten any Url with Shortly.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <!--Portfolio Item-->
                        <div class="item col-lg-4 col-sm-6 react">
                            <a class="" href="http://whale-ravenous.surge.sh/" target="_blank">
                                <figure>
                                    <img src="{{ asset('/main_asset/img/single-work/ravenous.png') }}"
                                        alt="">
                                    <figcaption>
                                        <h4>Ravenous</h4>
                                        <p>Search and locate businesses around you.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="item col-lg-4 col-sm-6 javascript">
                            <a class="" href="http://sneaky-flesh.surge.sh/" target="_blank">
                                <figure>
                                    <img src="{{ asset('/main_asset/img/single-work/simon.png') }}" alt="">
                                    <figcaption>
                                        <h4>Simon Game</h4>
                                        <p>Test your memory 🧠</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="item col-lg-4 col-sm-6 php">
                            <a class="" href="https://evening-caverns-41830.herokuapp.com/" target="_blank">
                                <figure>
                                    <img src="{{ asset('/main_asset/img/single-work/geonames.png') }}"
                                        alt="">
                                    <figcaption>
                                        <h4>Geonames</h4>
                                        <p>Find locations</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div> --}}


                    </div>
                </div>
            </section>
            <!--Porfolio Section End-->





            <!--Contact Section Start-->
            <section id="contact" class="contact-section pt-page">
                <div class="section-container">

                    <!--Page Heading-->
                    <div class="page-heading">
                        <span class="icon"><i class="lnr lnr-envelope"></i></span>
                        <h2>Contact Me.</h2>
                    </div>

                    <!--Form Row-->
                    <div class="row mb-70">
                        <div class="col-lg-8  offset-lg-2">
                            <div class="subheading">
                                <h3>Let's Talk</h3>
                            </div>

                            <!--Form Start-->
                            <x-flash />
                            <form method="POST" action="/contact">
                                @csrf
                                <div class="row">


                                    <!--Name Field-->
                                    <div class="col-md-6 mb-50">
                                        <span class="input">
                                            <input class="input__field" type="text" name="name"
                                                placeholder="Name" />
                                            <label class="input__label" for="cf-name"></label>
                                        </span>
                                    </div>

                                    <!--Email Field-->
                                    <div class="col-md-6 mb-50">
                                        <span class="input">
                                            <input class="input__field" type="text" name="email"
                                                placeholder="Email" />
                                            <label class="input__label" for="cf-email"></label>
                                        </span>
                                    </div>

                                    <!--Message Box-->
                                    <div class="col-md-12 mb-30">
                                        <span class="input">
                                            <textarea class="input__field" name="message" rows="5" placeholder="How can we help you?"></textarea>
                                            <label class="input__label" for="cf-message"></label>
                                        </span>
                                    </div>

                                    <div class="alert-container col-md-12"></div>

                                    <!--Submit Button-->
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn-main">Send Message</button>
                                    </div>


                                </div>
                            </form>
                            <!--Form End-->

                        </div>
                    </div>

                    <!--Contact Info Row Start-->
                    <div class="row contact-info mb-70">

                        <!--Contact Info Item-->
                        <div class="col-md-4 info-item">
                            <span class="icon"><i class="fas fa-paper-plane"></i></span>
                            <h5><a href="mailto:oegbosionu@gmail.com">{{ $profile->email }}</a></h5>
                        </div>

                        <!--Contact Info Item-->
                        <div class="col-md-4 info-item">
                            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                            <h5>{{ $profile->country }}</h5>
                        </div>

                        <!--Contact Info Item-->
                        <div class="col-md-4 info-item">
                            <span class="icon"><i class="fas fa-phone"></i></span>
                            <h5>{{ $profile->phone }}</h5>
                        </div>

                    </div>
                    <!--Contact Info Row End-->

                </div>

            </section>
            <!--Contact Section End-->


        </div>
        <!--Main End-->

    </div>

    <!--Ajax Portfolio Container Start-->
    <div class="ajax-portfolio-popup">
        <span class="ajax-loader"></span>
        <div class="navigation-wrap">
            <span class="popup-close"><i class="fas fa-times-circle"></i></span>
        </div>
        <div class="content-wrap">
            <div class="popup-content"></div>
        </div>
    </div>
    <!--Ajax Portfolio Container End-->

    <!--Jquery JS-->
    <script src="{{ asset('/main_asset/js/jquery.min.js') }}"></script>
    <!--Plugins JS-->
    <script src="{{ asset('/main_asset/js/plugins.min.js') }}"></script>
    <!--Google Map Api-->
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <!--Site Main JS-->
    <script src="{{ asset('/main_asset/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Change Your Video Here
            $('#video-container').vide({
                'mp4': 'http://watson-vcard.netlify.com/video/video1.mp4',
                'webm': 'http://watson-vcard.netlify.com/video/video1.webm',
                'ogv': 'http://watson-vcard.netlify.com/video/video1.ogv',
            });
        });
    </script>
</body>

</html>
