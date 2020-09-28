<?php


    class admin_model extends CI_Model{

        public function index(){
            return $this->db->get('ketua_1')->result_array();
        }

        public function ketua_2(){
            return $this->db->get('ketua_2')->result_array();
        }

        public function tambah_ketua_1(){
            $foto = $_FILES['foto'];

            if( $foto ){
                $config['upload_path'] = './assets/resources/kandidat';
                $config['allowed_types'] = 'jpg|jpeg|png';

                $this->load->library('upload' , $config);
                if($this->upload->do_upload('foto')){
                    $this->upload->data('foto');
                }
                
                else{
                    echo 'gagal';
                    var_dump($foto);
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'nama' => $this->input->post('nama'),
                'kelas' => $this->input->post('kelas'),
                'visi' => $this->input->post('visi'),
                'foto' => $foto['name']
            ];

            $this->db->insert('ketua_1' , $data);


        }

        public function tambah_ketua_2(){
            $foto = $_FILES['foto'];

            if( $foto ){
                $config['upload_path'] = './assets/resources/kandidat';
                $config['allowed_types'] = 'jpg|jpeg|png';

                $this->load->library('upload' , $config);
                if($this->upload->do_upload('foto')){
                    $this->upload->data('foto');
                }
                
                else{
                    echo 'gagal';
                    var_dump($foto);
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'nama' => $this->input->post('nama'),
                'kelas' => $this->input->post('kelas'),
                'visi' => $this->input->post('visi'),
                'foto' => $foto['name']
            ];

            $this->db->insert('ketua_2' , $data);


        }

        public function hapus_ketua_1($i){
            $this->db->where('id' , $i);
            $this->db->delete('ketua_1');
        }

        public function hapus_ketua_2($i){
            $this->db->where('id' , $i);
            $this->db->delete('ketua_2');
        }
    }