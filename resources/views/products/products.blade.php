@extends('shared.layout')

@section('content')
@if(session('success'))
<div class="alert alert-success mx-auto text-center col-4 ">
    {{ session('success') }}
</div>
@endif
    <div class="container-fluid" style="direction: rtl;">
        <div class="row">

            <div class="col-md-1">
                <div class="accordion mt-2" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <strong>
                                    <h5>priceing</h5>
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="slidecontainer">
                                    <h4>Select Price Range</h4>
                                    <input type="range" min="0" max="100" value="0" class="slider"
                                        id="myRange">
                                    <p>Selected Price: <span id="rangeValue">0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>
                                    <h5>Category</h5>
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefaultchecked">
                                    <label class=" form-check-label" for="flexCheckChecked">Default checkbox</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>
                                    <h5>Color</h5>
                                </strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-11">
                <div class="row">

                    @foreach ($product as $data)
                        @if (request()->is('cookers*'))
                        @if ($data->CategoryID == 2)
                        <div class="col-md-3 mb-3 ">
                            <div class="card" style="width:18rem; height:70%">
                                <img src="{{asset('upload/'.$data->Image)}}"
                                    class="card-img-top" style="width:90%;height:50%" alt="Error In Img">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->Name }}</h5>
                                    <p class="card-text">{{ $data->Price }}</p>
                                    @foreach ($manufacturers as $dataa)
                                        @if ($data->ManufacturerID == $dataa->ManufacturerID)
                                            <p class="card-text">{{ $dataa->ManufacturerName }}</p>
                                        @endif
                                    @endforeach

                                    <a class="btn btn-success col-6"
                                        href="{{ route('products.show', $data->ProductID) }}">go to product</a>
                                    <a href="{{ url('add-to-cart/'. $data->ProductID) }}"
                                        class="btn btn-primary col-5">Add to Cart</a>

                                </div>
                            </div>
                        </div>
                    @endif
                        @elseif (request()->is('fridge*'))
                            @if ($data->CategoryID == 3)
                                <div class="col-md-3 mb-4 ">
                                    <div class="card" style="width:18rem; height:70%">
                                        <img src="{{asset('upload/'.$data->Image)}}"
                                            class="card-img-top" style="width:90%;height:50%" alt="Error In Img">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $data->Name }}</h5>
                                            <p class="card-text">{{ $data->Price }}</p>
                                            @foreach ($manufacturers as $dataa)
                                                @if ($data->ManufacturerID == $dataa->ManufacturerID)
                                                    <p class="card-text">{{ $dataa->ManufacturerName }}</p>
                                                @endif
                                            @endforeach

                                            <a class="btn btn-success col-6"
                                                href="{{ route('products.show', $data->ProductID) }}">go to product</a>
                                            <a href="{{ url('add-to-cart/'. $data->ProductID) }}"
                                                class="btn btn-primary col-5">Add to Cart</a>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach

                </div>
            </div>


        @endsection
