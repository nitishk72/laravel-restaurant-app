@extends('layouts.admin')

@section('content')
<main style="min-height:80vh;">

    <div class="jumbotron">
        <h1 class="text-center">Admin Orders Page</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID #</th>
                            <th>User ID </th>
                            <th>Time </th>
                            <th>Status </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->status }}</td>
                            <td>
                                <a href="/admin/approveOrder/{{$order->id}}" class="btn btn-primary">Approve</a>
                                <a href="/admin/cancelOrder/{{$order->id}}" class="btn btn-danger">Cancel</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


@endsection