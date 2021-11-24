@extends('layout/main')

@section('title', 'Pelatihan IHT')

@section('container')
    <main>
        <ul class="sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 100vh; position: fixed; align: left; background-color: #81C784;">
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
                        <li class="nav-item">
                        <a href="/iht" class="nav-link link active" aria-current="page" style="background-color:#C5E1A5;">
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
                        <li>
                        <a href="/tna" class="nav-link link-dark">
                            TNA
                        </a>
                        </li>
                    </ul>
                <hr>
            </div>
        </ul>
    </main>
    
    <div class="container" style= "margin: 0 auto; text-align: center;">
      <h1>Isi Sementara Pelatihan IHT</h1>
    </div>
    @endsection
    
    