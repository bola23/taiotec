<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"> </script>
    <link rel="stylesheet" href="{{ asset('MyCss/mystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- jquery auto complete --}}
   
    {{-- bootstrap js --}}
    <script src="{{ asset('js/app.js') }}"></script> 
    {{-- validation of cart order form --}}
    <script src="{{asset('MyJs/form-validation.js')}}"> </script>
 

    <title>TaioTec</title>
</head>

<body>
    <nav class="navbar d-flex flex-column">
        <div class="container-fluid">
            <a class="navbar-brand m-2" href="/">Taio-Tech</a>
            <div class="search-bar">
                <form action="{{url("produt_search")}}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" required id="search_product" name='search' class="form-control" placeholder="Search Product">
                        <button type="submit" class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <ul class="navbar-nav m-auto p-0 d-flex flex-row">
                <li class="nav-item p-3">
                    <a href="https://wa.me/+01220840565" style="text-decoration: none; color: #000000;">
                        <strong>دعم Whatsapp </strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item p-3">
                    <strong>Tel : 01220840565</strong>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-black w-100 productsNav">
        <div class="container-fluid">
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="{{url('cookers')}}" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #ffffff;">
                            بوتاجاز
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="{{url('fridge')}}" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #ffffff;">
                            اجهزة تبريد
                        </a>
                        
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #ffffff;">
                            شاشات
                        </a>
                      
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #ffffff;">
                            تكييفات
                        </a>
                    
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #ffffff;">
                            غسالات 
                        </a>
                       
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #ffffff;">
                        اجهزه منزليه صغيره
                        </a>
                        
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <section>
        @yield('content')
    </section>

    <div class="footer">
        <div class="container mx-auto">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="single_footer">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#">Lorem Ipsum</a></li>
                            <li><a href="#">Simply dummy text</a></li>
                            <li><a href="#">The printing and typesetting </a></li>
                            <li><a href="#">Standard dummy text</a></li>
                            <li><a href="#">Type specimen book</a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Page Link</h4>
                        <ul>
                            <li><a href="#">Lorem Ipsum</a></li>
                            <li><a href="#">Simply dummy text</a></li>
                            <li><a href="#">The printing and typesetting </a></li>
                            <li><a href="#">Standard dummy text</a></li>
                            <li><a href="#">Type specimen book</a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single_footer single_footer_address">
                        <h4>Subscribe today</h4>
                        <div class="signup_form">
                            <form action="#" class="subscribe">
                                <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                                <button type="button" class="subscribe__btn"><i
                                        class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="social_profile">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
  <!-- Include jQuery using a CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Include jQuery UI using a CDN (optional) -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>

</html>
