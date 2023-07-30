<?php
    include "koneksi";
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tentang OTKP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        
        <style>
            body{
                background-color: rgb(205, 219, 255);

            }  
            section{
                padding-top: 3rem;
            }
            .carousel-item {
            height: 100vh;
            min-height: 300px;
            }
            .carousel-caption {
                bottom: 220px;
                z-index: 2;
            }
            .carousel-caption h5 {
                font-size: 45px;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin-top: 25px;
            }
            .carousel-caption p {
                width: 60%;
                margin: auto;
                font-size: 18px;
                line-height: 1.9;
            }
            .carousel-inner:before {
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.7);
                z-index: 1;
            }

            .about{
                padding-top: 5rem;
            }
            .oi{
            padding-left: 10rem;
            margin-bottom: -3%;
            }
            .anuu:hover{
            
            cursor: pointer;
            transition: all 0.3 ease;
            -webkit-transform: scale(1.1);
            -moz-transition: scale(1.1);
            transform: scale(1.1);
            z-index: 2;
            }
            .kartu{
            padding-top: 7rem;
            }
            .gambar{
            width: 3rem;
            }
            .yowlo{
            padding-bottom: 3rem;
            margin-right: 2rem;
            padding-left: 27rem;
            }
        </style>

    </head>
    <body>

        <!--Awal Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
            <div class="container">
            <a class="navbar-brand text-white" href="#"><img src="sme.png" alt="" class="gambar">SMK Negeri 1 Purwokerto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#carouselExampleControls">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#kartu">Profil</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#kontak">Instagram</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!--End Navpar--> 
        
        <!--Awal Slide-->
        <section>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="SMK.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>SMK NEGERI 1 PURWOKERTO</h5>
                        <p>Terwujudnya SMK Negeri 1 Purwokerto yang religius, modern, profesional dan berwawasan lingkungan</p>
                        <p><a class="btn btn-warning mt-3" href="https://smkn1purwokerto.sch.id/">Lihat selengkapnya</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="WOO.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                    <h5>Otomatisasi & Tata kelola Perkantoran</h5>
                    <p>SMK Negeri 1 Purwokerto memiliki banyak jurusan salah satunya jurusan OTKP yang mempelajari tentang administrasi perkantoran</p>
                    <p><a class="btn btn-warning mt-3" href="#about">Lihat selengkapnya</a></p>
                </div>
                </div>
                <div class="carousel-item">
                    <img src="Team.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                    <h5>Our Team</h5>
                    <p>Website ini dibuat dan dikembangkan oleh Alya Amanda Bagas Naufal <br>
                    dari jurusan RPL yaitu kelas XI RPL</p>
                    <p><a class="btn btn-warning mt-3" href="#kontak">Lihat selengkapnya</a></p>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--end slide-->

        <!--Halaman utama-->
        <section class="about section-padding" id="about" style="padding-top: 10rem;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="about-img"><img alt="" class="img-fluid" src="profil.png"></div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                        <div class="about-text">
                            <h2>Otomomatisasi Tata Kelola Perkantoran</h2>
                            <p>Otomatisasi dan Tata Kelola Perkantoran (OTKP) di SMKN 1 Purwokerto merupakan salah satu program keahlian dalam kelompok bisnis dan manajemen yang bertujuan untuk melakukan pengelolaan administrasi perkantoran yang bersifat detail tidak terbatas kepada fungsi administrasi sehari-hari dengan mengacu kepada keterkaitan prosedur administrasi di organisasi.</p>
                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End halaman utama-->
        <!--Awal Card-->
        <div class="kartu" style="padding-bottom: 10rem;" id="kartu">
        <div class="row" >
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <h1 >About OTKP</h1>
                            <p style="font-size: 20px;">Jurusan Otomatisasi dan Tata Kelola Perkantoran mempelajari segala jenis kegiatan kantor.<br>
                Mulai dari pembukuan, pengarsipan, hingga public relations.</p>
                        </div>
                    </div>
                </div>
        <div class="row oi" >
        
            <div class="col-12 col-md-4 col-lg-4 anuu">
                <div class="card text-white text-center bg-dark pb-2" style="width: 18rem;">
                    <div class="card-body">
                    <i class="bi bi-people-fill" style="font-size: 100px;"></i>
                    <h5 class="card-title">Profil Guru</h5>
                    <p class="card-text">Dalam jurusan Otomatisasi & Tata Kelola Perkantoran kita ada 11 guru yang mengajar di jurusan tersebut</p>
                    <p><a class="btn btn-warning mt-3" href="Guru/guru.html">Lihat selengkapnya</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 anuu">
                <div class="card text-white text-center bg-dark pb-2" style="width: 18rem;">
                    <div class="card-body">
                    <i class="bi bi-trophy-fill text-white" style="font-size: 100px;"></i>
                    <h5 class="card-title">Skill & Prestasi</h5>
                    <p class="card-text">Skill dan hasil yang diraih Otomatisasi & Tata Kelola Perkantoran </p>
                    <p><a class="btn btn-warning mt-3" href="skill/skill.html">Lihat selengkapnya</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 anuu">
                <div class="card text-white text-center bg-dark pb-2" style="width: 18rem;">
                    <div class="card-body">
                    <i class="bi bi-building text-white" style="font-size: 100px;"></i>
                    <h5 class="card-title">Contoh Pekerjaan</h5>
                    <p class="card-text">Pekerjaan yang sesuai untuk lulusan dari jurusan Otomatisasi & Tata Kelola Perkantoran</p>
                    <p><a class="btn btn-warning mt-3" href="kerjaan/kerjaan.html">Lihat selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--end card-->
        
        <!--bagian ig-->
        <center><h3>Instagram Kita</h3>
        <p> </p></center>
        <div class="btn-toolbar yowlo" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group" id="kontak">
            <a href="https://www.instagram.com/yyalya._/"><button type="button" class="btn btn-dark" style="margin-right: 1rem;"><i class="bi bi-instagram"></i> Alya Mutia Zahra</button></a>
            <a href="https://www.instagram.com/bgs.fxn_/"><button type="button" class="btn btn-dark" style="margin-right: 1rem;"><i class="bi bi-instagram"></i> Bagas Alfanto</button></a>
            <a href="https://www.instagram.com/naufalhaidarazh/"><button type="button" class="btn btn-dark" style="margin-right: 1rem;"><i class="bi bi-instagram"></i> Naufal Haidar</button></a>
            <a href="https://www.instagram.com/amnd.nas/"><button type="button" class="btn btn-dark"><i class="bi bi-instagram"></i> Amanda Nora</button></a>
        </div>
        </div>
        <!--end ig-->

        <!-- footer starts -->
        <footer class="bg-dark p-2 text-center">
            <div class="container">
            <p class="text-white">Website create by alya bagas naufal amanda</p>
            </div>
        </footer>
        <!-- footer ends -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>
