@extends('layouts.app')

@section('content')
<main class="d-flex">
    <div class="container">
        <form action="/orders" method="post">
            @csrf
            <table class="table table-striped">
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
                                <input type="checkbox" name='cartItem[]' value={{$item['name']}}>
                            {{-- </div> --}}
                        </td>
                        <td> {{ $item['name'] }} </td>
                        <td> {{ $item['price'] }} </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <input type="submit" >Order
        </form>
    </div>
</main>
@endsection
