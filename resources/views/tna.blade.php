@extends('layout/main')
@section('title', 'TNA')
<main>
        <ul class="sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh; position: fixed; align: left;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <span class="fs-4">SELAMAT DATANG</span>
                </a>       
                <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                        <a href="/" class="nav-link link-dark">
                            Home
                        </a>
                        </li>
                        <li>
                        <a href="/iht" class="nav-link link-dark">
                            Pelatihan IHT
                        </a>
                        </li>
                        <li>
                        <a href="/jpl" class="nav-link link-dark">
                            JPL
                        </a>
                        </li>
                        <li>
                        <a href="/mahasiswa" class="nav-link link-dark">
                            Mahasiswa Praktik Klinik
                        </a>
                        </li>
                        <li>
                        <a href="/orientasi" class="nav-link link-dark">
                            Orientasi Pegawai
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="/tna" class="nav-link link active" aria-current="page">
                            TNA
                        </a>
                        </li>
                    </ul>
                <hr>
            </div>
        </ul>
</main>
    
    @section('container')
    <div class="container" style= "margin: 0 auto; text-align: center;">
      <h1>Isi Sementara TNA</h1>
    </div>
    @endsection
    
    