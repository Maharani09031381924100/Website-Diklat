@extends('layout/main')

@section('title', 'Layanan Diklat')

@section('container')
    <main>
            <ul class="sidebar">
                <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 100vh; position: fixed; align: left; background-color: #81C784; overflow-x: hidden;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <span class="fs-4">SELAMAT DATANG</span>
                    </a>       
                    <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                            <a href="/" class="nav-link link active" aria-current="page" style="background-color:#C5E1A5;">
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
                                <button class="dropdown-btn">Mahasiswa Praktik Klinik 
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    <a href="/laporan">Laporan Mahasiswa Praktik Klinis</a>
                                    <a href="/kues_kepuasan">Kuesioner Kepuasan Mahasiswa</a>
                                    <a href="/kues_eval_kinerja">Kuesioner Evaluasi Kinerja Dokter</a>
                                    <a href="/kues_eval_dokter">Kuesioner Evaluasi Dokter</a>
                                    <a href="/kues_eval_sarana">Kuesioner Evaluasi Penyelenggaraan Pendidikan</a>
                                </div>
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
    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                dropdownContent.style.display = "block";
                }
            });
        }    
    </script>
      


<div class="container" style= "margin: 0 auto; text-align: center;">
  <h1>HOME</h1>
</div>
@endsection
    
