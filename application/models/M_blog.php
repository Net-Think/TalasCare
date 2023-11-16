<?php

class M_blog extends  CI_Model
{
    function datablog()
    {
        $query = $this->db->query("SELECT * FROM tbl_blog LEFT JOIN tbl_admin ON tbl_blog.id_admin = tbl_admin.id_admin");
        return $query->result();
    }

    function detail_blog($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_blog LEFT JOIN tbl_admin ON tbl_blog.id_admin = tbl_admin.id_admin WHERE id_blog=$id");
        return $query->result();
    }

    function recent_blog()
    {
        $query = $this->db->query("SELECT * FROM tbl_blog ORDER BY tanggal DESC LIMIT 3");
        return $query->result();
    }

    function hapus_blog($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function input_blog($data, $table)
    {
        $query = $this->db->insert($data, $table);
        return $this->db->insert_id();
    }

    function detailblog($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_blog WHERE id_blog=$id");
        return $query->result();
    }

    function update_blog($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}