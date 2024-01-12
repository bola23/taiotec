@extends('shared/layout')

@section('content')
    {{-- <form action="{{route("cookers.update")}}"></form> --}}
    <div class="container text-center">
        <div class="row row-cols-2">
            <form action="{{ route("products.update",$products->ProductID) }}" method="POST">
              @method('PUT') 
              @csrf
                <div class="col-6">
                    <input style="direction: rtl" type="file" class="m-3 form-control" name="fileInput"
                    value="{{ $products->Image }}">
                    <label for=""  class="col-6">Product Name:</label>
                    
                    <input style="direction: rtl" class="m-3 form-control col-12" type="text" name="ItemName"
                    value="{{ $products->Name }}">
                  
                    <label for=""  class="col-6">Product Price:</label>
                    <input style="direction: rtl" type="text" class="m-3 form-control" name="ItemPrice"
                        value="{{ $products->Price }}">

                        <input style="direction: rtl" type="hidden" class="m-3 form-control" name="ItemCategory"
                        value="{{ $products->CategoryID }}">
                        <input style="direction: rtl" type="hidden" class="m-3 form-control" name="Itemmanu"
                        value="{{ $products->ManufacturerID }}">
                        <label for="">Product Description:</label>
                    <textarea style="direction: rtl ;width:500px" type="text" rows="15" name="ItemDescription" cols="12"
                        class="m-3 form-control" value="{{ $products->Description }}">{{ $products->Description }}</textarea>
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
            <div class="col-6">
                <img src="{{asset('upload/'.$products->Image)}}"
                alt="Error" width="80%" height="auto">
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
