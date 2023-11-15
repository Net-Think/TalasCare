<?php

class M_user extends CI_Model
{
    public function activate($data, $id)
    {
        $this->db->where('tbl_user.id_user', $id);
        return $this->db->update('tbl_user', $data);
    }
    public function insertid($data)
    {
        $this->db->insert('tbl_user', $data);
        return $this->db->insert_id();
    }
    public function getUser($id)
    {
        $query = $this->db->get_where('tbl_user', array('id_user' => $id));
        return $query->row_array();
    }
    function datauser()
    {
        $query = $this->db->query("SELECT * FROM tbl_user");
        return $query->result();
    }
    function datanotifikasi($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_notifikasi LEFT JOIN tbl_user ON tbl_notifikasi.id_user_pengirim = tbl_user.id_user WHERE id_user_penerima = $id");
        return $query->result();
    }
    function update_status($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function update_profile($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function total()
    {
        $query = $this->db->query("SELECT 
        COUNT(*) AS totaluser,
        (SELECT COUNT(*) FROM tbl_toko) AS totaltoko,
        (SELECT COUNT(*) FROM tbl_blog) AS totalblog,
        (SELECT COUNT(*) FROM tbl_forum) AS totalforum FROM tbl_user");
        return $query->result();
    }

}
