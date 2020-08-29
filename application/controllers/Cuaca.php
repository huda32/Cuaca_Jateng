<?php

class Cuaca extends CI_Controller {
    public function __construct()
        {
            parent::__construct();
            $this->load->model('M_cuaca');
        }
    public function index($nama = ''){

        $data['judul'] = 'Cuaca Hari Ini';
        $data['data'] = $this->M_cuaca->get_cuaca();
        $data['bot'] = $this->M_cuaca->cari();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/cuaca',$data);
        $this->load->view('templates/footer');
    }

    public function esok($nama = ''){

        $data['judul'] = 'Cuaca Esok Hari';
        $data['data'] = $this->M_cuaca->get_cuaca();
        $data['bot'] = $this->M_cuaca->carie();
        $this->load->view('templates/header', $data);
        $this->load->view('home/cuaca_esk',$data);
        $this->load->view('templates/footer');
    }

}