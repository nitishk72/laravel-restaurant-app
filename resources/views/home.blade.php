@extends('layouts.app')

@section('content')
<main class="d-flex">
    <div class="container-fluid bg-dark align-items-center justify-content-conter foodTypeCont ">
        <div class="row justify-content-center">
            <div class="col text-white text-center">
                <h4>Select your food type</h4>
            </div>
        </div>
        <div class="row foodTypeCards justify-content-between">
            <div class="container">
             <div class="row justify-content-around my-4">
             <a href="{{ route('product', $product->id ) }}" class="card col-3">
                    <div style="background-image:url(/img/breakfast.jpeg)" class="card-img-top" alt="..."></div>
                    <div class="card-body text-center">
                      <h5 class="card-title">BreakFast</h5>
                    </div>
                </a>
                <a href="/product/lunch" class="card col-3">
                   <div style="background-image:url(/img/lunch.jpeg)" class="card-img-top" alt="..."></div>
                   <div class="card-body text-center">
                     <h5 class="card-title">Lunch</h5>
                   </div>
               </a>
             </div>
            <div class="row justify-content-around my-4">
                <a href="/product/" class="card col-3">
                    <div style="background-image:url(/img/dinner.jpeg)" class="card-img-top" alt="..."></div>
                    <div class="card-body text-center">
                      <h5 class="card-title">Dinner</h5>
                    </div>
                </a>
                <a href="/product/" class="card col-3">
                    <div style="background-image:url(/img/desserts.jpeg)" class="card-img-top" alt="..."></div>
                    <div class="card-body text-center">
                      <h5 class="card-title">Dessert</h5>
                    </div>
                </a>
            </div>
            </div>
         </div>
    </div>
</main>
@endsection
