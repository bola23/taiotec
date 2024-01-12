@extends('shared/layout')

@section('content')
    {{-- <form action="{{route("cookers.update")}}"></form> --}}
    <div class="container text-center">
        <div class="row row-cols-2">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ route("products.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="col-6">
                      <input style="direction: rtl" class="m-3 form-control" type="text" name="ItemName"
                         >
                      <input style="direction: rtl" type="text" class="m-3 form-control" name="ItemPrice"
                        >
                          <input style="direction: rtl" type="" class="m-3 form-control" name="ItemCategory"
                          >
                          <input style="direction: rtl" type="" class="m-3 form-control" name="Itemmanu"
                        ">
                      <textarea style="direction: rtl" type="text" rows="4" name="ItemDescription" cols="100"
                          class="m-3 form-control" ></textarea>
                      <button type="submit" class="btn btn-success">Save Product</button>
                  </div>
                  <div class="col-6">
                    <input style="direction: rtl" class="m-3 form-control" type="file" name="inputFile">
                    
                                   
                  </div>
              </form>
            
          
           
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
