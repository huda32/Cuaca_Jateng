<?php

class Home extends CI_Controller {

    public function index($nama = ''){
        $this->load->model('M_cuaca');
        $data['judul'] = 'Stasiun Meteorologi Ahmad Yani';
        $data['dini'] = $this->M_cuaca->get_dini();
        $data['grafis'] = $this->M_cuaca->get_grafis();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer');
    }
    public function dini($nama = ''){
        $this->load->model('M_cuaca');
        $data['judul'] = 'Peringatan Dini';
        $data['dini'] = $this->M_cuaca->get_dini();
        $this->load->view('templates/header', $data);
        $this->load->view('home/dini',$data);
        $this->load->view('templates/footer');
    }
}