<?php
// var_dump($persentase);
// die;
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
                <?= $this->session->flashdata('message'); ?>



                <div class="container mb-6">
                    <div class="judul-atas">
                        Progres Belajar Saya
                    </div>
                    <div class="judul-des">
                        Memulai semua kelas
                    </div>
                    <?php $i = 0; ?>
                    <?php foreach ($data as $d) : ?>

                        <div class="container-progres" data-aos="fade-up" data-aos-duration="1000">
                            <div class="img-progres">
                                <img src="<?php echo base_url() . '/assets/images/gambarkelas/' . $d["image_kelas"]; ?>" alt="images progres-bar" width="100%">
                            </div>
                            <div class="kelas-progres">
                                <a href=""><?= $d['nama_kelas'] ?></a>
                            </div>
                            <div class="progres-bar">
                                <div class="w3-light-grey w3-round" onload="move()">
                                    <?php if ($jumMateriSelesai[$i] != 0) { ?>
                                        <div id="myBar" class="w3-container w3-blue w3-round" style="width:<?= $persentase[$i]; ?>%"><?= $persentase[$i]; ?></div>
                                    <?php } ?>
                                </div>

                                <div class="judul-des mt-2">
                                    <?= $jumMateriSelesai[$i]; ?> dari 6 materi telah selesai
                                </div>
                            </div>
                            <div class="play-button-progres">
                                <a href="<?php echo site_url() . 'user/kursus' ?>?id_kelas=<?= $d['id_kelas'] ?>&id_user=<?= $user['id_user'] ?>">
                                    <img src="<?= base_url('assets/images/play-button.png'); ?>" alt="play-button" width="90%" class="hvr-grow"></a>
                            </div>
                        </div>

                        <?php $i++; ?>

                    <?php endforeach; ?>
                    <div class="judul-atas">
                        Kelas Saya
                    </div>
                    <div class="judul-des mt-1">
                        kelas tersedia
                    </div>
                    <div class="container mtb-7">
                        <div class="row " id="container">
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
                                                <div class="col daftar-sekarang "> &nbsp;Akses Selamanya &nbsp;<span class="jam jam-infinite"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>


    <script>
        function move() {
            alert('makan bang');
            var elem = document.getElementById("myBar");
            var width = 0;
            var widthg = elem.innerHTML;
            console.log(widthg);


            var id = setInterval(frame, 30);

            function frame() {
                if (width >= widthg) {
                    clearInterval(id);
                } else {
                    width++;
                    elem.style.width = width + '%';
                    elem.innerHTML = width * 1 + '%';
                }
            }
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/jam-icons/js/jam.min.js"></script>
</body>

</html>