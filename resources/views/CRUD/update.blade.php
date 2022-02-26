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
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" value="{{ $buku->judul }}" class="form-control" name = "judul" placeholder="Judul buku">

                                @error('judul')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penulis" class="col-md-4 col-form-label text-md-right">{{ __('Penulis') }}</label>

                            <div class="col-md-6">
                                <input id="penulis" type="text" value="{{ $buku->penulis }}" class="form-control" name="penulis" placeholder="Penulis buku">

                                @error('penulis')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="halaman" class="col-md-4 col-form-label text-md-right">{{ __('Halaman') }}</label>

                            <div class="col-md-6">
                                <input id="halaman" type="number" value="{{ $buku->halaman }}" class="form-control" name="halaman" placeholder="Halaman buku">

                                @error('halaman')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Terbit') }}</label>

                            <div class="col-md-6">
                                <input id="tahun" type="number" value="{{ $buku->tahun }}" class="form-control" name="tahun" placeholder="Tahun terbit buku">
                                @error('tahun')
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection