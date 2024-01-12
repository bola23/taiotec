@extends('shared/layout')

@section('content')

    <div class="row">

        <div class="col-lg-4 col-md-5">
            <div class="gap-3 row" data-reactid=".0.1.1.0">
                <div class="" data-reactid=".0.1.1.0.0">
                    <div class="card" data-reactid=".0.1.1.0.0.0">
                        <h4 data-reactid=".0.1.1.0.0.0.0"> The total amount of </h4>
                        <div class="store-item mt-2" data-reactid=".0.1.1.0.0.0.1">
                            <div class="row" data-reactid=".0.1.1.0.0.0.1.0">
                                <div class="" data-reactid=".0.1.1.0.0.0.1.0.0">
                                    <div class="list-store d-flex align-items-center justify-content-between"
                                        data-reactid=".0.1.1.0.0.0.1.0.0.0">
                                        <p data-reactid=".0.1.1.0.0.0.1.0.0.0.0">Temporary amount</p>
                                        <p data-reactid=".0.1.1.0.0.0.1.0.0.0.1">{{$totalAmount}}</p>
                                    </div>
                                   
                                    <div class="bottom-line" data-reactid=".0.1.1.0.0.0.1.0.0.2"></div>
                                </div>
                            </div>
                            <div class="mt-2 row" data-reactid=".0.1.1.0.0.0.1.1">
                                <div class="col-6" data-reactid=".0.1.1.0.0.0.1.1.0">
                                    <p class="p-total-label" data-reactid=".0.1.1.0.0.0.1.1.0.0">The total
                                        amount of (Including VAT)</p>
                                </div>
                                <div class="col-6" data-reactid=".0.1.1.0.0.0.1.1.1">
                                    <p class="p-total" data-reactid=".0.1.1.0.0.0.1.1.1.0">{{$totalAmount}}</p>
                                </div>
                            </div>
                            <div class="mt-1 row">
                                   <div class="" ><button type="button"
                                        class="w-100 btn btn-md btn-outline-danger btn-block"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Buy Now</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="root" class="col-8">
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                      <div style="direction: rtl">

                        <div class="row">
                            <div class="col-lg-10 col-md-8">
                                <div class="card" style=" height:70%">

                                    <div class="store-item mt-2">
                                        <div class="row">
                                            <div class="col-lg-3"><img style="width:90%; height:80%" alt="Error In Img"
                                                    class="card-img-top image-store"
                                                    src="{{ asset('upload/' . $details['Image']) }}" alt="White Hoodie">
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="mt-3 mt-lg-0 d-flex align-items-center justify-content-between">
                                                    <h4>{{ $details['name'] }}</h4>


                                                    <div>
                                                        <div class="btn-quantity-container d-flex align-items-center justify-content-center"
                                                            style="gap:.5rem;">
                                                            <button type="button"
                                                                class="btn-quantity btn btn-default">−</button>
                                                            <span class="p-quantiry">1</span>
                                                            <button type="button" class="btn-quantity btn btn-default" ">+</button>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="list-store d-flex align-items-center justify-content-between">
                                                        <div class="d-flex gap-2">
                                                            <button onclick="removeItemFromCart('{{ $id }}')"
                                                                type="button" class="btn-list btn btn-xs btn-default">
                                                                <i class="fa fa-trash"> </i>
                                                                <span>Remove Item</span>
                                                            </button>
                                                        </div>
                                                        <div class="d-flex">
                                                            <h5>{{ $details['price'] }} EGP</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
        </div>
    </div>


    <form action="{{route('submitOrder')}}" onsubmit="clearCartOnSubmit()" method="POST">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Order Confirmation</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation d-flex flex-column" novalidate id="form">
                            <div class="col-12">
                                <label for="validationCustom08" class="form-label">First name</label>
                                <input name="fname" type="text" class="form-control" id="fname"
                                    oninput="allowOnlyAlphabetic(this)" required>
                                <div class="valid-feedback" >
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    oninput="allowOnlyAlphabetic(this)" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="validationCustom01" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="PNUM"
                                    oninput="validateNumericInput()" required>
                                <div class=" valid-feedback ">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="validationCustom01" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="validationCustom03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationCustom03" required>

                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="validationCustom02" class="form-label">Address</label>
                                <input type="text" class="form-control" id="validationCustom02" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    {{-- script of quantity --}}
    <script>
        let quantity = 1;


        function decreaseQuantity() {

            if (quantity > 1) {

                quantity--;

                document.getElementById('quantity').innerText = quantity;

            }

        }


        function increaseQuantity() {

            quantity++;

            document.getElementById('quantity').innerText = quantity;

        }


        function buyNow() {

            // Your buy now functionality here

            alert('You have purchased ' + quantity + ' items.');

        }


        function deleteProduct() {

            // Your delete product functionality here

            alert('Product has been deleted.');
        }
    </script>



    <script>
        function clearCartOnSubmit() {
            // Clear the 'cart' session
            fetch("{{ route('clearCart') }}", {
                method: "GET"
            });

            // Redirect to the current page to refresh the cart display
            window.location.href = window.location.href;

            // Prevent the form from submitting (optional)
            return false;
        }
    </script>

    <script>
        function removeItemFromCart(itemId) {
            fetch("{{ route('removeItemFromCart') }}?id=" + itemId, {
                    method: "GET"
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Refresh the page to update the cart display
                        window.location.href = window.location.href;
                    } else {
                        console.error("Failed to remove item from cart:", data.error);
                    }
                })
                .catch(error => console.error("Error during fetch:", error));
        }
    </script>


@endsection
