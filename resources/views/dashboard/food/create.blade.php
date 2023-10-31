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
                        <form action="/dashboard/food/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name Product</label>
                                    <input type="text" name="name_product" id="name_product" class="form-control"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="description" class="form-control" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price" id="price" class="form-control">
                                </div>
                                <div class="form-group mb-0">
                                    <label>Stok</label>
                                    <input class="form-control" name="stok" id="stok" required="">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    @foreach ( as )
                                        
                                    @endforeach
                                    <select class="form-control" name="category_id" id="Category_id"></select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
