@extends('layouts.admin')

@section('content')
<main class="d-flex">
    <div class="container mt-5 products">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <h3>Edit Product</h3>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>ID</td>
                        <td><?= $product['id'] ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?= $product['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td><?= $product['type'] ?></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><?= $product['price'] ?></td>
                    </tr>
                </table>

                <a href="/admin/edit/<?= $product['id'] ?>" class="btn btn-warning mb-2 btn-block mb-2">Edit Food</a>
                <a href="/admin/delete/<?= $product['id'] ?>" class="btn btn-danger mb-2 btn-block">Delete Food</a>
            </div>
        </div>
        <p class="text-success"> {{ session('mssg') }} </p>
    </div>
</main>
@endsection