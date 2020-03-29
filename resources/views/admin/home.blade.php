@extends('layouts.app')

@section('content')
<main class="d-flex">
  <div class="container mt-5 products">
    <h3>Add new item to the menu :</h3>
    <div class="row">
      <form action="/admin" method="post" class="form-inline">
        @csrf
        <div class="form-group mb-2 mx-2">
          <label class="sr-only">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Food Item Name">
        </div>
        <div class="form-group mb-2 mx-2">
          <label class="sr-only">Type</label>
          <select name="type" class="custom-select">
            <option selected>Select type</option>
            <option value="BreakFast">Break fast</option>
            <option value="Lunch">Lunch</option>
            <option value="Dinner">Dinner</option>
            <option value="Dessert">Dessert</option>
          </select>
        </div>
        <div class="form-group mb-2 mx-2">
          <label class="sr-only">Price</label>
          <input type="number" name="price" class="form-control" placeholder="Price">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Add Item</button>
      </form>
    </div>
    <p class="text-success"> {{ session('mssg') }} </p>
    <div class="container px-0">
      <h1 class="title">All Products</h1>
      <p class="text-danger"> {{ session('mssg-dlt') }} </p>
      <div class="table-responsive">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Type</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($products as $item)
            <tr>
              <th scope="row">{{$loop->index + 1}}</th>
              <td> {{ $item->name }} </td>
              <td> {{ $item->type }} </td>
              <td> &#8377; {{ $item->price }} </td>
              <td>
                <div class="btn-group">
                  <a href="{{ route('edit', $item->id) }}" class="btn btn-small btn-warning">Edit</a>
                  <a href="{{ route('delete', $item->id) }}" class="btn btn-small btn-danger">Delete</a>
                </div>
              </td>
            </tr>
            @empty
            <p>No Food items added yet</p>
            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
@endsection