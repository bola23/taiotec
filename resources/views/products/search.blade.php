@extends('shared/layout')

@section('content')
    <div class="col-12">
        <div class="row" style="direction:rtl">

            @foreach ($product as $data)
                <div class="col-md-3">
                    <div class="card" style="width: 15rem; height:70%">
                        <img src="{{asset('upload/'.$data->Image)}}"
                        class="card-img-top" style="width: 90%; height:50%" alt="Error In Img">


                        <div class="card-body">
                            <h5 class="card-title">{{ $data->Name }}</h5>
                            <p class="card-text">{{ $data->Price }}</p>
                            @foreach ($manufacturers as $dataa)
                            @if ($data->ManufacturerID == $dataa->ManufacturerID)
                                <p class="card-text">{{ $dataa->ManufacturerName }}</p>
                            @endif
                        @endforeach 
                            <a class="btn btn-success" href="{{ route('products.show', $data->ProductID) }}">go to
                                product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
