<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->library('form_validation');
       $this->load->model('table_model');

    }

	public function index()
	{
		$this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run()== false) {
            $this->load->view('login'); 
        }else{
            $this->masok();

	    }
	}

    private function masok()
	{
		$nama = $this->input->post('name');
        $password = md5($this->input->post('password'));

        $user = $this->db->get_where('pengguna', ['idpengguna' => $nama])->row_array();
        // var_dump($user);
        // die;
          if($user ) {
            if ($user['status'] == 1){
                
                if($password == $user['password']){
                    $profil = [
                        'idtable' => $user['idtable'],
                        'idpengguna' => $user['idpengguna'],
                        'levelpengguna' => $user['levelpengguna'],
                        'nama' => $user['nama']
                    ];
                    $this->session->set_userdata($profil);
                    if($profil['levelpengguna']==0){
                        redirect('user');
                    }else{
                        redirect('admin');
                    }
                    
                   
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Wrong Password </div>');
                    redirect('auth');   
                }
                
            }

           
        }else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> User is not registered </div>');
			redirect('auth');
		 }

    }

    

    public function daftar()
    {
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run()== false) {
            $this->load->view('registration'); 
        }else{
            
            $data = [
                'idpengguna' => $this->input->post('username'),
                'password'=> md5($this->input->post('password')),
                'nama' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'levelpengguna'=> '1',
                'status'=>'1'
            ];
            $this->db->insert('pengguna',$data);
            redirect('auth');
        }

        
        }

    public function logout()
    {
        $this->session->unset_userdata('idpengguna');
        $this->session->unset_userdata('levelpengguna');
        $this->session->unset_userdata('nama');

        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> You have been log out </div>');
        redirect('auth');

    }
}

    

