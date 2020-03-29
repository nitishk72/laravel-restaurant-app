@extends('layouts.app')

@section('content')
<main class="d-flex">
  <div class="container my-5 products">
    @if(session('message'))
    <div class="alert alert-primary">
      {{ session('message') }}
    </div>
    @endif
    <h3>Select what you want to order</h3>
    <form action="/addCart" method="POSt">
      @csrf
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($foodItems as $item)
          <tr>
            <td>
              {{-- <div class="custom-control custom-checkbox"> --}}
              <input type="checkbox" name='cartItem[]' value={{$item->id}}>
              {{-- </div> --}}
            </td>
            <td> {{ $item->name }} </td>
            <td> {{ $item->price }} </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <input type="submit" value="Order" class="btn btn-primary">
    </form>
  </div>
</main>
@endsection