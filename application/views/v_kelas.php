<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view('v_head'); ?>


<body>
    <header>
        <!-- navbar -->
        <?php $this->load->view('v_navbar'); ?>
    </header>
    </header>




    <div class="container mtb-7">
        <div class="row">
            <div class="col text-rekomendasi">Kelas di <Span class="text-rekomendasi-bold">GuruBisa</Span></div>
            <div class="col">
                <div class="btn d-flex justify-content-end">
                    <div class="search-box">
                        <input type="text" placeholder=" " id="keyword"><span></span>
                    </div>
                </div>
            </div>
        </div>
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
                                <a href="<?php echo site_url() . 'detail' ?>?id_kelas=<?= $d['id_kelas'] ?>&nama_kelas=<?= $d['nama_kelas'] ?>&deskripsi_kelas=<?= $d['deskripsi_kelas'] ?>&image_kelas=<?= $d['image_kelas'] ?>&video_kelas=<?= $d['video_kelas'] ?>&id_mentor=<?= $d['id_mentor'] ?> &nama_mentor=<?= $d['nama_mentor'] ?> &mentor_image=<?= $d['mentor_image'] ?> &profesi_mentor=<?= $d['profesi_mentor'] ?>" class="col daftar-sekarang">Daftar Sekarang &nbsp;
                                    &nbsp;
                                    <i class="fa fa-long-arrow-right" style="color: #635DFF; opacity: 76%; font-weight: lighter;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endforeach; ?>
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





    <!-- <script src="<?php echo base_url() ?>assets/js/custom.js"></script> -->
    <!-- <script src="Gurubisa/assets/js/custom.js"></script> -->
    <!-- <script src="<?= base_url('assets/js/custom.js'); ?>"></script> -->
    <!-- <script src="js/bootstrap.js"></script> -->
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