@extends('shared.layout')

@section('content')

    <div class="container-fluid" style="direction: rtl;">
        <div class="row">
            <div class="col-10">
                <div class="row">

                    @foreach ($product as $data)
                        @if (request()->is('editcookers*'))
                        @if ($data->CategoryID == 2)
                        <div class="col-md-3 mb-4 ">
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
                                    <div class="row">
                                        <a class="btn btn-success col-md-6"
                                            href="{{ route('products.edit', $data->ProductID) }}">Edit</a>
                                        <form class="col-md-6"
                                            action="{{ route('products.destroy', $data->ProductID) }}"
                                            method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" id="">
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
                        @elseif (request()->is('editfridge*'))
                            @if ($data->CategoryID == 3)
                                <div class="col-md-3 mb-4 ">
                                    <div class="card" style="width: 15rem; height:70%"">
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
                                            <div class="row">
                                                <a class="btn btn-success col-md-6"
                                                    href="{{ route('products.edit', $data->ProductID) }}">Edit</a>
                                                <form class="col-md-6"
                                                    action="{{ route('products.destroy', $data->ProductID) }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE" id="">
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                   <a href="{{route('products.create')}}">  <i class="far fa-plus-circle"
                        style="font-size:120px; color:green; margin-top:180px; margin-right:70px"></i></a>
                </div>
            </div>

        @endsection
