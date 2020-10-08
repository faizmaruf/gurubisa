<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php $this->load->view('v_head'); ?>

<body>
    <header>
        <!-- navbar -->
        <?php $this->load->view('v_navbar'); ?>
    </header>


    <div class="continer p-5  mt-3 mb-4">

        <div class="row container-formulir">
            <div class="col-lg-6 shadow pl-5 pr-5" data-aos="zoom-out-right" data-aos-duration="1200">
                <div class="d-flex flex-column">
                    <div class="pl-3"><img src="<?= base_url('assets/images/'); ?>iconhuman.png" alt="iconhuman" width="10%"></div>
                    <div class="text-registrasi">Masuk Akun GuruBisa</div>
                    <div class="text-buatakun">Akun GuruBisa </div>
                </div>
                <div>
                    <form action="/action_page.php">
                        <div class="mt-5">
                            <label for="email"></label>
                            <input type="email" class="form-control" name="email" placeholder="Alamat Email" id="email">
                        </div>
                        <div>
                            <label for="pwd"></label>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="pwd">
                        </div>

                        <div class="mt-3 mb-3 d-flex">
                            <button type="submit" class="button-primary-daftar hvr-grow">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-out-left" data-aos-duration="1200">
                <img src="<?= base_url('assets/'); ?>images/ben-mullins-je240KkJIuA-unsplash.jpg" alt="" width="100%">
            </div>
        </div>

    </div>


    <div class="pt-1"></div>

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





    <script src="js/custom.js"></script>
    <script src="js/bootstrap.js"></script>
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