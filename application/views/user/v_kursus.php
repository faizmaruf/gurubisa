<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

</head>

<body>
    <div class="container-dashboard">
        <!-- User image -->
        <div class="container-kembali">

            <div class=" mt-1">
                <a class="kembali hvr-grow" href="index.html"><span class="jam jam-arrow-circle-left pt-4" style=" font-size: large;"></span> Kembali ke home</a>
            </div>
        </div>


        <!-- Side navigation -->
        <div class="sidenav-kursus border-info shadow-lg d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
            <div class="ml-4 mb-3 font-weight-bold">Persiapan</div>
            <div class="list-sidenav-kursus hvr-grow "> <a href="#"> Trailler kelas</a> <span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;"></span>
            </div>
            <div class="ml-4 mb-3 font-weight-bold">Ayo Belajar</div>
            <div class="list-sidenav-kursus hvr-grow"> <a href="#" class=""> HELLO WORLD</a> <span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;"></span>
            </div>
            <div class="list-sidenav-kursus hvr-grow"> <a href="#" class=""> HELLO WORLD</a> <span class="jam jam-check pt-4" style="color: #3c4b66; font-size: large;"></span>
            </div>
            <div class="list-sidenav-kursus hvr-grow active-kursus"> <a href="#" class=""> HELLO WORLD</a> </div>
            <div class="list-sidenav-kursus hvr-grow"> <a href="#" class=""> HELLO WORLD</a> </div>
            <div class="list-sidenav-kursus hvr-grow"> <a href="#" class=""> HELLO WORLD</a> </div>
        </div>



        <!-- Page content -->
        <div class="main-kursus">
            <div class="container">
                <div class="judul-atas">
                    Katalog Kelas
                </div>
                <div class="judul-des mt-1">
                    6 kelas tersedia
                </div>

            </div>
            <div class="container d-flex flex-column">
                <div class="content-video m-auto">
                    <!-- ?autoplay=1&rel=0&modestbranding=1&showinfo=0
    -->
                    <iframe class="iframesize" src="https://www.youtube.com/embed/zHXH_NjygFk?autoplay=1&rel=0&modestbranding=1&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allow="autoplay"></iframe>
                </div>
                <div class="d-flex justify-content-end" data-aos="zoom-out" data-aos-duration="1000">
                    <div>
                        <a href="#" class="btn btn-outline-primary mr-2 hvr-grow">Kembali</a>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary hvr-grow">Tandai Selesai & Next Video</a>
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