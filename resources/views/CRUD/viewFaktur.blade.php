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
                    <th scope="col">No invoice.</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th> 
                    <th scope="col">Alamat</th>
                    <th scope="col">Kode Pos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sum = 0;
                    ?>
                    @foreach($datas as $faktur)
                    <tr>
                        <td>{{$faktur->id}}</td>
                        <td>
                            {{$faktur->kategori}}
                        </td>
                        <td>{{$faktur->namabarang}}</td></a>
                        <td>Rp.{{($faktur->hargabarang)*($faktur->jumlahbarang)}}</td>
                            <?php
                            $sum += ($faktur->hargabarang)*($faktur->jumlahbarang);
                            ?>
                        <td>{{$faktur->jumlahbarang}}</td>
                        <td>{{$faktur->alamat}}</td>
                        <td>{{$faktur->kodepos}}</td>
                    </tr>
                    @endforeach
                    <td>
                        Total Harga: {{$sum}}
                    </td>
                
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
        <h2>Tidak ada produk dalam faktur</h2>
        <a href=" {{ route ('home') }}"> Click to go back home</a>
    </div>
    
@endif

@endsection