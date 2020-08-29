<?php
    class M_api extends CI_Model{
        public function get_kab(){
            return $this->db->get('tb_kab')->result_array();
        }
        public function get_file(){
            return $this->db->get('tb_file')->result_array();
        }
        public function get_file_bsk(){
            return $this->db->get('tb_file_bsk')->result_array();
        }
        public function dini1(){
            return $this->db->get('tb_dini')->result_array();
        }
        public function dini(){
            $this->db->order_by('id','DESC');
            return $this->db->get('tb_dini')->result_array();
        }
        public function grafis1(){
            return $this->db->get('tb_grafis')->result_array();
        }
        public function grafis(){
            $this->db->order_by('tanggal','DESC');
            return $this->db->get('tb_grafis')->result_array();
        }
        public function cari1($nama){
            $nam = utf8_decode(urldecode($nama));
            $this->db->like('nm_kab', $nam);
            return $this->db->get('tb_file')->result_array();
        }
        // public function cari($nama){
        //     $nam = utf8_decode(urldecode($nama));
        //     $search_query_values = explode(' ', $nam);
        //     $counter = 0;
        //     foreach ($search_query_values as $key => $value) {
        //         if ($counter == 0) {
        //             $this->db->like('nm_kab', $value);
        //         }
        //         else {
        //             $this->db->or_like('nm_kab', $value);
        //             //$this->db->or_like('content', $value);
        //         }
        //         $counter++;
        //     }
        //     $query = $this->db->get('tb_file');
        //     return $query->result_array();
        // }
        public function get_terkini($kab){
            $this->db->where('nm_kab', $kab);
            return $this->db->get('tb_file')->row();
        }
        public function cari2($nama){
            //$this->db->where("MATCH (nm_kab) AGAINST ('$nama' IN BOOLEAN MODE)");
            //$this->db->or_where("nm_kab LIKE '$nama'");
            $nam = utf8_decode(urldecode($nama));
            $this->db->like('nm_kab', $nam);
            return $this->db->get('tb_file_bsk')->result_array();
        }
        public function cari3($nama){
            $nam = utf8_decode(urldecode($nama));
            $this->db->like('nm_kab', $nam);
            return $this->db->get('tb_kab')->result_array();
        }
    }
?>