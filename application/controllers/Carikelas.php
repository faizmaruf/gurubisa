<?php

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
        $this->load->model('m_kelas');
    }
    public function index()
    {

        $conn = mysqli_connect("localhost", "root", "", "db_gurubisa");

        $namakelas = $_GET["keyword"];
        $query = "SELECT * FROM kelas WHERE nama_kelas LIKE '%$namakelas%'";
        $result = mysqli_query($conn, $query);

        $kelas = mysqli_fetch_all($result);
        var_dump(base_url());
?>

        <div class="row " id="container">
            <?php $max = sizeof($kelas); ?>
            <!-- <?php var_dump($max); ?> -->
            <?php for ($i = 0; $i < $max; $i++) : ?>
                <?php var_dump($kelas[$i][3]); ?>
                <div class="col-md d-flex justify-content-center " data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="700">
                    <div class="card card-kelas m-3 hvr-grow ">
                        <div class="card-kelas-img "><img src="<?php echo base_url() . '/assets/images/gambarkelas/' . $kelas[$i][3]; ?>" alt="imagescardkelas" class="img-card"></div>
                        <div class="card-kelas-deskripsi">
                            <div class="row width100 mt-2">
                                <div class="col text-gurubisa-kelas">GuruBisa Kelas</div>
                                <div class="col text-durasi-belajar">8h 17min</div>
                            </div>
                            <div class="row width100 mt-3">
                                <div class="col nama-kelas"><?= $kelas[$i][1]; ?></div>
                            </div>
                            <div class="row width100 mt-4">
                                <a href="<?php echo site_url() . 'detail' ?>?id_kelas=<?= $kelas['id_kelas'] ?>&nama_kelas=<?= $kelas['nama_kelas'] ?>&deskripsi_kelas=<?= $kelas['deskripsi_kelas'] ?>&image_kelas=<?= $kelas['image_kelas'] ?>&video_kelas=<?= $kelas['video_kelas'] ?>&id_mentor=<?= $kelas['id_mentor'] ?> &nama_mentor=<?= $kelas['nama_mentor'] ?> &mentor_image=<?= $kelas['mentor_image'] ?> &profesi_mentor=<?= $kelas['profesi_mentor'] ?>" class="col daftar-sekarang">Daftar Sekarang &nbsp;
                                    &nbsp;
                                    <i class="fa fa-long-arrow-right" style="color: #635DFF; opacity: 76%; font-weight: lighter;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endfor; ?>
        </div>
<?php }
} ?>