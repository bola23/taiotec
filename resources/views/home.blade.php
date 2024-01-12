@extends('shared.layout')

@section('content')
    <div class="slider-container" id="slider-container1">
        <section class="splide" id="splide1" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="https://img.freepik.com/free-vector/egyptian-desert-with-river-pyramids-night_107791-4618.jpg?w=1480&t=st=1701902670~exp=1701903270~hmac=82ddd98825784245ef0d780ab79ba87f16496a5be635b18067ebbc77864a1baf"
                            alt="">
                    </li>
                    <li class="splide__slide"><img
                            src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg?size=626&ext=jpg&ga=GA1.1.1222169770.1701820800&semt=sph"
                            alt=""></li>
                    <li class="splide__slide"><img
                            src="https://images.ctfassets.net/hrltx12pl8hq/28ECAQiPJZ78hxatLTa7Ts/2f695d869736ae3b0de3e56ceaca3958/free-nature-images.jpg?fit=fill&w=1200&h=630"
                            alt=""></li>
                </ul>
            </div>
        </section>
    </div>

    <div class="container text-center my-5">
        <h2>لماذا تتسوق من فريش؟</h2>
        <div class="row align-items-center mt-5">
            <div class="col-12 col-sm-6 col-md-3">
                <figure>
                    <i class="fal fa-shipping-fast custom-icon"></i>
                    <figcaption>
                        شحن مجاني
                    </figcaption>
                </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <figure>
                    <i class="fal fa-calendar-alt custom-icon"></i>
                    <figcaption>
                        تقسيط مريح
                    </figcaption>
                </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <figure>
                    <i id="percent" class="fal fa-percent custom-icon"></i>
                    <figcaption>
                        عروض جديدة
                    </figcaption>
                </figure>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <figure>
                    <i class="fal fa-exchange-alt custom-icon"></i>
                    <figcaption>
                        إرجاع خلال 14 يومًا
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

    <div class="container my-5" id="prod">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="container text-center">
                    <div class="row">

                        <div class="col-12 m-1 d-flex flex-column align-content-center justify-content-center"
                            style="min-width: 300px; height: 300px; background-color: #FFE5E6; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <p>Air Condations</p>
                            <img style=" width: 80%; height: 80%;"
                                src="https://be.fresh.com.eg/media/catalog/category/ac_2_13.png" alt="">
                        </div>
                        <div class="col-12 m-1 d-flex flex-column align-content-center justify-content-center"
                            style="min-width: 300px; height: 300px; background-color: #EEFFE5; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <p>Washing Machines</p>
                            <img style=" width: 80%; height: 80%;"
                                src="https://be.fresh.com.eg/media/catalog/category/washing_4_4_1.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div
                    style="min-width: 250px; height: 600px; background-color: #FFFACC; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <p>Cooling Appliances</p>
                    <img style="  width: auto; height: 90%;"
                        src="https://be.fresh.com.eg/media/catalog/category/ref_4_4.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 m-1"
                            style="min-width: 250px; height: 300px; background-color: #E9FAE1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <p>Small Home Appliances</p>
                            <img style=" width: 80%; height: 80%;"
                                src="https://be.fresh.com.eg/media/catalog/category/microwavw_7_1_1.png" alt="">
                        </div>
                        <div class="col-12 m-1"
                            style="min-width: 250px; height: 300px; background-color: #E5F6FF; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <p>Tvs</p>
                            <img style=" width: 80%; height: 80%;"
                                src="https://be.fresh.com.eg/media/catalog/category/TV_1_1_1_.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div
                    style="min-width: 250px; height: 600px; background-color: #E6E6E6; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <p>Cooker</p>
                    <img style="  width: auto; height: 90%;"
                        src="https://be.fresh.com.eg/media/catalog/category/Fresh_cookers_1_.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="splide" id="splide2" aria-label="Basic Structure Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://be.fresh.com.eg/media/catalog/product/cache/6fdb9282313a7e48374fe05a5418029a/f/r/fresh_air_conditioner_smart_inverter_plus_2.25_hp_cool-hot.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-success">Add To Cart</a>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://be.fresh.com.eg/media/catalog/product/cache/6fdb9282313a7e48374fe05a5418029a/f/r/fresh_air_conditioner_smart_inverter_plus_2.25_hp_cool-hot.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-success">Add To Cart</a>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://be.fresh.com.eg/media/catalog/product/cache/6fdb9282313a7e48374fe05a5418029a/f/r/fresh_air_conditioner_smart_inverter_plus_2.25_hp_cool-hot.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-success">Add To Cart</a>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://be.fresh.com.eg/media/catalog/product/cache/6fdb9282313a7e48374fe05a5418029a/f/r/fresh_air_conditioner_smart_inverter_plus_2.25_hp_cool-hot.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-success">Add To Cart</a>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://be.fresh.com.eg/media/catalog/product/cache/6fdb9282313a7e48374fe05a5418029a/f/r/fresh_air_conditioner_smart_inverter_plus_2.25_hp_cool-hot.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-success">Add To Cart</a>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card">
                        <img src="https://be.fresh.com.eg/media/catalog/product/cache/6fdb9282313a7e48374fe05a5418029a/f/r/fresh_air_conditioner_smart_inverter_plus_2.25_hp_cool-hot.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-success">Add To Cart</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>



    <script>
        var splide = new Splide('#splide1', {
            type: 'fade',
            rewind: true,
            height: '80vh',
            autoplay: true,
            cover: true
        });

        splide.mount();
    </script>

    <script>
        var splide = new Splide('#splide2', {
            type: 'loop',
            perPage: 5,
            perMove: 1,
            focus: 'center',
            width: "90vw",
            autoplay: true,
            breakpoints: {
                576: {
                    perPage: 1, // Show one slide on screens with a width of 576 pixels or less (mobile screens)
                },
                768: {
                    perPage: 2,
                },
                900: {
                    perPage: 2,
                }
            }
        });

        splide.mount();
    </script>

   
@endsection
