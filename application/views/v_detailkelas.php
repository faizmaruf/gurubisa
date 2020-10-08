<!-- <?php
        $id_kelas = $_GET['id_kelas'];
        $nama_kelas = $_GET['nama_kelas'];
        $deskripsi_kelas = $_GET['deskripsi_kelas'];
        $image_kelas = $_GET['image_kelas'];
        $video_kelas = $_GET['video_kelas'];
        $id_mentor = $_GET['id_mentor'];
        $nama_mentor = $_GET['nama_mentor'];
        $mentor_image = $_GET['mentor_image'];
        $profesi_mentor = $_GET['profesi_mentor'];
        ?> -->




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head -->
    <?php $this->load->view('v_head'); ?>
</head>

<body>
    <header>
        <!-- navbar -->
        <?php $this->load->view('v_navbar'); ?>
    </header>


    <div class="container d-flex mt-5" data-aos="fade-up" data-aos-duration="3000">
        <div class="container-laptop">
            <div class="laptop">
                <iframe class="iframesize" src="https://www.youtube.com/embed/ke4W0FWRvi4?autoplay=1&rel=0&modestbranding=1&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allow="autoplay"></iframe>
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
                                <img src="images/ben-mullins-je240KkJIuA-unsplash.jpg" alt="" width="100%" height="100%" class="rounded-circle">
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
                        <li>30+ Online Kelas</li>
                        <li>Expert Intruction</li>
                        <li>Unlimited Akses</li>
                        <li>Submission</li>
                        <li>Gratis</li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="" class=" button-primary-gb m-auto hvr-grow">
                        Ikuti Kelas
                    </a>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container-gb  footer">
            <div class="container d-flex flex-column">
                <divc class="m-auto pt-3">gurubisa@unsri.com | 002-010-66269735</divc>
                <div class="m-auto p-2">
                    <span>
                        <i class="fa fa-facebook mr-4" style="font-size:16px;"></i>
                        <i class="fa fa-linkedin mr-4" style="font-size:16px;"></i>
                        <i class="fa fa-twitter" style="font-size:16px;"></i>
                    </span>
                </div>
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