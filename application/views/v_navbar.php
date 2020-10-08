<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="logo-brand ml-2"><a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url('assets/'); ?>images/Logo GuruBisa/3.png" class="hvr-grow" alt="logo" width="100%"></a></div><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse float-right" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item hvr-grow mr-5 "><a class="nav-link <?php if ($activenavbar == "Home") {
                                                                        echo "active";
                                                                    } ?> " href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
            <li class="nav-item hvr-grow mr-5 "><a class="nav-link <?php if ($activenavbar == "Kelas") {
                                                                        echo "active";
                                                                    } ?>" href="<?= site_url('kelas'); ?>">Kelas</a></li>
            <li class="nav-item hvr-grow mr-5 "><a class="nav-link <?php if ($activenavbar == "Daftar") {
                                                                        echo "active";
                                                                    } ?>" href="<?= site_url('signup'); ?>">Daftar</a></li>
            <li class="nav-item hvr-grow "><a class="nav-link <?php if ($activenavbar == "Masuk") {
                                                                    echo "active";
                                                                } ?>" href="<?= site_url('signin'); ?>">Masuk</a></li>
        </ul>
    </div>
</nav>