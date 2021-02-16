<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php

$kursusselesai = ($kursusselesai[0]);

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
                <div class="list-sidenav-kursus hvr-grow "> <a href="<?= site_url('user/Submission'); ?>?id_kelas=<?= $d['id_kelas'] ?>">Selesaikan Submission</a>
                </div>
                <div class="ml-4 mb-3 font-weight-bold">Modul</div>
                <div class="list-sidenav-kursus hvr-grow "> <a href="<?= base_url('assets/modul/'); ?>Strategi Pembelajaran Daring.pdf" download> Download Modul</a>
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
                        Submission
                    </div>
                    <div class="judul-des mt-1">
                        Terdapat beberapa soal di kelas <?= $d['nama_kelas']; ?> dengan menyelesaikan semua video materi& minimal nilai 75% anda bisa Mendapatkan sertifikat.
                        <br>Nama Mentor : <?= $d['nama_mentor']; ?>
                    </div>

                </div>
                <div class="container d-flex flex-column">
                    <form action="<?= site_url('user/submission/nilaiSubmission'); ?>" method="post" enctype="multipart/form-data">
                        <?php $idkelas = ($data[0]["id_kelas"]); ?>
                        <?php $iddaftar = $idDaftar; ?>
                        <input type="hidden" name="id_kelas" value="<?= $idkelas; ?>">
                        <input type="hidden" name="id_daftar" value="<?= $iddaftar; ?>">
                        <?php $no = 1;
                        $index = 0; ?>
                        <?php foreach ($soal as $s) : ?>
                            <div class="container mt-3">
                                <div class="d-flex">
                                    <div class="d-flex "><?= $no; ?>. </div>
                                    <?php $no++; ?>
                                    <div class="d-flex w-100 flex-column">
                                        <div class="d-flex container"><?= $s['soal']; ?></div>
                                        <div class="d-flex container">
                                            <div class="d-flex w-100 flex-column">
                                                <div class="d-block">a. <input type="radio" value="a" name="jawaban[0][<?= $index; ?>]" required> <?= $s['jawab_a']; ?></div>
                                                <div class="d-block">b. <input type="radio" value="b" name="jawaban[0][<?= $index; ?>]" required> <?= $s['jawab_b']; ?></div>
                                                <div class="d-block">c. <input type="radio" value="c" name="jawaban[0][<?= $index; ?>]" required> <?= $s['jawab_c']; ?></div>
                                                <div class="d-block">d. <input type="radio" value="d" name="jawaban[0][<?= $index; ?>]" required> <?= $s['jawab_d']; ?></div>
                                            </div>
                                            <?php $index++; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="mt-3 mb-3 d-flex">
                            <button type="submit" name="submit" class="button-primary-daftar hvr-grow">Kirim Jawaban</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-end">
                        <!-- <div>

                            <a href="<?php echo site_url() . 'user/kursus/nextvideo' ?>?id_kelas=<?= $d['id_kelas'] ?>&id_user=<?= $user['id_user'] ?>&id_materi=<?= $id_materi - 1; ?>" class="btn btn-outline-primary mr-2 hvr-grow">Kembali</a>
                        </div> -->

                        <?php if ($kursusselesai < 6) { ?>
                            <!-- <a href="<?php echo site_url() . 'user/kursus' ?>?id_kelas=<?= $d['id_kelas'] ?>&id_user=<?= $user['id_user'] ?>&id_materi=<?= $id_materi + 1; ?>" class="btn btn-primary hvr-grow">Materi Selanjutnya</a> -->
                        <?php } else { ?>
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