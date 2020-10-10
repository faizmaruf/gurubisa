<!DOCTYPE html>
<html lang="en">

<!-- head -->

<?php $this->load->view('user/v_head'); ?>

<body>
    <div class="container-dashboard">
        <!-- User image -->
        <div class="container-kembali">

            <div class=" mt-1">
                <a class="kembali hvr-grow" href="<?= site_url('user/kelassaya'); ?>"><span class="jam jam-arrow-circle-left pt-4" style=" font-size: large;"></span> Kembali ke home</a>
            </div>
        </div>
        <?php foreach ($data as $d) : ?>


            <!-- Side navigation -->
            <div class="sidenav-kursus border-info shadow-lg d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">

                <div class="ml-4 mb-3 font-weight-bold">Persiapan</div>
                <div class="list-sidenav-kursus hvr-grow "> <a href="#"> Trailler kelas</a> <span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;"></span>
                </div>
                <div class="ml-4 mb-3 font-weight-bold">Ayo Belajar</div>
                <?php foreach ($materi as $m) : ?>

                    <div class="list-sidenav-kursus hvr-grow active-kursus"> <a href="<?php echo site_url() . 'user/kursus' ?>?id_kelas=<?= $d['id_kelas'] ?>&id_user=<?= $user['id_user'] ?>&id_materi=<?= $m['id_materi']; ?>"> <?= $m['nama_materi']; ?></a> </span>
                    </div>

                <?php endforeach; ?>
            </div>

            <!-- <span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;">jika materi sudah ditandai atau diselesaikan
                    active-kursus jika side_navbar active atau jika id_materi sama id_materi
        -->



            <?php $id_materi = $m['id_materi'] - 5; ?>

            <!-- Page content -->
            <div class="main-kursus">
                <div class="container">
                    <div class="judul-atas">
                        <?= $d['nama_kelas']; ?>
                    </div>
                    <div class="judul-des mt-1">
                        6 materi tersedia
                    </div>

                </div>
                <div class="container d-flex flex-column">
                    <div class="content-video m-auto">
                        <!-- ?autoplay=1&rel=0&modestbranding=1&showinfo=0
    -->
                        <iframe class="iframesize" src="https://www.youtube.com/embed/zHXH_NjygFk?autoplay=1&rel=0&modestbranding=1&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allow="autoplay"></iframe>
                    </div>
                    <div class="d-flex justify-content-end" data-aos="zoom-out" data-aos-duration="1000">
                        <div>

                            <a href="" class="btn btn-outline-primary mr-2 hvr-grow">Kembali</a>
                        </div>
                        <div>
                            <a href="<?php echo site_url() . 'user/kursus/nextvideo' ?>?id_kelas=<?= $d['id_kelas'] ?>&id_user=<?= $user['id_user'] ?>&id_materi=<?= $id_materi; ?>" class="btn btn-primary hvr-grow">Tandai Selesai & Next Video</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
    </div>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/jam-icons/js/jam.min.js"></script>
</body>

</html>