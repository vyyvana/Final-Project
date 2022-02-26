@extends('layouts.app')

@section('content')

@if($datas->count() > 0)
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
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Halaman</th>
                <th scope="col">Tahun</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>  
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $books)
                <tr>
                    <td>{{$books->id}}</td>
                    <td>{{$books->judul}}</td>
                    <td>{{$books->penulis}}</td>
                    <td>{{$books->halaman}}</td>
                    <td>{{$books->tahun}}</td>
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
    @if(Session::get('success'))
        <div class="success-alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="else">
        <h2>Tidak ada data yang ditemukan</h2>
        <a href=" {{ route ('home') }}"> Click to go back home</a>
    </div>
    
@endif

@endsection