<?php 
    class M_login extends CI_Model{
        public function cek_login($where){
            return $this->db->get_where('tb_admin',$where)->num_rows();
        }
    }
?>