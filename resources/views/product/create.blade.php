@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Product') }}</div>

                <div class="card-body">

                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <form method="POST" action='{{ route("products.store") }}' enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Product Name" >
                            @error('name')
                            <input class="form-control" type="text" name="image" placeholder="Product Image">
                            @error('image')
                            <input class="form-control" type="text" name="url" placeholder="Product Url" >
                            @error('url')
                            <input class="form-control" type="text" name="price" placeholder="Product Price">
                            @error('price')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <a class="btn btn-danger mr-1" href='{{ route("products.index") }}' type="submit">Cancel</a>
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection