@extends('layouts.admin')

@section('content')
<main class="d-flex">
    <div class="container mt-5 products">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-md-3">
                <h3>Edit Product</h3>
                <form action="/admin/edit/<?= $product['id'] ?>" method="post">
                    @csrf
                    <div class="form-group mb-2 mx-2">
                        <label class="sr-only">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Food Item Name" value="<?= $product['name'] ?>">
                    </div>
                    <div class="form-group mb-2 mx-2">
                        <label class="sr-only">Type</label>
                        <select name="type" class="custom-select" value="<?= $product['type'] ?>">
                            <option selected>Select type</option>
                            <option value="BreakFast">Break fast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                            <option value="Dessert">Dessert</option>
                        </select>
                    </div>
                    <div class="form-group mb-2 mx-2">
                        <label class="sr-only">Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Price" value="<?= $product['price'] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mb-2 btn-block">Update Food</button>
                </form>
            </div>
        </div>
        <p class="text-success"> {{ session('mssg') }} </p>
    </div>
</main>
@endsection