@extends('layouts.app')

@section('content')

@if($datas->count() > 0)

    @if(Auth::user()->role == 'admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::get('success'))
                <div class="success-alert">
                    {{Session::get('success')}}
                </div>
                @endif
            <table class="table table-danger table-striped">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $books)
                    <tr>
                        <td>{{$books->id}}</td>
                        <td>
                            @foreach ($books->category as $category)
                                @if($loop->last)
                                {{$category->category_name}}
                                @else
                                {{$category->category_name}},
                                @endif
                            @endforeach
                        </td>
                        <td>{{$books->nama}}</td></a>
                        <td>Rp.{{$books->harga}}</td>
                        <td>{{$books->jumlah}}</td>
                        <td>
                            <a href="{{ route ('updateBook', $books->id) }}" class="btn-danger btn"> Update </a>
                        </td>
                        <td>
                            <form action="{{ route ('deleteBook', $books->id) }}" method="Post">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn-danger btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
    @else
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::get('success'))
                <div class="success-alert">
                    {{Session::get('success')}}
                </div>
                @endif
            <table class="table table-danger table-striped">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $books)
                    <tr>
                        <td>{{$books->id}}</td>
                        <td>
                            @foreach ($books->category as $category)
                                @if($loop->last)
                                {{$category->category_name}}
                                @else
                                {{$category->category_name}},
                                @endif
                            @endforeach
                        </td>
                        <td><a href="{{route('viewThings', $books->id)}}">{{$books->nama}}</td></a>
                        <td>Rp.{{$books->harga}}</td>
                        <td>{{$books->jumlah}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
    @endif

@else
    @if(Session::get('success'))
        <div class="success-alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="else">
        <h2>Barang sudah habis, silakan tunggu hingga barang di-restock ulang</h2>
        <a href=" {{ route ('home') }}"> Click to go back home</a>
    </div>
    
@endif

@endsection