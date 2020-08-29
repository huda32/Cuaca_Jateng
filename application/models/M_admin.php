<?php
    class M_admin extends CI_model{
        public function get_kab(){
            return $this->db->get('tb_kab')->result_array();
        }
        public function get_file(){
            return $this->db->get('tb_file')->result_array();
        }
        public function get_file_bsk(){
            return $this->db->get('tb_file_bsk')->result_array();
        }
        public function get_dini(){
            $this->db->order_by('id','DESC');
            return $this->db->get('tb_dini')->result_array();
        }
        public function get_grafis(){
            $this->db->order_by('id','DESC');
            return $this->db->get('tb_grafis')->result_array();
        }
        public function input($data){
            $this->db->insert('tb_file',$data);
        }
        public function input_esok($data){
            $this->db->insert('tb_file_bsk',$data);
        }
        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete('tb_file');
        }
        public function delete_esok($id){
            $this->db->where('id',$id);
            $this->db->delete('tb_file_bsk');
        }
        public function tambahkab($data){
            $this->db->insert('tb_kab', $data);
        }
        public function tambahdini($data){
            $this->db->insert('tb_dini',$data);
        }
        public function tambahgrafis($data){
            $this->db->insert('tb_grafis', $data);
        }
        public function deletekab($id){
            $this->db->where('id',$id);
            $this->db->delete('tb_kab');
        }
        public function ubah_file($id,$data){
            $this->db->where('id', $id);
            $this->db->update('tb_file', $data);
        }
        public function ubah_esok($id,$data){
            $this->db->where('id', $id);
            $this->db->update('tb_file_bsk', $data);
        }
        public function ubah_dini($id,$data){
            $this->db->where('id', $id);
            $this->db->update('tb_dini', $data);
        }
        public function ubah_grafis($id,$data){
            $this->db->where('id', $id);
            $this->db->update('tb_grafis', $data);
        }
        public function ubah_file2($id,$data){
            
            $this->db->where('id',$id)->limit(1)->update('tb_file', $data);
        }
        public function ubah_kab(){
            $data = [
                "nm_kab" => $this->input->post('kabu', true)
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('tb_kab', $data);
        }
        public function getId_kab($id){
            return $this->db->get_where('tb_kab',['id'=>$id])->row_array();
        }
        public function getId_file($id){
            $this->db->where('id', $id);
            return $this->db->get('tb_file')->row();
        }
        public function getId_file2($id){
            return $this->db->get_where('tb_file',['id'=>$id])->row_array();
        }
        public function getId_esok($id){
            $this->db->where('id', $id);
            return $this->db->get('tb_file_bsk')->row();
        }
        public function getId_esok2($id){
            return $this->db->get_where('tb_file_bsk',['id'=>$id])->row_array();
        }
        public function cek_kab(){
            $this->db->where('nm_kab',$this->input->post('kabu'));
            return $this->db->get('tb_kab')->num_rows();
        }
        public function cek_file(){
            $this->db->where('nm_kab',$this->input->post('kabt'));
            return $this->db->get('tb_file')->num_rows();
        }
        public function cek_file_esok(){
            $this->db->where('nm_kab',$this->input->post('kabt'));
            return $this->db->get('tb_file_bsk')->num_rows();
        }
        public function getId_dini($id){
            $this->db->where('id', $id);
            return $this->db->get('tb_dini')->row();
        }
        public function getId_dini2($id){
            return $this->db->get_where('tb_dini',['id'=>$id])->row_array();
        }
        public function delete_dini($id){
            $this->db->where('id',$id);
            $this->db->delete('tb_dini');
        }
        public function getId_grafis($id){
            $this->db->where('id', $id);
            return $this->db->get('tb_grafis')->row();
        }
        public function getId_grafis2($id){
            return $this->db->get_where('tb_grafis',['id'=>$id])->row_array();
        }
        public function delete_grafis($id){
            $this->db->where('id',$id);
            $this->db->delete('tb_grafis');
        }
    }
?>