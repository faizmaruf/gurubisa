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
            <?= $this->session->flashdata('message'); ?>

            <div class="container">


                <div class="judul-atas">
                    Katalog Kelas
                </div>
                <div class="judul-des mt-1">
                    6 kelas tersedia - Silahkan Ambil Kelas Microsoft Office Dasar
                </div>
                <div class="container mtb-7">
                    <div class="row " id="container">
                        <?php foreach ($data as $d) : ?>

                            <div class="col-md d-flex justify-content-center ">
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
                                            <a href="<?php echo site_url() . 'user/detail' ?>?id_kelas=<?= $d['id_kelas'] ?>&nama_kelas=<?= $d['nama_kelas'] ?>&deskripsi_kelas=<?= $d['deskripsi_kelas'] ?>&image_kelas=<?= $d['image_kelas'] ?>&video_kelas=<?= $d['video_kelas'] ?>&id_mentor=<?= $d['id_mentor'] ?> &nama_mentor=<?= $d['nama_mentor'] ?> &mentor_image=<?= $d['mentor_image'] ?> &profesi_mentor=<?= $d['profesi_mentor'] ?>" class="col daftar-sekarang">Daftar Sekarang &nbsp;
                                                &nbsp;
                                                <i class="fa fa-long-arrow-right" style="color: #635DFF; opacity: 76%; font-weight: lighter;"></i></a>
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



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/jam-icons/js/jam.min.js"></script>
</body>

</html>