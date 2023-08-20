@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Product</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/product" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="material" class="form-label">Material</label>
                <input type="text" class="form-control @error('material') is-invalid @enderror" id="material" name="material" required value="{{ old('material') }}">
                @error('material')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="size" class="form-label">Size</label>
                <input type="text" class="form-control @error('size') is-invalid @enderror" id="size" name="size" required value="{{ old('size') }}">
                @error('size')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') === $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label for="image1" class="form-label">Image 1</label>
                <img src="" class="img-preview img-fluid mb-3 d-block" id="frame" style="max-height: 400px; overflow:hidden">
                <input class="form-control @error('image1') is-invalid @enderror" type="file" id="image1" name="image1" onchange="preview()" required>
                @error('image1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="image2" class="form-label">Image 2</label>
                <img src="" class="img-preview img-fluid mb-3 d-block" id="frame2" style="max-height: 400px; overflow:hidden">
                <input class="form-control @error('image2') is-invalid @enderror" type="file" id="image2" name="image2" onchange="preview2()" required>
                @error('image2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="image3" class="form-label">Image 3</label>
                <img src="" class="img-preview img-fluid mb-3 d-block" id="frame3" style="max-height: 400px; overflow:hidden">
                <input class="form-control @error('image3') is-invalid @enderror" type="file" id="image3" name="image3" onchange="preview3()" required>
                @error('image3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="description" class="form-label">Description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary mb-5">Create</button>
        </form>
    </div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/dashboard/product/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }

    function preview2() {
        frame2.src=URL.createObjectURL(event.target.files[0]);
    }

    function preview3() {
        frame3.src=URL.createObjectURL(event.target.files[0]);
    }
</script>

@endsection