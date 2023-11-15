<?php

class M_talasinfo extends  CI_Model
{
    function datainfo()
    {
        $query = $this->db->query("SELECT * FROM tbl_hama");
        return $query->result();
    }

    function hapus_info($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function input_info($data, $table)
    {
        $query = $this->db->insert($data, $table);
        return $this->db->insert_id();
    }

    function detail_info($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_hama WHERE id_hama=$id");
        return $query->result();
    }

    function update_info($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}