<?php
    class Admin extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            if($this->session->userdata('status') != "login"){
                redirect(base_url("login"));
            }
            $this->load->model('M_admin');
            $this->load->helper('form');
            $this->load->library('form_validation');
        }
        public function index(){
            $this->load->model('M_cuaca');
            $data['jumlahKab'] = $this->db->get('tb_kab')->num_rows();
            $data['jumlahFile'] = $this->db->get('tb_file')->num_rows();
            $data['jumlahFileEsok'] = $this->db->get('tb_file_bsk')->num_rows();
            $data['jumlahDini'] = $this->db->get('tb_dini')->num_rows();
            $data['jumlahGrafis'] = $this->db->get('tb_grafis')->num_rows();
            $data['tgl'] = $this->M_cuaca->get_dini();
            $this->load->view('templates/adminnav');
            $this->load->view('admin/index', $data);
        }
        //File Terkini
        public function file(){
            $data['data'] = $this->M_admin->get_kab();
            $data['file'] = $this->M_admin->get_file();
            $this->load->view('templates/adminnav');
            $this->load->view('admin/file',$data);
        }
        public function tambah(){
            
                $config = [
                'upload_path' => './image/img_terkini/',
                'allowed_types' => 'jpg|png|pdf',
                'max_size' => 2000
                ];
                $this->load->library('upload', $config);
                if($this->M_admin->cek_file()){
                    $this->session->set_flashdata('fla','Nama Sudah Ada');
                }else{
                    if (!$this->upload->do_upload('fil')){
                        $this->session->set_flashdata('fla','Gagal Diunggah');
                        redirect('admin/file');
                    } else{
                        $file = $this->upload->data();
                        //mengambil data di form
                        $data = [
                        'nm_file' => $file['file_name'],
                        'nm_kab'  => $this->input->post('kabt')
                        ];
                        
                        $this->M_admin->input($data);
                        $this->session->set_flashdata('flash','Ditambahkan');
                        
                    }
                    
                }
                redirect('admin/file');
            
        }
        public function ubah(){
            $id =  $this->input->post('id');
            $img = $this->M_admin->getId_file($id);
            // if($this->M_admin->cek_file()){
            //     $this->session->set_flashdata('fla','Sudah Ada');
            // }else{
                if(isset($_FILES["fil"]["name"])){
                    $config = [
                        'upload_path' => './image/img_terkini/',
                        'allowed_types' => 'jpg|png|pdf',
                        'max_size' => 2000,
                        
                    ];
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('fil')){
                        //$this->session->set_flashdata('fla','Gagal Diunggah');
                        //redirect('admin/file');
                    } else{
                        $file = $this->upload->data();
                        //mengambil data di form
                        $data = [
                        'nm_file' => $file['file_name']
                        ];
                        unlink('image/img_terkini/'.$img->nm_file);
                    }
                }
                $data['nm_kab'] = $this->input->post('kabt');
                $this->M_admin->ubah_file($id,$data);
                $this->session->set_flashdata('flash','Diubah');
            // }
            redirect('admin/file');
        }
        public function hapus($id){
            $img = $this->M_admin->getId_file($id);
            unlink('image/img_terkini/'.$img->nm_file);
            $this->M_admin->delete($id);
            redirect('admin/file');
        }
        public function getFile(){
            $id =  $this->input->post('id');
            echo json_encode($this->M_admin->getId_file2($id));
        }
        //Kabuaten
        public function kabupaten(){
            $data['data'] = $this->M_admin->get_kab();
            $this->load->view('templates/adminnav');
            $this->load->view('admin/kabupaten', $data);
        }
        public function tambahkab(){

            $this->form_validation->set_rules('kabu', 'Nama Kabupaten', 'required');
            if ($this->form_validation->run() == false) {
                $data['data'] = $this->M_admin->get_kab();
                $this->load->view('templates/adminnav');
                $this->load->view('admin/kabupaten', $data);
            }else{
                if($this->M_admin->cek_kab()){
                    $this->session->set_flashdata('kabu','Sudah ada');
                }else{
                    $data = [
                        'nm_kab'  => $this->input->post('kabu')
                    ];
                    $this->M_admin->tambahkab($data);
                    $this->session->set_flashdata('flash','Ditambahkan');
                }
                redirect('admin/kabupaten');
            }
        }
        public function hapuskab($id){
            $this->M_admin->deletekab($id);
            redirect('admin/kabupaten');
        }
        public function ubahkab(){
            if($this->M_admin->cek_kab()){
                $this->session->set_flashdata('kabu','Sudah ada');
            }else{
                $this->M_admin->ubah_kab();
                $this->session->set_flashdata('flash','Diubah');
            }
            redirect('admin/kabupaten');
        }
        public function getKab(){
            $id =  $this->input->post('id');
            echo json_encode($this->M_admin->getId_kab($id));
        }
        
        //Peringatan Dini
        public function dini(){
            
            $data['file'] = $this->M_admin->get_dini();
            $this->load->view('templates/adminnav');
            $this->load->view('admin/dini',$data);
        }
        public function tambah_dini(){
            date_default_timezone_set('Asia/Jakarta');
            $config = [
                'upload_path' => './image/img_dini/',
                'allowed_types' => 'jpg|png|pdf',
                'max_size' => 2000
            ];
            $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gbr')){
                    $this->session->set_flashdata('fla','Gagal Diunggah');
                } else{
                    $file = $this->upload->data();
                    $data = [
                    'gambar' => $file['file_name'],
                    'judul'  => $this->input->post('jdl'),
                    'tempat' => $this->input->post('tem'),
                    'ket'    => $this->input->post('ket'),
                    'tanggal'=> date('y/m/d h:i:s')
                    ];
                    $this->M_admin->tambahdini($data);
                    $this->session->set_flashdata('flash','Ditambahkan');
                }
            redirect('admin/dini');
        }
        public function ubah_dini(){
            date_default_timezone_set('Asia/Jakarta');
            $id =  $this->input->post('id');
            $img = $this->M_admin->getId_dini($id);
            
            if(isset($_FILES["gbr"]["name"])){
                $config = [
                    'upload_path' => './image/img_dini/',
                    'allowed_types' => 'jpg|png|pdf',
                    'max_size' => 2000,
                    
                ];
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gbr')){
                    //$this->session->set_flashdata('fla','Gagal Diunggah');
                    //redirect('admin/file');
                } else{
                    $file = $this->upload->data();
                    //mengambil data di form
                    $data = [
                        'gambar' => $file['file_name']
                        ];
                    unlink('image/img_dini/'.$img->gambar);
                }
            }
            $data['judul']  = $this->input->post('jdl');
            $data['tempat'] = $this->input->post('tem');
            $data['ket'] = $this->input->post('ket');
            $data['tanggal'] = date('y/m/d h:i:s');
            $this->M_admin->ubah_dini($id,$data);
            $this->session->set_flashdata('flash','Diubah');
            
            redirect('admin/dini');
        }
        public function hapus_dini($id){
            $img = $this->M_admin->getId_dini($id);
            unlink('image/img_dini/'.$img->gambar);
            $this->M_admin->delete_dini($id);
            redirect('admin/dini');
        }
        public function getDini(){
            $id =  $this->input->post('id');
            echo json_encode($this->M_admin->getId_dini2($id));
        }
        //File Esok
        public function file_besok(){
            $data['data'] = $this->M_admin->get_kab();
            $data['file'] = $this->M_admin->get_file_bsk();
            $this->load->view('templates/adminnav');
            $this->load->view('admin/file_bsk',$data);
        }
        public function tambah_esok(){
            $config = [
            'upload_path' => './image/img_besok/',
            'allowed_types' => 'jpg|png|pdf',
            'max_size' => 2000
            ];
            $this->load->library('upload', $config);
            if($this->M_admin->cek_file_esok()){
                $this->session->set_flashdata('fla','Nama Sudah Ada');
            }else{
                if (!$this->upload->do_upload('fil')){
                    $this->session->set_flashdata('fla','Gagal Diunggah');
                    redirect('admin/file_besok');
                } else{
                    $file = $this->upload->data();
                    //mengambil data di form
                    $data = [
                    'nm_file' => $file['file_name'],
                    'nm_kab'  => $this->input->post('kabt')
                    ];
                    $this->M_admin->input_esok($data);
                    $this->session->set_flashdata('flash','Ditambahkan');   
                }
            }
            redirect('admin/file_besok');
        }
        public function ubah_esok(){
            $id =  $this->input->post('id');
            $img = $this->M_admin->getId_esok($id);
            
                if(isset($_FILES["fil"]["name"])){
                    $config = [
                        'upload_path' => './image/img_besok/',
                        'allowed_types' => 'jpg|png|pdf',
                        'max_size' => 2000,
                        
                    ];
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('fil')){
                        //$this->session->set_flashdata('fla','Gagal Diunggah');
                        //redirect('admin/file');
                    } else{
                        $file = $this->upload->data();
                        //mengambil data di form
                        $data = [
                        'nm_file' => $file['file_name']
                        ];
                        unlink('image/img_besok/'.$img->nm_file);
                    }
                }
                $data['nm_kab'] = $this->input->post('kabt');
                $this->M_admin->ubah_esok($id,$data);
                $this->session->set_flashdata('flash','Diubah');
            
            redirect('admin/file_besok');
        }
        public function hapus_esok($id){
            $img = $this->M_admin->getId_esok($id);
            unlink('image/img_besok/'.$img->nm_file);
            $this->M_admin->delete_esok($id);
            redirect('admin/file_besok');
        }
        public function getFile_esok(){
            $id =  $this->input->post('id');
            echo json_encode($this->M_admin->getId_esok2($id));
        }
        //Infografis
        public function infografis(){
            $data['file'] = $this->M_admin->get_grafis();
            $this->load->view('templates/adminnav');
            $this->load->view('admin/grafis',$data);
        }
        public function tambah_grafis(){
            date_default_timezone_set('Asia/Jakarta');
            $config = [
                'upload_path' => './image/img_grafis/',
                'allowed_types' => 'jpg|png|pdf',
                'max_size' => 2000
            ];
            $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gbr')){
                    $this->session->set_flashdata('fla','Gagal Diunggah');
                } else{
                    $file = $this->upload->data();
                    $data = [
                    'gambar' => $file['file_name'],
                    'judul'  => $this->input->post('jdl'),
                    'tanggal'=> date('y/m/d h:i:s')
                    ];
                    $this->M_admin->tambahgrafis($data);
                    $this->session->set_flashdata('flash','Ditambahkan');
                }
            redirect('admin/infografis');
        }
        public function ubah_grafis(){
            date_default_timezone_set('Asia/Jakarta');
            $id =  $this->input->post('id');
            $img = $this->M_admin->getId_grafis($id);
            
            if(isset($_FILES["gbr"]["name"])){
                $config = [
                    'upload_path' => './image/img_grafis/',
                    'allowed_types' => 'jpg|png|pdf',
                    'max_size' => 2000,
                    
                ];
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gbr')){
                    //$this->session->set_flashdata('fla','Gagal Diunggah');
                    //redirect('admin/file');
                } else{
                    $file = $this->upload->data();
                    //mengambil data di form
                    $data = [
                        'gambar' => $file['file_name']
                        ];
                    unlink('image/img_grafis/'.$img->gambar);
                }
            }
            $data['judul']  = $this->input->post('jdl');
            $data['tanggal'] = date('y/m/d h:i:s');
            $this->M_admin->ubah_grafis($id,$data);
            $this->session->set_flashdata('flash','Diubah');
            redirect('admin/infografis');
        }
        public function hapus_grafis($id){
            $img = $this->M_admin->getId_grafis($id);
            unlink('image/img_grafis/'.$img->gambar);
            $this->M_admin->delete_grafis($id);
            redirect('admin/infografis');
        }
        public function getGrafis(){
            $id =  $this->input->post('id');
            echo json_encode($this->M_admin->getId_grafis2($id));
        }
    }
?>