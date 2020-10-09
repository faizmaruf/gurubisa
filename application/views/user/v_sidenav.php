<div class="container-img-user">
    <img class="img-user" src="<?php echo base_url() . 'assets/images/user/' . $user["image_user"]; ?>">
    </img>
    <div class="nama-user mt-1">
        <?= $user['nama_user']; ?>
    </div>
</div>
<div class="sidenav border-info shadow-lg d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
    <div class="list-sidenav hvr-grow <?php if ($activesidenav == "Katalog Kelas") {
                                            echo "active";
                                        } ?>"> <a href="<?= site_url('user/home'); ?>"><span class="jam jam-ghost-org"></span> Katalog
            Kelas</a></div>
    <div class="list-sidenav hvr-grow <?php if ($activesidenav == "Kelas Saya") {
                                            echo "active";
                                        } ?>"> <a href="<?= site_url('user/kelassaya'); ?>"><span class="jam jam-ghost-org-square"></span> Kelas
            Saya</a></div>
    <div class="list-sidenav hvr-grow <?php if ($activesidenav == "Edit Profil") {
                                            echo "active";
                                        } ?>"> <a href="<?= site_url('user/edit'); ?>"><span class="jam jam-user-circle"></span> Edit
            Profil</a></div>
    <div class="list-sidenav hvr-grow hidden-keluar "> <a href="<?= site_url('user/home/logout'); ?>"><span class="jam jam-log-out"></span> Keluar</a>
    </div>
</div>