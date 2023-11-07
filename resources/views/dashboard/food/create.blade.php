@extends('dashboard.main')
@section('maincontent')
    <section class="section">
        <div class="section-header">
            <h1>Create Data Foods & Drinks</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form action="/product" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name_product">Name Product</label>
                                    <input type="text" name="name_product" id="name_product" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stok</label>
                                    <input class="form-control" name="stock" id="stock" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input class="form-control" type="file" name="image" id="image" required>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="form-control" name="category_id" id="Category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
