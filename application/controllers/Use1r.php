<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->library('form_validation');
       $this->load->model('table_model');

    }

    public function index(){
        $data['tbl'] = $this->table_model->getTabel();
        $data['tbl2'] = $this->table_model->getHproject();
        $data['tbl3'] = $this->table_model->getRstatus();
        $data['tbl4'] = $this->table_model->getRproject();

        $this->load->view('mainmenu',$data);
        
    }

    public function ph()
    {
        $data['tbl'] = $this->table_model->getRstatus();

        $this->load->view('mainmenuStatus',$data);
    }

    public function prs()
    {
        
        $data['join'] = $this->table_model->join(); 
        $this->load->view('mainmenuRproject',$data);
        
           
    }

    



    


}
