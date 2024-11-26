@extends('layouts.adminboard')

@section('page-heading', 'Daftar Data Adopsi')
@section('content')
    <section class="section">
        @if (session('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif
        @if (session('errorMessage'))
            <div class="alert alert-danger">{{ session('errorMessage') }}</div>
        @endif
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Pengadopsi</th>
                                    <th>Email</th>
                                    <th>Telp</th>
                                    <th>Alamat</th>
                                    <th>Alasan</th>
                                    <th>KTP</th>
                                    <th>Hewan Yang Di Adopsi</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $adopter)
                                    <tr>
                                        <td class="text-bold-500">{{ $adopter->name }}</td>
                                        <td>{{ $adopter->email }}</td>
                                        <td class="text-bold-500">{{ $adopter->telp }}</td>
                                        <td>{{ $adopter->address }}</td>
                                        <td>{{ $adopter->description }}</td>
                                        <td><img src="{{ asset('storage/' . $adopter->image) }}" alt="..."
                                                class="col-12 row-12 img-fluid overflow-hidden"
                                                style="max-height: 150px; object-fit: cover;" data-bs-toggle="modal"
                                                data-bs-target="#imageModal{{ $loop->iteration }}"></td>
                                        <td class="text-center align-middle">
                                            <a href="{{ route('admin.show', ['id' => $adopter->animal_id]) }}"
                                                class="inline-flex items-center justify-center">
                                                <i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <button class="btn btn-danger" style="margin-right: 1rem">
                                                <a href="{{ route('adopt.delete', $adopter->id) }}"
                                                    style="text-decoration: none; color: white">Delete</a></button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="imageModal{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="imageModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <img src="{{ asset('storage/' . $adopter->image) }}" alt="..."
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
