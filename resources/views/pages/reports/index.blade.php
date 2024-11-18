@extends('layouts.dashboard')
@section('page-heading', 'Buat Laporan')


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
                    <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-inputs.basic-input label="Nama Penyelamat" id="rescuer" name="rescuer"
                            placeholder="Masukkan Nama Penyelamat" />
                        @error('rescuer')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <x-inputs.basic-input type="file" label="Gambar Hewan" id="image" name="image"
                            placeholder="Masukkan Gambar Hewan" />
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <x-inputs.basic-input label="Nama Hewan" id="name" name="name"
                            placeholder="Masukkan Nama Hewan" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <x-inputs.basic-input label="Umur Hewan" id="age" name="age"
                            placeholder="Masukkan Umur Hewan" />
                        @error('age')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label for="gender">Gender</label>
                        <select class="form-select" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Unknown</option>
                        </select>
                        <x-inputs.text-area label="Deskripsikan Hewan" id="description" name="description"
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
