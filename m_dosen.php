<?php
class m_dosen extends CI_Model{
    function cek_dosen($where){
        return $this->db->get_where("tb_dosen",$where);
    }
}
?>
