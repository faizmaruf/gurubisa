<?php

class Kursus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('home');
            redirect($url);
        };
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('m_user');
        $this->load->model('m_kelas');
        $this->load->model('m_materi');
        $this->load->model('m_daftar');
        $this->load->model('m_progres');
    }
    public function index()
    {
        $id_user = $this->input->get(['id_user']);
        $id = $id_user['id_user'];



        $id_kelass = $this->input->get(['id_kelas']);
        $id_kelas = $id_kelass['id_kelas'];


        $id_materii = $this->input->get(['id_materi']);
        $id_materi = $id_materii['id_materi'];

        if (!$id_materi) {
            // ambil materi ddengan parameter id kelas
            $id_materii = $this->m_materi->geIdMateri($id_kelas);
            $id_materi = $id_materii['id_materi'];
        }


        //mendapatkan Id daftar
        $id_daftarkelas = $this->m_daftar->getIdDaftar($id, $id_kelas);
        $id_daftark = $id_daftarkelas[0];
        $id_daftar = $id_daftark['id_daftar'];
        //mendapatkan Is_done Id_materi 
        $is_doneIdMateri = $this->m_progres->getIsdoneProgres($id_daftar);



        $ada = 0;
        $i = 0;
        foreach ($is_doneIdMateri as $row) {
            if (($is_doneIdMateri[$i]['id_materi']) == $id_materi) {
                // var_dump($is_doneIdMateri[$i]['id_materi']);
                // die;
                $ada++;
            }
            $is_doneidmaterii[] = $is_doneIdMateri[$i]['id_materi'];
            $i++;
        }


        // mengeset is_done menjadi 1 dan jika belum di tandai maka set
        if ($ada == 0) {
            $this->m_progres->setProgresIsDone($id_daftar, $id_materi);
        }
        // var_dump($is_doneIdMateri);
        // die;
        //mendapatkan Id daftar
        $id_daftarkelas = $this->m_daftar->getIdDaftar($id, $id_kelas);
        $id_daftark = $id_daftarkelas[0];
        $id_daftar = $id_daftark['id_daftar'];


        $i = 0;
        foreach ($is_doneIdMateri as $row) {
            //echo $is_doneIdMateri[$i]['id_materi'];
            $is_doneidmaterii[] = $is_doneIdMateri[$i]['id_materi'];
            $i++;
        }


        $x['materi'] = $this->m_materi->get_materiByIdDaftarAllElement($id_daftar);
        //mendapatkan  Materinya Untuk Active Side Nav
        // $is_activee = $this->m_progres->getIsActivedSideNav($id_materi);
        // $is_actived = $is_activee[0];
        // $is_active = $is_actived['id_materi'];


        $x['data'] = $this->m_kelas->get_kelasByIdDaftar($id_daftar);

        // $is_done = $this->m_progres->getIsdoneProgres($id_materi);
        $x['activesidenav'] = $id_materi;

        $x['is_done'] = $is_doneidmaterii;

        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);
        $this->load->view('user/v_kursus', $x);
    }



    public function nextvideo()
    {
        $id_user = $this->input->get(['id_user']);
        $id = $id_user['id_user'];



        $id_kelass = $this->input->get(['id_kelas']);
        $id_kelas = $id_kelass['id_kelas'];

        $id_materii = $this->input->get(['id_materi']);
        $id_materi = $id_materii['id_materi'];


        //mendapatkan Id daftar
        $id_daftarkelas = $this->m_daftar->getIdDaftar($id, $id_kelas);
        $id_daftark = $id_daftarkelas[0];
        $id_daftar = $id_daftark['id_daftar'];

        $x['materi'] = $this->m_materi->get_materiByIdDaftarAllElement($id_daftar);


        $x['data'] = $this->m_kelas->get_kelasByIdDaftar($id_daftar);



        //mendapatkan Is_done Id_materi 
        $is_doneIdMateri = $this->m_progres->getIsdoneProgres($id_daftar);
        //var_dump($is_doneIdMateri);

        $ada = 0;
        $i = 0;
        foreach ($is_doneIdMateri as $row) {
            if (($is_doneIdMateri[$i]['id_materi']) == $id_materi) {
                // var_dump($is_doneIdMateri[$i]['id_materi']);
                // die;
                $ada++;
            }
            $is_doneidmaterii[] = $is_doneIdMateri[$i]['id_materi'];
            $i++;
        }


        // mengeset is_done menjadi 1 dan jika belum di tandai maka set
        if ($ada == 0) {
            $this->m_progres->setProgresIsDone($id_daftar, $id_materi);
        }



        //mendapatkan  Materinya Untuk Active Side Nav
        $is_activee = $this->m_progres->getIsActivedSideNav($id_materi);
        $is_actived = $is_activee[0];
        $is_active = $is_actived['id_materi'];





        $i = 0;
        foreach ($is_doneIdMateri as $row) {
            //echo $is_doneIdMateri[$i]['id_materi'];
            $is_doneidmaterii[] = $is_doneIdMateri[$i]['id_materi'];
            $i++;
        }

        // var_dump($id);
        // echo "<br>";
        // var_dump($id_kelas);
        // echo "<br>";
        // var_dump($id_daftar);
        // echo "<br>";
        // var_dump($id_materi);
        // echo "<br>";
        // var_dump($is_active);
        // echo "<br>";
        //var_dump($is_doneidmaterii);
        //echo "<br>";
        // var_dump($is_doneIdMateri);
        // echo "<br>";
        // die;



        $x['activesidenav'] = $is_active;
        $x['is_done'] = $is_doneidmaterii;
        $email = $this->session->userdata('email_user');
        $x['user'] = $this->m_user->getUserByEmail($email);
        $this->load->view('user/v_kursus', $x);
    }
}
