<?php

$conn = mysqli_connect("localhost", "root", "", "db_gurubisa");
function base_url()
{
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
    );
}
$namakelas = $_GET["keyword"];
$query = "SELECT * FROM kelas WHERE nama_kelas LIKE '%$namakelas%'";
$result = mysqli_query($conn, $query);
$kelas = mysqli_fetch_all($result);
$url = "http://127.0.0.1/Gurubisa/";
// var_dump($url);
// die;
?>


<div class="row " id="container">
    <?php $i = 0; ?>

    <?php foreach ($kelas as $kls) : ?>

        <div class="col-md d-flex justify-content-center ">
            <div class="card card-kelas m-3 hvr-grow ">
                <div class="card-kelas-img "><img src="<?php echo $url . '/assets/images/gambarkelas/' . $kls[3]; ?>" alt="imagescardkelas" class="img-card"></div>
                <div class="card-kelas-deskripsi">
                    <div class="row width100 mt-2">
                        <div class="col text-gurubisa-kelas">GuruBisa Kelas</div>
                        <div class="col text-durasi-belajar">8h 17min</div>
                    </div>
                    <div class="row width100 mt-3">
                        <div class="col nama-kelas">
                            <?= ($kls[1]); ?>
                        </div>
                    </div>
                    <div class="row width100 mt-4">
                        <a href="<?php echo site_url() . 'detail' ?>?id_kelas=<?= $d['id_kelas'] ?>&nama_kelas=<?= $d['nama_kelas'] ?>&deskripsi_kelas=<?= $d['deskripsi_kelas'] ?>&image_kelas=<?= $d['image_kelas'] ?>&video_kelas=<?= $d['video_kelas'] ?>&id_mentor=<?= $d['id_mentor'] ?> &nama_mentor=<?= $d['nama_mentor'] ?> &mentor_image=<?= $d['mentor_image'] ?> &profesi_mentor=<?= $d['profesi_mentor'] ?>" class="col daftar-sekarang">Daftar Sekarang &nbsp;
                            &nbsp;
                            <i class="fa fa-long-arrow-right" style="color: #635DFF; opacity: 76%; font-weight: lighter;"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php $i++ ?>
    <?php endforeach; ?>
</div>


<!-- <?php $max = sizeof($kelas); ?>
<?php var_dump($max); ?>
<div class="row " id="container">
    <?php for ($i = 0; $i < count($kelas); $i++) : ?>
        <div class="col-md d-flex justify-content-center " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="700">
            <div class="card card-kelas m-3 hvr-grow ">
                <div class="card-kelas-img "><img src="<?php echo base_url() . '/assets/images/gambarkelas/' . $kelas[$i][3]; ?>" alt="imagescardkelas" class="img-card"></div>
                <div class="card-kelas-deskripsi">
                    <div class="row width100 mt-2">
                        <div class="col text-gurubisa-kelas">GuruBisa Kelas</div>
                        <div class="col text-durasi-belajar">8h 17min</div>
                    </div>
                    <div class="row width100 mt-3">
                        <div class="col nama-kelas"><?= $d['1'] ?></div>
                    </div>
                    <div class="row width100 mt-4">
                        <a href="<?php echo site_url() . 'detail' ?>?id_kelas=<?= $d['id_kelas'] ?>&nama_kelas=<?= $d['nama_kelas'] ?>&deskripsi_kelas=<?= $d['deskripsi_kelas'] ?>&image_kelas=<?= $d['image_kelas'] ?>&video_kelas=<?= $d['video_kelas'] ?>&id_mentor=<?= $d['id_mentor'] ?> &nama_mentor=<?= $d['nama_mentor'] ?> &mentor_image=<?= $d['mentor_image'] ?> &profesi_mentor=<?= $d['profesi_mentor'] ?>" class="col daftar-sekarang">Daftar Sekarang &nbsp;
                            &nbsp;
                            <i class="fa fa-long-arrow-right" style="color: #635DFF; opacity: 76%; font-weight: lighter;"></i></a>
                    </div>
                </div>
            </div>
        </div>


    <?php endfor; ?>
</div> -->