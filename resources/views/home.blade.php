@extends('layouts.app')

@section('content')

@if(Auth::user()->role == 'admin')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Book') }}</div>

                <div class="card-body">
                    <a href=" {{route ('create') }}"> Click here to create book</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View All Books') }}</div>

                <div class="card-body">
                    <a href=" {{ route ('viewBook') }}"> Click here to view all books</a>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View All Books') }}</div>

                <div class="card-body">
                    <a href=" {{ route ('viewBook') }}"> Click here to view all books</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Invoices') }}</div>

                <div class="card-body">
                    <a href=" {{ route ('viewFaktur') }}"> Click here to view all invoices</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection