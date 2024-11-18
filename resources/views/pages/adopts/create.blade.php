@extends('layouts.dashboard')
@section('page-heading', 'Form Adopsi')


@section('content')
    <section class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('adopt.store', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-inputs.basic-input label="Nama Pengadopsi" id="name" name="name"
                            placeholder="Masukkan Nama Pengadopsi" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <x-inputs.basic-input label="Email Pengadopsi" id="email" name="email"
                            placeholder="Masukkan Email" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <x-inputs.basic-input label="No Telp" id="telp" name="telp"
                            placeholder="Masukkan No Telpon" />
                        @error('telp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <x-inputs.basic-input label="Masukkan Alamat" id="address" name="address"
                            placeholder="Masukkan Alaamat" />
                        @error('age')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <x-inputs.basic-input type="file" label="Foto KTP" id="image" name="image"
                            placeholder="Masukkan KTP" />
                        @error('species')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <x-inputs.text-area label="Alasan Mengadopsi Hewan Ini" id="description" name="description"
                            placeholder="Masukkan Deskripsi Hewan" rows="4" />
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <button class="btn btn-info" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
