@extends('shared/layout')

@section('content')
    <div class="container text-center" style="direction: rtl">
        <div class="row row-cols-2 ">
          <div class="col-4">
            <img src="{{asset('upload/'.$product->Image)}}"
            alt="error" width="80%" height="auto">
        </div>
            <div class="col-8">
                <h1 class="m-3">{{ $product->Name }}</h1>
                <h3 class="m-3">Price: {{ $product->Price }}</h3>
                <ul class="m-3" style="list-style: none; padding: 0%;">
                    <li>{{ $product->Description }}</li>

                </ul>
            </div>
            
        </div>
    </div>

    <div class="container-lg">
        <h1 class="m-4 text-center">Product Specifications</h1>
        <div class="container text-center my-2">
            <div class="row align-items-center">
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>
        <div class="container text-center my-2">
            <div class="row align-items-center">
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>
        <div class="container text-center my-2">
            <div class="row align-items-center">
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>
        <div class="container text-center my-2">
            <div class="row align-items-center">
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>
        <div class="container text-center my-2">
            <div class="row align-items-center">
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>
        <div class="container text-center my-2">
            <div class="row align-items-center">
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>
        <div class="container text-center my-2">
            <div class="row align-items-center">
                <div class="col">
                    One of three columns
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>
    </div>
@endsection
