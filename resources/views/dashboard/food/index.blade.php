@extends('dashboard.main')
@section('maincontent')
    <section class="section">
        <div class="section-header">
            <h1>Data Foods&Drinks</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/dashboard/food/create" class="btn btn-primary">Tambah Foods&Drinks</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No.
                                        </th>
                                        <th>Name </th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name_product }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->image }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>{{ $product->category->category_name }}</td>
                                            <td>
                                                <a href="/dashboard/food/edit/{{ $product->id }}"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="/dashboard/food/delete/{{ $product->id }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
