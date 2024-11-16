@extends('layouts.dashboard')

@section('page-heading', 'Selamat Datang di Hewanesia')
@section('content')
    <div class="container">
        <div class="col-12">
            <div class="card p-5">
                <h1>Apa Itu Hewanesia?</h1>
                <h6 class="fw-normal fs-5"><b>Hewanesia</b> adalah platform adopsi hewan yang bertujuan untuk menyelamatkan
                    nyawa
                    hewan peliharaan dengan memberikan mereka kesempatan untuk menemukan rumah yang penuh kasih sayang.
                    Website ini menghubungkan orang-orang yang ingin mengadopsi hewan dengan tempat penampungan hewan dan
                    organisasi penyelamatan di seluruh Indonesia.</h6>
                <br>
                <h6 class="fw-normal fs-5">Selain itu, <b>Hewanesia</b> juga dilengkapi dengan fitur laporan hewan terlantar,
                    yang
                    memungkinkan masyarakat untuk melaporkan hewan yang membutuhkan perhatian atau pertolongan. Fitur ini
                    memudahkan pengunjung untuk melaporkan hewan yang terlantar atau dalam bahaya, sehingga tim penyelamat
                    atau relawan dapat merespons dengan cepat dan memberi perlindungan atau tempat penampungan yang aman
                    bagi hewan tersebut.</h6>
            </div>

            <div class="col-12">
                <div class="card p-5">
                    <h1>Berkenalan Dengan Fitur Di Hewanesia</h1>
                    <div class="List pt-5">
                        <h5>Pencarian Hewan</h5>
                        <ul>
                            <li>Pengguna dapat mencari hewan berdasarkan jenis, usia, ukuran, dan lokasi.</li>
                            <li>Setiap hewan yang diadopsi dilengkapi dengan foto, deskripsi, dan informasi tentang
                                kesehatan serta kebutuhan perawatan.</li>
                        </ul>
                    </div>
                    <div class="List pt-5">
                        <h5>Fitur Laporan Hewan Terlantar</h5>
                        <ul>
                            <li>Pengunjung dapat melaporkan hewan yang ditemukan terlantar atau membutuhkan pertolongan
                                melalui formulir laporan</li>
                            <li>Laporan akan diteruskan ke tim penyelamatan atau relawan untuk tindak lanjut dan
                                perlindungan hewan.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card p-5">
                    <h1>Sosial Media dan Komunitas</h1>
                    <h5 class="fw-medium fs-5">Tautan ke akun sosial media Hewanesia untuk mengikuti update, berbagi kisah
                        adopsi, dan bergabung
                        dalam komunitas pecinta hewan.</h5>
                    <div class="d-flex justify-content-center ">
                        <div class="logo-social-media w-75 d-flex flex-col justify-content-evenly pt-4 align-items-center"
                            style="height: 5rem">
                            <a href="https://www.instagram.com/hanss.br/">
                                <h1 class="bi bi-instagram"></h1>
                            </a>
                            <a href="https://youtube.com/@hans-pk7iq?si=TWBximu0smTXx-Ei">
                                <h1 class="bi bi-youtube"></h1>
                            </a>
                            <a href="https://www.facebook.com/rayhan.iqbal.5439">
                                <h1 class="bi bi-facebook"></h1>
                            </a>
                            <a href="https://wa.me/qr/MAOCTRDTZ4FMH1">
                                <h1 class="bi bi-whatsapp"></h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        @endsection
