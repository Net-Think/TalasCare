<?php

class M_forum extends CI_Model
{
    public function dataforum()
    {
        $query = $this->db->query("SELECT *, (SELECT COUNT(*) FROM tbl_like_forum WHERE tbl_like_forum.id_forum = tbl_forum.id_forum) AS jumlah_suka, (SELECT COUNT(*) FROM tbl_komentar WHERE tbl_komentar.id_forum = tbl_forum.id_forum) AS jumlah_komentar FROM tbl_forum LEFT JOIN tbl_user ON tbl_forum.id_user=tbl_user.id_user ORDER BY id_forum DESC");
        return $query->result();
    }
    public function detailforum($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_forum WHERE id_forum=$id");
        return $query->result();
    }

    function input($data, $table)
    {
        $query = $this->db->insert($data, $table);
        return $this->db->insert_id();
    }

    public function likeForum($forumId, $userId) {
        $isLiked = $this->db->get_where('tbl_like_forum', ['id_forum' => $forumId, 'id_user' => $userId])->row();
    
        if ($isLiked) {
            $this->db->delete('tbl_like_forum', ['id_forum' => $forumId, 'id_user' => $userId]);
            $response['status'] = 'unliked';
        } else {
            $data = array(
                'id_user' => $userId,
                'id_forum' => $forumId,
                'tanggal' => date('Y-m-d H:i:s'),
                'liked' => 1
            );
            $this->db->insert('tbl_like_forum', $data);
            $response['status'] = 'liked';
        }
    
        $totalLikes = $this->db->where('id_forum', $forumId)->from('tbl_like_forum')->count_all_results();
        $response['jumlah_like'] = $totalLikes;
    
        return $response;
    }    
    public function getForumById($forumId)
    {
        return $this->db->get_where('tbl_forum', ['id_forum' => $forumId])->row();
    }

    public function hapusForum($forumId)
    {
        $this->db->delete('tbl_forum', ['id_forum' => $forumId]);
        $this->db->delete('tbl_komentar', ['id_forum' => $forumId]);
    }

    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
}    