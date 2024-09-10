@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <h4 class="text-center mb-4">Dashboard Admin</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Kelola Pengguna
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/buku">
                                Kelola Buku
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Kelola Peminjaman
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Lihat Laporan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Admin</h1>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card border-primary shadow-sm">
                            <div class="card-header bg-primary text-white">
                                Total Pengguna
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Pengguna: <span id="total-users">0</span></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card border-success shadow-sm">
                            <div class="card-header bg-success text-white">
                                Total Buku
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Buku: <span id="total-books">0</span></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card border-danger shadow-sm">
                            <div class="card-header bg-danger text-white">
                                Total Peminjaman
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Jumlah Peminjaman: <span id="total-loans">0</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
