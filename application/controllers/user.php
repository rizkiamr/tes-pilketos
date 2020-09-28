<?php


    class user extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
        }
        
        public function login(){
            
            

            $data['judul'] = 'Login';
            $this->session->user = $this->input->post('token');
            
       
          
            $token = $this->db->get_where('token' , ['token' => $this->session->user] )->result_array();
            if( $token){
                $this->session->login_user = true;
                redirect('user/index');
            }
            else{
                $this->load->view('templates/header' , $data);
                $this->load->view('user/login');
                $this->load->view('templates/footer');

            }

            
        }

        public function index(){

            $data['judul'] = 'pilih ketua 1';
            $data['ketua_1'] = $this->user_model->index();
            if( $this->session->login_user  ){

                $this->load->view('templates/header' , $data);
                $this->load->view('user/index' , $data);
                $this->load->view('templates/footer');

            }

            else{
                redirect('user/login');
            }

            



        }

        public function logout(){
            $this->session->login_user = false;
            $this->session->user = false;
            redirect('user/login');
        }

        // pilih krtua
        public function pilih_ketua_1($id){
            $this->user_model->pilih_ketua_1($id);
            redirect('user/index_2');

        }

        public function pilih_ketua_2($id){
            $this->user_model->pilih_ketua_2($id);
            $this->user_model->user_active($this->session->user);
            redirect('user/index_2');

        }

        public function index_2(){
            $data['judul'] = 'pilih ketua 2';
            $data['ketua_1'] = $this->user_model->index_2();

            $this->load->view('templates/header', $data);
            $this->load->view('user/index_2', $data);
            $this->load->view('templates/footer');

            // echo $this->session->user;
        }

        // detail kandidat ketua ke;as 10

        public function detail_ketua_2($id){
            $data['ketua_1'] = $this->db->get_where('ketua_2',['id' => $id])->result_array();
            $data['judul'] = 'pilih kandidat ketua 2';
            if($this->session->login_user){
                $this->load->view('templates/header' , $data );
                $this->load->view('user/detail_ketua_2' , $data);
                $this->load->view('templates/footer');
            }

            else{
                redirect('user/login');
            }
        }


        // detail kandidat saat user mengklik tombol pilih

        public function detail_ketua_1($id){

            $data['ketua_1'] = $this->db->get_where('ketua_1',['id' => $id])->result_array();
            $data['judul'] = 'pilih kandidat';
            if($this->session->login_user){
                $this->load->view('templates/header' , $data );
                $this->load->view('user/detail_ketua_1' , $data);
                $this->load->view('templates/footer');
            }

            else{
                redirect('user/login');
            }
        }
    }