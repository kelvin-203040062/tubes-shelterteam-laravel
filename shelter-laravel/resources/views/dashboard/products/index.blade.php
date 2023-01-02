@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Product</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/products/create" class=" btn btn-primary mb-5">Create New Product</a>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Product</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->category->name }}" class="img-fluid " style="width: 300px; height: 250px" ></td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure To Delete Data?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
