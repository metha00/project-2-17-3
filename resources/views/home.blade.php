@extends('layouts.master_backend')
@section('content')
 <!-- Content -->
 <div class="container-xxl flex-grow-1 container-p-y">

    <div class="col-lg-12 col-md-4 order-1">
        <div class="row text-center">

            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">User</h1>
                        <span class="fw-semibold d-block mb-1">Totle</span>
                        <h3 class="card-title mb-2">{{ $user->count() ." " }}</h3>
                    </div>
                </div>

            </div>



            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Product</h1>
                        <span class="fw-semibold d-block mb-1">Totle</span>
                        <h3 class="card-title mb-2">{{ $product->count() ." " }}</h3>
                    </div>
                </div>

            </div>

        </div>

    </div>



</div>


<!-- / Content -->

@endsection
