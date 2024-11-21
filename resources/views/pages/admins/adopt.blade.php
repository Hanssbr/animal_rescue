@extends('layouts.adminboard')

@section('page-heading', 'Daftar Data Adopsi')
@section('content')
    <section class="section">
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
                                        <td><a href="{{ route('admin.show', ['id' => $adopter->animal_id]) }}"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a></td>
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
