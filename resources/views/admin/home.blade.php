@extends('layouts.admin')

@section('content')
<main class="d-flex">
  <div class="container mt-5 products">
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
                  <a href="{{ route('view', $item->id) }}" class="btn btn-small btn-secondary">View Food</a>
                  {{-- <a href="{{ route('edit', $item->id) }}" class="btn btn-small btn-warning">Edit Food</a>
                  <a href="{{ route('delete', $item->id) }}" class="btn btn-small btn-danger">Delete Food</a> --}}
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