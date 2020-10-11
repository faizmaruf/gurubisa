<?php

$id_kelas = $data[0];
$nama_kelas = $data[1];
$deskripsi_kelas = $data[2];
$image_kelas = $data[3];
$video_kelas = $data[4];
$id_mentor = $data[5];
$nama_mentor = $data[6];
$mentor_image = $data[7];
$profesi_mentor = $data[8];



?>
<!DOCTYPE html>
<html lang="en">


<!-- head -->
<?php $this->load->view('user/v_head'); ?>

<body>
    <div class="container-dashboard">
        <!-- User image -->
        <!-- Dan -->

        <!-- Side navigation -->
        <?php $this->load->view('user/v_sidenav'); ?>



        <!-- Page content -->
        <div class="main">
            <div class="container">

                <div class="container d-flex mt-5" data-aos="fade-up" data-aos-duration="3000">
                    <div class="container-laptop">
                        <div class="laptop">
                            <iframe class="iframesize" src="<?= $video_kelas; ?>?autoplay=1&rel=0&modestbranding=1&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allow="autoplay"></iframe>
                            <div class="base"></div>
                        </div>
                    </div>
                </div>


                <div class="containerkeunggulan mtb-6">
                    <div class="container-keunggulan1 d-flex" style="background-color: #edeef3;" data-aos="fade-right" data-aos-duration="1500">
                        <div class="container m-auto d-flex flex-column">
                            <div class="text-mentor">Mentor Kelas</div>
                            <div class="col-md d-flex justify-content-center">
                                <div class="card card-mentor m-3">
                                    <div class="card-kelas-img">
                                        <div class="img-mentor">
                                            <img src="<?= base_url('assets/images/mentor/') . $mentor_image; ?>" alt="" width="100%" height="100%" class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="card-kelas-deskripsi">

                                        <div class="row width100 ">
                                            <div class="col nama-kelas text-center"><?= $nama_mentor; ?></div>
                                        </div>
                                        <div class="row width100 mt-2">
                                            <div class="col daftar-sekarang text-center"><?= $profesi_mentor; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-keunggulan2" data-aos="fade-left" data-aos-duration="1500">
                        <div class="container-list">
                            <div class="mengapa-harus">Kelas</div>
                            <div class="memilih-kami"><?= $nama_kelas; ?></div>
                            <div class="deskripsi-mengapa"><?= $deskripsi_kelas; ?></div>
                            <div class="list-keunggulan">
                                <ul>
                                    <?php foreach ($materi as $d) : ?>
                                        <li><?= $d['nama_materi'] ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="d-flex">
                                <a href="<?= site_url('user/Ambilkelas'); ?>?id_kelas=<?= $id_kelas ?>" class=" button-primary-gb m-auto hvr-grow">
                                    Ikuti Kelas
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/jam-icons/js/jam.min.js"></script>
</body>

</html>