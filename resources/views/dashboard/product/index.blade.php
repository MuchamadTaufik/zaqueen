@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Product</h1>
</div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/product/create" class="btn btn-dark mb-3 mt-3">Create Product</a>
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posting as $product)
                
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    <a href="/dashboard/product/{{ $product->slug }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></span></a>
                    <a href="/dashboard/product/{{ $product->slug }}/edit" class="badge bg-dark"><i class="bi bi-pencil-square"></i></span></a>

                    <form action="/dashboard/product/{{ $product->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><i class="bi bi-trash3"></i></button>
                    </form>
                </td>
                </tr>

            @endforeach
        </tbody>
        </table>
    </div>

@endsection