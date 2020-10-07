<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="logo-brand ml-2"><a class="navbar-brand" href="index.html"><img src="<?= base_url('assets/'); ?>images/Logo GuruBisa/3.png" class="hvr-grow" alt="logo" width="100%"></a></div><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse float-right" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item hvr-grow mr-5 "><a class="nav-link <?php if ($activenavbar == "Home") {
                                                                        echo "active";
                                                                    } ?> " href="index.html">Home <span class="sr-only">(current)</span></a></li>
            <li class="nav-item hvr-grow mr-5 "><a class="nav-link <?php if ($activenavbar == "Kelas") {
                                                                        echo "active";
                                                                    } ?>" href="kelas.html">Kelas</a></li>
            <li class="nav-item hvr-grow mr-5 "><a class="nav-link <?php if ($activenavbar == "Daftar") {
                                                                        echo "active";
                                                                    } ?>" href="signup.html">Daftar</a></li>
            <li class="nav-item hvr-grow "><a class="nav-link <?php if ($activenavbar == "Masuk") {
                                                                    echo "active";
                                                                } ?>" href="signin.html">Masuk</a></li>
        </ul>
    </div>
</nav>