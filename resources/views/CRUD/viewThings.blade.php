@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
            <img src="{{('/storage/').$datas->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$datas->nama}}</h5>
                <p class="card-text">Harga: Rp. {{$datas->harga}}</p>
                <p class="card-text">Jumlah: {{$datas->jumlah}}</p>
                <p class="card-text"><small class="text-muted"><a href="{{route('home')}}"> Back to home</a></small></p>
            </div>
            </div>
            <td>
                @if($datas->jumlah > 0)
                    <a href="{{ route ('formFaktur', $datas->id) }}" class="btn-danger btn"> Masukkan ke faktur </a>
                @else
                    <div class="btn-danger btn">Barang sudah habis, silakan tunggu hingga barang di-restock ulang</div>
                @endif  
            </td>
        </div>
    </div>
</div>
@endsection