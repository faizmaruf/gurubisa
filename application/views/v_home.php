<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view('v_head'); ?>


<body>
    <header>
        <!-- navbar -->
        <?php $this->load->view('v_navbar'); ?>
    </header>

    <div class="container-gb">
        <div class="hero-gb">
            <div class="hero-content-gb">
                <div class="container-hero-gb">
                    <div class="jumbotron-gb" data-aos="fade-up" data-aos-duration="1000">
                        <div class="judul">GuruBisa</div>
                        <div class="tagline">For <span class="tagline-orange">Teacher</span></div>
                        <div class="deskripsi-judul">nikmati akses kelas selamanaya di GuruBisa menjadi tenaga
                            pendidik yang berkompetensi <br>dan up to date.</div>
                        <div class="btn-gb"><a href="#" class="button-primary-gb hvr-grow">Daftar</a></div>
                    </div>
                </div>
                <div class="img-hero-container">
                    <div class="img-hero" data-aos="fade-left" data-aos-duration="1000"><img src="<?= base_url('assets/images/teacher.jpg'); ?>" alt="images" class="img-teacher"></div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mtb-6">
        <div class="row">
            <div class="col text-rekomendasi">Rekomendasi <Span class="text-rekomendasi-bold">Kelas</Span></div>
            <div class="col">
                <div class="btn d-flex justify-content-end"><a href="#" class="button-lebih-banyak hvr-grow">Lihat Lebih
                        Banyak</a></div>
            </div>
        </div>
        <div class="row">

            <?php foreach ($data as $d) : ?>

                <div class="col-md d-flex justify-content-center " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="700">
                    <div class="card card-kelas m-3 hvr-grow ">
                        <div class="card-kelas-img "><img src="<?php echo base_url() . '/assets/images/gambarkelas/' . $d["image_kelas"]; ?>" alt="imagescardkelas" class="img-card"></div>
                        <div class="card-kelas-deskripsi">
                            <div class="row width100 mt-2">
                                <div class="col text-gurubisa-kelas">GuruBisa Kelas</div>
                                <div class="col text-durasi-belajar">8h 17min</div>
                            </div>
                            <div class="row width100 mt-3">
                                <div class="col nama-kelas"><?= $d['nama_kelas'] ?></div>
                            </div>
                            <div class="row width100 mt-4">
                                <a href="#" class="col daftar-sekarang">Daftar Sekarang &nbsp;
                                    &nbsp;
                                    <i class="fa fa-long-arrow-right" style="color: #635DFF; opacity: 76%; font-weight: lighter;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endforeach; ?>

        </div>
    </div>
    <div class="containerkeunggulan">
        <div class="container-keunggulan1" data-aos="fade-right" data-aos-duration="1500"><img src="<?= base_url('assets/'); ?>images/cx-insight-YloghyfD7e8-unsplash.jpg" alt="" class="img-keunggulan"></div>
        <div class="container-keunggulan2">
            <div class="container-list">
                <div class="mengapa-harus">Mengapa Harus</div>
                <div class="memilih-kami">Memilih Kami</div>
                <div class="deskripsi-mengapa">Ada banyak materi yang sangat bermanfaat bagi tenaga pendidik baik
                    dibidang teknologi dan edukasi</div>
                <div class="list-keunggulan">
                    <ul>
                        <li>30+Online Kelas</li>
                        <li>Expert Intruction</li>
                        <li>Unlimited Akses</li>
                        <li>Submission</li>
                        <li>Gratis</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container p-3 " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1500"><img class="hvr-grow" src="<?= base_url('assets/'); ?>images/Video.png" alt="images/Video" width="100%"></div>
    </div>
    <div class="container">
        <div class="container">
            <div class="container d-flex  flex-column">
                <div class="container-cta p-3">
                    <div>Mari Gabung Berasama GuruBisa</div>
                    <div class="font-weight-normal">Jadilah Tenaga Pendidik Yang Profesional</div>
                </div>
                <div class="d-flex m-auto p-2 " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="2500"><a href="user/index.html" class="button-primary-gb hvr-grow">Daftar</a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-gb  footer">
            <div class="container d-flex flex-column">
                <divc class="m-auto pt-3">gurubisa@unsri.com | 002-010-66269735</divc>
                <div class="m-auto p-2"><span><i class="fa fa-facebook mr-4" style="font-size:16px;"></i><i class="fa fa-linkedin mr-4" style="font-size:16px;"></i><i class="fa fa-twitter" style="font-size:16px;"></i></span></div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>