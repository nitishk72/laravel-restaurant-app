@extends('layouts.app')

@section('content')
<div class="container mt-4" style="min-height:80vh">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Your Profile
                </div>
            </div>
        </div>
    </div>
</div>
@endsection