
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID #</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->status }}</td>
                        <th>
                        <a href="/orders/{{$order->id}}" class="btn btn-secondary">View Order</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</main>
@endsection
