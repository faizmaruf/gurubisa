<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php
//var_dump($activesidenav);
// var_dump($is_done->result_array(['materi']));
// echo "<br>";
// foreach ($is_done as $s) :
//var_dump($is_done);
// endforeach;

// $i = 0;
// foreach ($is_done as $row) :
//     echo $is_done[$i]['id_materi'];
//     $i++;
// endforeach;
// var_dump($ac);
$kursusselesai = ($kursusselesai[0]);;

?>
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
                <div class="list-sidenav-kursus hvr-grow "> <a href="#"> Trailler kelas</a><span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;"></span>
                </div>
                <div class="ml-4 mb-3 font-weight-bold">Ayo Belajar</div>

                <?php foreach ($materi as $m) : ?>

                    <div class="list-sidenav-kursus hvr-grow <?php
                                                                if ($activesidenav == $m['id_materi']) {
                                                                    echo ' active-kursus';
                                                                }
                                                                ?> "><?php $i = 0; ?>
                        <a href="<?php echo site_url() . 'user/kursus' ?>?id_kelas=<?= $d['id_kelas'] ?>&id_user=<?= $user['id_user'] ?>&id_materi=<?= $m['id_materi']; ?>"> <?= $m['nama_materi']; ?></a> <?php foreach ($is_done as $row) {
                                                                                                                                                                                                                if ($is_done[$i] == $m['id_materi']) {
                                                                                                                                                                                                                    echo '<span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;"></span>';
                                                                                                                                                                                                                }
                                                                                                                                                                                                                $i++;
                                                                                                                                                                                                            }
                                                                                                                                                                                                            ?>
                    </div>
                    <?php $i++; ?>

                <?php endforeach; ?>
                <div class="ml-4 mb-3 font-weight-bold">Submission</div>
                <div class="list-sidenav-kursus hvr-grow "> <a href="<?= site_url('user/Submission'); ?>?id_kelas=<?= $d['id_kelas'] ?>&id_user=<?= $user['id_user'] ?>&id_materi=<?= $m['id_materi']; ?>">Selesaikan Submission</a> <?php
                                                                                                                                                                                                                                        if ($ceklistSubmission >= 60) {
                                                                                                                                                                                                                                            echo '<span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;"></span>';
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                        ?>
                </div>
                <div class="ml-4 mb-3 font-weight-bold">Modul</div>
                <div class="list-sidenav-kursus hvr-grow "> <a href="<?= base_url('assets/modul/'); ?>Microsoft Office Dasar.pdf" download> Download Modul</a>
                </div>
            </div>

            <!-- <span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;">jika materi sudah ditandai atau diselesaikan </span>
                    active-kursus jika side_navbar active atau jika id_materi sama id_materi
        -->



            <?php $id_materi = $activesidenav; ?>

            <!-- Page content -->
            <div class="main-kursus">
                <div class="container">

                    <div class="judul-atas">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="judul-atas">
                        <?= $d['nama_kelas']; ?>
                    </div>
                    <div class="judul-des mt-1">
                        6 materi tersedia - <?= $d['nama_mentor']; ?>
                    </div>

                </div>
                <div class="container d-flex flex-column">
                    <div class="content-video m-auto">
                        <!-- ?autoplay=1&rel=0&modestbranding=1&showinfo=0
    -->
                        <iframe class="iframesize" src="<?= $video_materi; ?>?autoplay=1&rel=0&modestbranding=1&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allow="autoplay"></iframe>
                    </div>
                    <div class="d-flex justify-content-end">
                        <!-- <div>

                            <a href="<?php echo site_url() . 'user/kursus/nextvideo' ?>?id_kelas=<?= $d['id_kelas'] ?>&id_user=<?= $user['id_user'] ?>&id_materi=<?= $id_materi - 1; ?>" class="btn btn-outline-primary mr-2 hvr-grow">Kembali</a>
                        </div> -->

                        <?php if (($kursusselesai >= 6) && ($ceklistSubmission >= 60)) { ?>
                            <a href="<?php echo site_url() . 'user/sertifikat' ?>?nama_kelas=<?= $d['nama_kelas'] ?>&nama_user=<?= $user['nama_user'] ?>&email_user=<?= $user['email_user'] ?>" class="mt-3 btn btn-primary hvr-grow btn-cetak">Cetak Sertifikat</a>
                        <?php } ?>

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