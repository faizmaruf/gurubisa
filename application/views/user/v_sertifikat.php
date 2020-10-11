<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        display: flex;

        margin: 1em
            /* change the margins as you want them to be. */
    }

    @media print {
        .btn-primary {
            display: none;
        }


    }
</style>

<body>
    <table style="border: solid; margin:auto; width:900px" align="center">
        <tr>
            <td>
                <img src="<?= base_url('assets/images/sertifikat'); ?>/pj_at_kiri.png" alt="">
            </td>
            <td colspan="3" align="center">
                <img src="<?= base_url('assets/images/Logo GuruBisa/3.png'); ?>" alt="" style="width: 229px; height: 100px; margin-right: 75px; margin-left: 75px;">
            </td>
            <td>
                <img src="<?= base_url('assets/images/sertifikat'); ?>/pj_at_kanan.png" alt="" align="right">
            </td>
        </tr>
        <tr>
            <td colspan="5" style="margin: auto;" align="center">
                <h1 style="color: #6B8E23; font-size: 50px;">SERTIFIKAT KELULUSAN
                    <br>
                    <b style="font-size: 25px; color:black;">
                        diberikan kepada:
                    </b>
                </h1>
                <p style="font-size: 35px;">
                    <span style="border-bottom: solid; border-color: #6B8E23; border-width: 5px;">
                        <b><?= $nama_user; ?></b><br>
                    </span><br>
                    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 17PX;">
                        telah menyelesaikan <b style="color: #FF1493;">Kelas <?= $nama_kelas; ?></b>
                    </span>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <img src="<?= base_url('assets/images/sertifikat'); ?>/pj_bw_kiri.png" alt="">
            </td>
            <td style="font-family: Arial, Helvetica, sans-serif;">
                <p align="center">
                    <span style="border-top: solid; border-width: 3px; border-color:#6B8E23; font-size: 16px; width: 100px;">
                        FAIZ ALAUDIN MA`RUF
                    </span> <br>
                    <b style="font-size: 15px; color: #191970;">Institute Director</b>
                </p>
            </td>
            <td style="width: 150px;">

            </td>
            <td style="font-family: Arial, Helvetica, sans-serif;">
                <span style="border-top: solid; border-width: 3px; border-color:#6B8E23; font-size: 16px; width: 100px;">
                    ALDIKO TISA DWI KURNIA
                </span> <br>
                <b style="font-size: 15px; color: #191970;">Course Supervisor</b>
                </p>

            </td>
            <td>
                <img src="<?= base_url('assets/images/sertifikat'); ?>/pj_bw_kanan.png" alt="" align="right">
            </td>
        </tr>
    </table>
    <center>
        <div>
            <a href="#" class="btn btn-primary" onclick="window.print();">Download/Print</a>
        </div>
    </center>

</body>

</html>