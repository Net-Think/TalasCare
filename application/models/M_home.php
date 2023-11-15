<?php

class M_home extends  CI_Model
{
    function datafaq()
    {
        $query = $this->db->query("SELECT * FROM tbl_faq");
        return $query->result();
    }
}