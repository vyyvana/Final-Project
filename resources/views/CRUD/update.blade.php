@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update BOOK') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('showUpdate', $buku->id) }}">
                        @csrf
                        @method('Patch')
                        <div class="form-group row">
                            <label for="kategori" class="col-md-4 col-form-label text-md-right">{{ __('Kategori') }}</label>

                            <div class="col-md-6">
                                <input id="kategori" type="text" value="{{ $buku->kategori }}" class="form-control" name = "kategori" placeholder="Kategori barang">

                                @error('kategori')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" value="{{ $buku->nama }}" class="form-control" name="nama" placeholder="Nama">

                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input id="harga" type="number" value="{{ $buku->harga }}" class="form-control" name="harga" placeholder="Harga barang">

                                @error('harga')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah barang') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah" type="number" value="{{ $buku->jumlah }}" class="form-control" name="jumlah" placeholder="Jumlah barang">
                                @error('jumlah')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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