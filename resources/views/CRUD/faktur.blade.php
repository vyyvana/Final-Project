@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create barang') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('formFaktur', $datas->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                        <label for="namabarang" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                            <div class="card">
                                <div class="faktur-card">
                                    {{$datas->nama}}
                                </div>
                            </div>

                                @error('namabarang')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="kategori" class="col-md-4 col-form-label text-md-right">{{ __('Kategori') }}</label>

                            <div class="col-md-6">
                            <div class="card">
                                <div class="faktur-card">
                                @foreach ($datas->category as $category)
                                    @if($loop->last)
                                        {{$category->category_name}}
                                    @else
                                        {{$category->category_name}},
                                    @endif
                                @endforeach
                                </div>
                            </div>
                                @error('kategori')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="hargabarang" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                            <div class="card">
                                <div class="faktur-card">
                                    Rp.{{$datas->harga}}
                                </div>
                            </div>

                                @error('harga')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlahbarang" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>

                            <div class="col-md-6">
                                <input id="jumlahbarang" type="number" class="form-control" name="jumlahbarang" placeholder="Jumlah barang">
                                @error('jumlahbarang')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat rumah">
                                @error('alamat')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kodepos" class="col-md-4 col-form-label text-md-right">{{ __('KodePos') }}</label>

                            <div class="col-md-6">
                                <input id="kodepos" type="text" class="form-control" name="kodepos" placeholder="Kode Pos">
                                @error('kodepos')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Masukkan ke faktur') }}
                                </button>
                            </div>
                        </div>

                        <p ><small class="text-muted"><a href="{{route('home')}}"> Back to home</a></small></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection