
@extends('layouts.app')

@section('content')
<main>
    <div class="jumbotron">
        <h1 class="text-center">
            Order History
        </h1>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-8 offset-md-2">
            <h1> Your Order ID id {{ $order->id }}</h1>
            <h3>Your Order is  {{ $order->status }}</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID #</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</main>
@endsection
