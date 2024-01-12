@extends("shared.layout")

@section("content")
<div class="container my-5" id="prod">
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="container text-center">
                <div class="row">

                   <a href="editcookers"> 
                    <div class="col-12 m-1 d-flex flex-column align-content-center justify-content-center"
                        style="min-width: 300px; height: 300px; background-color: #FFE5E6; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <p>Air Condations</p>
                        <img style=" width: 80%; height: 80%;"
                            src="https://be.fresh.com.eg/media/catalog/category/ac_2_13.png" alt="">
                    </div>
                    </a>
                    <a href="editfridge">
                    <div class="col-12 m-1 d-flex flex-column align-content-center justify-content-center"
                        style="min-width: 300px; height: 300px; background-color: #EEFFE5; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <p>Washing Machines</p>
                        <img style=" width: 80%; height: 80%;"
                            src="https://be.fresh.com.eg/media/catalog/category/washing_4_4_1.png" alt="">

                    </div>
                 </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <a href="">
            <div
                style="min-width: 250px; height: 600px; background-color: #FFFACC; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <p>Cooling Appliances</p>
                <img style="  width: auto; height: 90%;"
                    src="https://be.fresh.com.eg/media/catalog/category/ref_4_4.png" alt="">
            </div>
        </a>
        </div>
        
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="container text-center">
                <div class="row">
                    <a href="">
                    <div class="col-12 m-1"
                        style="min-width: 250px; height: 300px; background-color: #E9FAE1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <p>Small Home Appliances</p>
                        <img style=" width: 80%; height: 80%;"
                            src="https://be.fresh.com.eg/media/catalog/category/microwavw_7_1_1.png" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="col-12 m-1"
                        style="min-width: 250px; height: 300px; background-color: #E5F6FF; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <p>Tvs</p>
                        <img style=" width: 80%; height: 80%;"
                            src="https://be.fresh.com.eg/media/catalog/category/TV_1_1_1_.png" alt="">
                    </div>
                </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4">
            <a href="">
            <div
                style="min-width: 250px; height: 600px; background-color: #E6E6E6; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <p>Cooker</p>
                <img style="  width: auto; height: 90%;"
                    src="https://be.fresh.com.eg/media/catalog/category/Fresh_cookers_1_.png" alt="">
            </div>
        </a>
        </div>
    </div>
</div>

@endsection