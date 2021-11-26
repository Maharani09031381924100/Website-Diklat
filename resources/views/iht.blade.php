@extends('layout/main')

@section('title', 'Pelatihan IHT')

@section('container')
    <main>
        <ul class="sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 100vh; position: fixed; align: left; background-color: #81C784; overflow-x: hidden;">
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
                            <button class="dropdown-btn">Mahasiswa Praktik Klinik 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <a href="/laporan">Laporan Mahasiswa Praktik Klinis</a>
                                <a href="/kues_kepuasan">Kuesioner Kepuasan Mahasiswa</a>
                                <a href="/kues_eval_kinerja">Kuesioner Evaluasi Kinerja Dokter</a>
                                <a href="/kues_eval_dokter">Kuesioner Evaluasi Dokter</a>                                    <a href="/kues_eval_sarana">Kuesioner Evaluasi Penyelenggaraan Pendidikan</a>
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
    
    <div class="container">
        <h1>Isi Sementara Pelatihan IHT</h1>
        <table class="table table-sm"  style= "margin: 0 auto; text-align: left;">
            <thead class="table-light">
                <tr>
                    <th scope="col">Hari</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Peserta</th>
                    <th scope="col">Narasumber</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($iht as $iht)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $iht->waktu}}</td>
                    <td>{{ $iht->tempat}}</td>
                    <td>{{ $iht->peserta}}</td>
                    <td>{{ $iht->narasumber}}</td>
                    <td>
                        <a href="" class="badge bg-success">edit</a>
                        <a href="" class="badge bg-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
    
    