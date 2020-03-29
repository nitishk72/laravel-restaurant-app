@extends('layouts.app')

@section('content')
<main class="d-flex">
<div class="container my-4">
    <h3>Your Cart</h3>
        <table class="table table-hover container">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($carts as $item)
              {{-- {{$item}} --}}
                <tr class="cartInfo" >
                  <th scope="row">{{$loop->index + 1}}</th>
                  <td> <img src="/img/{{$item->type}}.jpeg" alt="">  {{ $item->name }} </td>
                  <td> {{ $item->price }} </td>
                </tr>
                @empty
                  <p>No Food items added yet</p>
              @endforelse
            
            </tbody>
          </table>  
          <a href="/orders" class="btn btn-primary">Order</a>
    </div>
</main>
@endsection
