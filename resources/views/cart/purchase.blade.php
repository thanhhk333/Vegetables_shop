@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
        Purchase Completed
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Congratulations, purchase completed. Order number is 
                <b>#{{ $viewData['cart']->getId() }}</b>
            </div>
        </div>
    </div>
@endsection
