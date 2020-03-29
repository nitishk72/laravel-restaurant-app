@extends('layouts.app')

@section('content')
<main class="d-flex">
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                Your Order ID id {{ $orders->id }}
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $orders->id }}</td>
            </tr>
            
        </table>
        <a href="/home"> << Back to home</a>
            </div>
        </div>
    </div>
</main>
@endsection
