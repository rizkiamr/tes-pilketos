<?php

    
    class Admin extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin_model');
            $this->load->library('form_validation');
        }

        public function login(){
            $data['judul'] = 'dashboard';
            $this->load->view('templates/header' , $data);
            $this->load->view('admin/login');
            $this->load->view('templates/footer');

            if( $this->input->post('username') == 'admin' && $this->input->post('password') == 'osis_smea' ){
                $this->session->login = true;
                redirect('admin/index');
                
            }

            else {
                $this->session->login = false;
            }
        }

        // logout

        public function logout(){
            $this->session->login == false;
            redirect('admin/login');
        }

        public function index(){
            $data['judul'] = 'dashboard';
            if( $this->session->login ){
                $this->load->view('templates/header', $data);
                $this->load->view('admin/index');
                $this->load->view('templates/footer');
            
            }
            else {
                redirect('admin/login');
            }
        }

        public function daftar_kandidat(){
            $data['judul'] = 'daftar kandidat';

            
            $data['ketua_1'] = $this->admin_model->index();
            $data['ketua_2'] = $this->admin_model->ketua_2();
            

            if ( $this->session->login ){

            $this->load->view('templates/header', $data);
            $this->load->view('admin/daftar_kandidat' , $data);
            $this->load->view('templates/footer');

            }

            else{
                redirect('admin/login');
            }
        }

        public function lihat_hasil(){
            $data['judul'] = 'lihat hasil';

            if( $this->session->login){
            $data['ketua_1'] = $this->admin_model->index();
            $data['ketua_2'] = $this->admin_model->ketua_2();
            
            $this->load->view('templates/header' , $data);
            $this->load->view('admin/lihat_hasil' , $data);
            $this->load->view('templates/footer' );

            }

            else{
                redirect('admin/login');
            }
        }

        public function tambah_ketua_1(){


            
            $data['judul'] = 'tambah kandidat ketua 1';
            $data['kandidat'] = $this->admin_model->index();

            $this->form_validation->set_rules('nama' , 'Nama' , 'required');
            $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
            $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');

            if($this->form_validation->run() == false ){
                // $error = array('error' => $this)
                $this->load->view('templates/header' , $data);
                $this->load->view('admin/tambah_ketua_1', $data);
                $this->load->view('templates/footer' );
            }

            else{
                $this->admin_model->tambah_ketua_1();
                $this->session->set_flashdata('flash' , 'berhasil ditambahkan');
                redirect( 'admin/daftar_kandidat');
            }

        }

        public function hapus_ketua_1($id) {
            $this->admin_model->hapus_ketua_1($id);
            echo 'berhasil';
            redirect('admin/daftar_kandidat');

        }

        public function hapus_ketua_2($id) {
            $this->admin_model->hapus_ketua_2($id);
            echo 'berhasil';
            redirect('admin/daftar_kandidat');

        }

        
        public function tambah_ketua_2(){

       
            
            $data['judul'] = 'tambah kandidat ketua 2';
            $data['kandidat'] = $this->admin_model->index();

            $this->form_validation->set_rules('nama' , 'Nama' , 'required');
            $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
            $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');

            if($this->form_validation->run() == false ){
                // $error = array('error' => $this)
                $this->load->view('templates/header' , $data);
                $this->load->view('admin/tambah_ketua_2', $data);
                $this->load->view('templates/footer' );
            }

            else{
                $this->admin_model->tambah_ketua_2();
                $this->session->set_flashdata('flash' , 'berhasil ditambahkan');
                redirect( 'admin/daftar_kandidat');
            }

        }

        

       
    }
