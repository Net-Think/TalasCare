<?php

class M_info extends  CI_Model
{
    function datahama()
    {
        $query = $this->db->query("SELECT * FROM tbl_hama WHERE jenis='Hama'");
        return $query->result();
    }
    function datapenyakit()
    {
        $query = $this->db->query("SELECT * FROM tbl_hama WHERE jenis='Penyakit'");
        return $query->result();
    }

    function detail_info($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_hama WHERE id_hama=$id");
        return $query->result();
    }
}