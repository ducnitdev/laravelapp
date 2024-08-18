@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Products') }}</span>
                </div>

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>URL</th>
                                    <th>Product Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                <tr>
                                    <td>{{ $product->id ?? 'N/A' }}</td>
                                    <td>{{ $product->name ?? 'N/A' }}</td>
                                    <td>{{ $product->price ?? 'N/A' }}</td>
                                    <td><a href="{{ $product->url }}" target="_blank">{{ $product->url ?? 'N/A' }}</a></td>
                                    <td>
                                        @if($product->image)
                                        <img src="{{ $product->image }}" alt="Product Image" class="img-thumbnail" style="max-height: 100px; max-width: 100px;">
                                        @else
                                        <span>No Image</span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">No records found!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Links -->
                    <div class="pagination-wrapper">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card-header {
        background-color: #343a40;
        color: white;
    }
    .table th, .table td {
        text-align: center;
    }
    .table img {
        border-radius: 5px;
    }
    .pagination-wrapper {
        margin-top: 20px;
    }
</style>
@endpush
