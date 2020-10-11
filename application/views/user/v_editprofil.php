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
        <div class="main d-flex flex-column">
            <?= $this->session->flashdata('message'); ?>
            <div class="container">
                <div class="judul-atas">
                    Edit Profil
                </div>
                <div class="judul-des mt-1">
                    Berikan Informasi Yang Valid
                </div>
            </div>
            <div class="continer m-auto">
                <div class="row container-formulir">
                    <div class="col-lg-6 shadow pl-5 pr-5" data-aos="zoom-out-right" data-aos-duration="1200">
                        <div class="d-flex flex-column ">
                            <div class="pl-3"><img src="<?= base_url('assets/'); ?>images/iconhuman.png" alt="iconhuman" width="10%"></div>
                            <div class="text-registrasi">Edit Akun Profil GuruBisa</div>
                            <div class="text-buatakun">Edit Profil Akun</div>
                        </div>
                        <form action="<?= site_url('user/edit/update'); ?>" method="post" enctype="multipart/form-data">
                            <div>
                                <label for="nama"></label>
                                <input type="text" class="form-control" name="xname" placeholder="Nama Lengkap" id="nama" value="<?= $user['nama_user']; ?>">
                                <input type="hidden" name="xid" value="<?= $user['id_user']; ?>" />
                            </div>
                            <div>
                                <label for="email"></label>
                                <input type="email" class="form-control" name="xemail" placeholder="Alamat Email" id="email" value="<?= $user['email_user']; ?>">
                            </div>
                            <div>
                                <label for="nuptk"></label>
                                <input type="text" class="form-control" name="xnuptk" placeholder="NUPTK" id="nuptk" value="<?= $user['nuptk_user']; ?>">
                            </div>
                            <div>
                                <label for="jeniskelamin"></label>
                                <select class="form-control" id="jeniskelamin" name="xjeniskelamin" placeholder="Jenis Kelamin">

                                    <option disabled selected>Pilih Jenis Kelamin</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label for="image-user"></label>
                                <span class="form-control">Pilih Foto Profil</span>
                                <input type="file" class="form-control" name="ximguser" id="image-user">
                            </div>
                            <div class="mt-3 d-flex mb-3">
                                <button type="submit" class="button-primary-daftar hvr-grow">Simpan Profil</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-6" data-aos="zoom-out-left" data-aos-duration="1200">
                        <img src="<?= base_url('assets/'); ?>images/ben-mullins-je240KkJIuA-unsplash.jpg" alt="" width="100%" height="100%">
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