<?php
    class M_cuaca extends CI_Model{
        public function get_cuaca(){
            return $this->db->get('tb_kab')->result_array();
        }
        public function cari()
        {
            $cari = $this->input->post('but', true);
            $this->db->like('nm_kab', $cari);
            return $this->db->get('tb_file')->result_array();
        }
        public function carie()
        {
            $cari = $this->input->post('but', true);
            $this->db->like('nm_kab', $cari);
            return $this->db->get('tb_file_bsk')->result_array();
        }
        public function get_dini(){
            $this->db->order_by('id', 'DESC');
            $this->db->limit(1);
            return $this->db->get('tb_dini')->result_array();
        }
        public function get_grafis(){
            $this->db->order_by('id', 'DESC');
            $this->db->limit(3);
            return $this->db->get('tb_grafis')->result_array();
        }
    }
?>