<?php
    class Api extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_api');
        }
        public function get_kab(){
            $data = $this->M_api->get_kab();
            echo json_encode(array('result'=>$data));
        }
        public function get_terkini(){
            $data = $this->M_api->get_file();
            echo json_encode(array('result'=>$data));
        }
        public function get_besok(){
            $data = $this->M_api->get_file_bsk();
            echo json_encode(array('result'=>$data));
        }
        public function get_dini(){
            $data = $this->M_api->dini1();
            echo json_encode(array('result'=>$data));
        }
        public function get_grafis(){
            $data = $this->M_api->grafis();
            echo json_encode(array('result'=>$data));
        }

        public function cari_terkini($nama){
            $data = $this->M_api->cari1($nama);
            echo json_encode(array('result'=>$data));
        }
        public function cari_besok($nama){
            $data = $this->M_api->cari2($nama);
            echo json_encode(array('result'=>$data));
        }
        public function cari_kab($nama){
            $data = $this->M_api->cari3($nama);
            echo json_encode(array('result'=>$data));
        }
    }
?>