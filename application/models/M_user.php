<?php
class M_user extends CI_Model
{

    function get_all_user()
    {
        $hsl = $this->db->get('user');
        return $hsl;
    }

    function get_all_userById($id)
    {
        $hsl = $this->db->get('user', $id);
        return $hsl;
    }

    function simpan_user($data)
    {
        $this->db->insert('user', $data);
    }



    //UPDATE user //

    function update_user($where, $data)
    {
        $this->db->where($where);
        $this->db->update("user", $data);
    }

    //END UPDATE user//

    function hapus_user($id)
    {
        $this->db->delete('user', array('id_user' => $id));
    }

    function cekuser($email)
    {
        $hasil = $this->db->query("SELECT * FROM tbl_users WHERE email='$email'");
        return $hasil;
    }
}
