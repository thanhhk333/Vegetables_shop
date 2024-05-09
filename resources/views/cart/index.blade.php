@extends('layouts.app')
@section('content')
<div class="card">
    <div class="cart-header">
       <h3 class="text-center pt-2">Product in Cart </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Images</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['products'] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td><img src="{{ asset('img/'.$product->getImage()) }}" alt="" width="50px" height="50px"></td>
                    <td>{{ $product->getPrice() }}</td>
                    <td>{{ session('products')[$product->getId()] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a class="btn btn-outline-secondary mb-2"><b>Total to pay:</b>${{$viewData['total']}}</a>
                @if(count($viewData['products']) > 0)
                <a href="{{route('cart.purchase')}}" class="btn btn-primary text-white mb-2">Purchase</a>
                <a href="{{route('cart.delete')}}"> 
                    <button class="btn btn-danger mb-2">
                        Remove all product from Cart
                    </button>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
