@extends('layouts.horizontal')

@section('page-heading', 'Selamat Datang di Hewanesia')
@section('content')
    <div class="container">
        <div class="col-12 mb-4">
            <div class="card p-4">
                <h1 class="text-center display-5 display-md-3 mb-4">Apa Itu Hewanesia?</h1>
                <p class="fw-normal text-justify fs-6 fs-md-5 lh-base mb-3">
                    <b>Hewanesia</b> adalah platform adopsi hewan yang bertujuan untuk menyelamatkan nyawa hewan peliharaan
                    dengan memberikan mereka kesempatan untuk menemukan rumah yang penuh kasih sayang. Website ini
                    menghubungkan orang-orang yang ingin mengadopsi hewan dengan tempat penampungan hewan dan organisasi
                    penyelamatan di seluruh Indonesia.
                </p>
                <p class="fw-normal text-justify fs-6 fs-md-5 lh-base">
                    Selain itu, <b>Hewanesia</b> juga dilengkapi dengan fitur laporan hewan terlantar, yang memungkinkan
                    masyarakat untuk melaporkan hewan yang membutuhkan perhatian atau pertolongan. Fitur ini memudahkan
                    pengunjung untuk melaporkan hewan yang terlantar atau dalam bahaya, sehingga tim penyelamat atau relawan
                    dapat merespons dengan cepat dan memberi perlindungan atau tempat penampungan yang aman bagi hewan
                    tersebut.
                </p>
            </div>
        </div>

        <div class="col-12 mb-4">
            <div class="card p-4">
                <h1 class="text-center display-5 display-md-3 mb-4">Berkenalan Dengan Fitur Di Hewanesia</h1>
                <div class="mb-4">
                    <h5 class="fs-6 fs-md-5">Pencarian Hewan</h5>
                    <ul>
                        <li>Pengguna dapat mencari hewan berdasarkan jenis, usia, ukuran, dan lokasi.</li>
                        <li>Setiap hewan yang diadopsi dilengkapi dengan foto, deskripsi, dan informasi tentang kesehatan
                            serta kebutuhan perawatan.</li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h5 class="fs-6 fs-md-5">Fitur Laporan Hewan Terlantar</h5>
                    <ul>
                        <li>Pengunjung dapat melaporkan hewan yang ditemukan terlantar atau membutuhkan pertolongan melalui
                            formulir laporan.</li>
                        <li>Laporan akan diteruskan ke tim penyelamatan atau relawan untuk tindak lanjut dan perlindungan
                            hewan.</li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h5 class="fs-6 fs-md-5">Fitur Adopsi Hewan Terlantar</h5>
                    <ul>
                        <li>Pengunjung dapat mengadopsi hewan yang sudah di rescue oleh pengunjung lain dengan mengisi
                            formulir yang tersedia.</li>
                        <li>Permintaan adopsi akan diteruskan ke admin untuk tindak lanjut atas formulir yang dikirimkan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card p-4">
                <h1 class="text-center display-5 display-md-3 mb-4">Sosial Media dan Komunitas</h1>
                <p class="fw-normal text-justify fs-6 fs-md-5 lh-base">
                    Tautan ke akun sosial media Hewanesia untuk mengikuti update, berbagi kisah adopsi, dan bergabung dalam
                    komunitas pecinta hewan.
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <div class="d-flex justify-content-evenly gap-5 pt-3">
                        <a href="https://www.instagram.com/hanss.br/" class="text-decoration-none text-primary">
                            <h1 class="bi bi-instagram"></h1>
                        </a>
                        <a href="https://youtube.com/@hans-pk7iq?si=TWBximu0smTXx-Ei"
                            class="text-decoration-none text-primary">
                            <h1 class="bi bi-youtube"></h1>
                        </a>
                        <a href="https://www.facebook.com/rayhan.iqbal.5439" class="text-decoration-none text-primary">
                            <h1 class="bi bi-facebook"></h1>
                        </a>
                        <a href="https://wa.me/qr/MAOCTRDTZ4FMH1" class="text-decoration-none text-primary">
                            <h1 class="bi bi-whatsapp"></h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
