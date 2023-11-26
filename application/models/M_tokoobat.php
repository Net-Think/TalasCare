<?php

class M_tokoobat extends  CI_Model
{
    function datatoko()
    {
        $query = $this->db->query("SELECT * FROM tbl_toko");
        return $query->result();
    }
    function datatokomap()
    {
        $query = $this->db->query("SELECT * FROM tbl_toko");
        return $query->result_array();
    }

    function hapus_toko($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function input_toko($data, $table)
    {
        $query = $this->db->insert($data, $table);
        return $this->db->insert_id();
    }

    function detail_toko($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_toko WHERE id_toko=$id");
        return $query->result();
    }

    function update_toko($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}