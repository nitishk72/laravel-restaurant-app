@extends('layouts.app')

@section('content')
<div class="container mt-4" style="min-height:80vh">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="https://nitishk72.github.io/angular-js-quiz-application/assets/images/nitish.jpg" height="350"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nitish Kumar Singh</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quaerat
                        aperiam,
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class=" mb-4">
                <div class="card-header">
                    Info
                </div>
                <table class="table table-bordered">
                    <tbody>

                        <tr>
                            <td>USER ID</td>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <div class=" mb-4">
                <div class="card-header">
                    Orders
                </div>
                <table class="table table-bordered">
                    <tbody>
                        @foreach ([1,2,3,4,5] as $item)
                            
                        <tr>
                        <td> {{ $item }} Item Name</td>
                        <td>28/0{{$item}}/2020</td>
                            <td>  &#8377;  {{ $item + 1 * 40 }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection