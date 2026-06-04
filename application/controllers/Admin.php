<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('table_model');
    }

    public function index()
    {
        $data['tbl'] = $this->table_model->getTabel();

        $data['total'] = [
            'rdirek' => $this->table_model->totalrdirek(),
            'rproject' => $this->table_model->totalrproject(),
            'rstatus' => $this->table_model->totalrstatus(),
            'rmember' => $this->table_model->totalrmember(),
        ];

		if($this->session->userdata('idtable')){
			$this->load->view('mainmenu', $data);
		}else{
			redirect('/auth');
		}
    }

    public function ph()
    {
        $data['tbl'] = $this->table_model->getRstatus();

        $data['total'] = [
            'rdirek' => $this->table_model->totalrdirek(),
            'rproject' => $this->table_model->totalrproject(),
            'rstatus' => $this->table_model->totalrstatus(),
            'rmember' => $this->table_model->totalrmember(),
        ];

        if($this->session->userdata('idtable')){
			$this->load->view('mainmenuStatus', $data);
		}else{
			redirect('/auth');
		}
    }

    public function prs()
    {

        $data['tbl'] = $this->table_model->getRproject();

        $data['total'] = [
            'rdirek' => $this->table_model->totalrdirek(),
            'rproject' => $this->table_model->totalrproject(),
            'rstatus' => $this->table_model->totalrstatus(),
            'rmember' => $this->table_model->totalrmember(),
        ];

        if($this->session->userdata('idtable')){
			$this->load->view('mainmenuRproject', $data);
		}else{
			redirect('/auth');
		}
    }


    public function prd()
    {

        $data['join2'] = $this->table_model->joinrdirek();

        $data['total'] = [
            'rdirek' => $this->table_model->totalrdirek(),
            'rproject' => $this->table_model->totalrproject(),
            'rstatus' => $this->table_model->totalrstatus(),
            'rmember' => $this->table_model->totalrmember(),
        ];

        
        if($this->session->userdata('idtable')){
            $this->load->view('mainmenuRdirektorat', $data);
		}else{
			redirect('/auth');
		}
    }

	public function changepw()
	{
		$this->load->view('changepassword');
	}

    public function pppp()
    {

        $data['tbl'] = $this->table_model->joinview_progress();

        $data['total'] = [
            'rdirek' => $this->table_model->totalrdirek(),
            'rproject' => $this->table_model->totalrproject(),
            'rstatus' => $this->table_model->totalrstatus(),
            'rmember' => $this->table_model->totalrmember(),
        ];

        if($this->session->userdata('idtable')){
            $this->load->view('mainmenuView_Progress', $data);
		}else{
			redirect('/auth');
		}
    }

    public function ppppp()
    {
        $data['tbl'] = $this->table_model->joinview_hproject();

        $data['total'] = [
            'rdirek' => $this->table_model->totalrdirek(),
            'rproject' => $this->table_model->totalrproject(),
            'rstatus' => $this->table_model->totalrstatus(),
            'rmember' => $this->table_model->totalrmember(),
        ];

        
        if($this->session->userdata('idtable')){
            $this->load->view('mainmenuHproject', $data);
		}else{
			redirect('/auth');
		}
    }

    public function eprd()
    {

        $data = $this->db->get('rdirektorat');
        $this->load->view('EditRdirektorat', $data);
    }

    public function eprp()
    {
        $id = $this->input->post('id');
        $data['edt'] = $this->db->get_where('rproject', array('id' => $id))->row_array();
        $this->load->view('EditRproject', $data);
    }

    public function eprs()
    {
        $id = $this->input->post('id');
        $data['edt'] = $this->db->get_where('rstatus', array('id' => $id))->row_array();
        $this->load->view('EditRstatus', $data);
    }

    public function epp()
    {
        $idpengguna = $this->input->post('idpengguna');
        $data['edt'] = $this->db->get_where('pengguna', array('idpengguna' => $idpengguna))->row_array();
        $this->load->view('EditPengguna', $data);
    }

    public function project()
    {
        $data['tbl'] = $this->table_model->getproject();

        $data['total'] = [
            'rdirek' => $this->table_model->totalrdirek(),
            'rproject' => $this->table_model->totalrproject(),
            'rstatus' => $this->table_model->totalrstatus(),
            'rmember' => $this->table_model->totalrmember(),
        ];

        
        if($this->session->userdata('idtable')){
            $this->load->view('mainmenuDataProject', $data);
		}else{
			redirect('/auth');
		}
    }

    public function edit()
    {
        $id = $this->input->post('id');

        $data['edt'] = $this->db->get_where('rdirektorat', array('id' => $id))->row_array();

        // $data['edt1'] = $this->db->get('rdirektorat');
        $this->load->view('EditRdirektorat', $data);
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $data['edt1'] = $this->db->get_where('rdirektorat', array('id' => $id))->row_array();

        // $data['edt1'] = $this->db->get('rdirektorat');
        $this->load->view('DeleteRdirektorat', $data);
    }

    public function deletedir()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('rdirektorat');
        redirect('admin/prd');
    }

    public function delete1()
    {
        $id = $this->input->post('id');

        $data['edt1'] = $this->db->get_where('rproject', array('id' => $id))->row_array();

        // $data['edt1'] = $this->db->get('rpoject');
        $this->load->view('DeleteRproject', $data);
    }

    public function deletedir1()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('rproject');
        redirect('admin/prs');
    }

    public function delete2()
    {
        $id = $this->input->post('id');

        $data['edt1'] = $this->db->get_where('rstatus', array('id' => $id))->row_array();

        // $data['edt1'] = $this->db->get('rpoject');
        $this->load->view('DeleteRstatus', $data);
    }

    public function deletedir2()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('rstatus');
        redirect('admin/ph');
    }

    public function delete3()
    {
        $id = $this->input->post('idpengguna');

        $data['edt1'] = $this->db->get_where('pengguna', array('idpengguna' => $id))->row_array();

        // $data['edt1'] = $this->db->get('rpoject');
        $this->load->view('DeletePengguna', $data);
    }

    public function deletedir3()
    {
        $id = $this->input->post('idpengguna');
        $this->db->where('idpengguna', $id);
        $this->db->delete('pengguna');
        redirect('admin/index');
    }

    public function delete4()
    {
        $id = $this->input->post('id');

        $data['edt1'] = $this->db->get_where('project', array('id' => $id))->row_array();

        // $data['edt1'] = $this->db->get('rpoject');
        $this->load->view('DeleteDataProject', $data);
    }

    public function deletedir4()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('project');
        
        if($delete){
            redirect('admin/project');
        }

    }

    public function delete5()
    {
        $id = $this->input->post('id');
        $where = array('hproject.id' => $id);

        $data['edt1'] = $this->db->select('hproject.*, project.id as idproj, project.project_name, rproject.id as idrproj, rproject.deskripsi')->from('hproject')
        ->join('project', 'project.id=hproject.idproject')
        ->join('rproject', 'rproject.id=hproject.rproject')
        ->where($where)->get()->row_array();



        // $data['edt1'] = $this->db->get('rpoject');
        $this->load->view('DeleteHproject', $data);
    }

    public function deletedir5()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('hproject');
        redirect('admin/ppppp');
    }

    public function update()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == false) {
        } else {
            $id = $this->input->post('id');
            $data = [
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => ($this->input->post('status')),
            ];
            $this->db->where('id', $id);
            $this->db->update('rdirektorat', $data);
            redirect('admin/prd');
        }
    }

    public function updatepengguna()
    {
        $this->form_validation->set_rules('idpengguna', 'Idpengguna', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('kodelokasi', 'Kodelokasi', 'required');
        if ($this->form_validation->run() == false) {
        } else {
            $id = $this->input->post('idtable');
            $data = [
                'idpengguna' => $this->input->post('idpengguna'),
                'nama' => ($this->input->post('nama')),
                'password' => md5($this->input->post('password')),
                'status' => ($this->input->post('status')),
                'kodelokasi' => ($this->input->post('kodelokasi'))
            ];
            $this->db->where('idtable', $id);
            $this->db->update('pengguna', $data);
            redirect('admin/index');
        }
    }

    public function newrdir()
    {
        $data = $this->db->get('rdirektorat');
        $this->load->view('NewRdirektorat', $data);
    }

    public function newrpro()
    {
        $data = $this->db->get('rproject');
        $this->load->view('NewRproject', $data);
    }

    public function newrdirdb()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == false) {
        } else {
            $id = $this->input->post('id');
            $data = [
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => ($this->input->post('status')),
            ];
            $this->db->insert('rdirektorat', $data);
            redirect('admin/prd');
        }
    }

    public function newrprodb()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == false) {
        } else {
            $id = $this->input->post('id');
            $data = [
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => ($this->input->post('status')),
            ];
            $this->db->insert('rproject', $data);
            redirect('admin/prs');
        }
    }

    public function updaterpro()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == false) {
        } else {
            $id = $this->input->post('id');
            $data = [
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => ($this->input->post('status')),
            ];
            $this->db->where('id', $id);
            $this->db->update('rproject', $data);
            redirect('admin/prs');
        }
    }

    public function updaterpro1()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        if ($this->form_validation->run() == false) {
        } else {
            $id = $this->input->post('id');
            $data = [
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            $this->db->where('id', $id);
            $this->db->update('rstatus', $data);
            redirect('admin/ph');
        }
    }

    public function daftar()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('registration');
        } else {

            $data = [
                'idpengguna' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'nama' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'levelpengguna' => '1',
                'status' => '1'
            ];
            $this->db->insert('pengguna', $data);
            redirect('auth');
        }
    }

	public function newpassword()
	{
		$iduser = $this->input->post('iduser');
		$newpw = $this->input->post('newpw');

		$data = [
			'password' => md5($newpw),
		];

		$this->db->where('idtable', $iduser);
		$this->db->update('pengguna', $data);
		redirect('admin');
	}

    public function newproject()
    {
        $data['direktorat'] = $this->table_model->joinrdirek();
        $data['rproject'] = $this->table_model->getRproject();
        $this->load->view('newproject', $data);
    }

    public function createproject()
    {
        $data = [
            'direktorat' => $this->input->post('direktorat'),
            'bagian' => $this->input->post('bagian'),
            'pic_name' => $this->input->post('pic_name'),
            'no_surat' => $this->input->post('no_surat'),
            'tanggal' => $this->input->post('tanggal'),
            'project_name' => $this->input->post('project_name'),
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
            'catatan' => $this->input->post('catatan'),
            'rproject' => $this->input->post('rproject'),
            'leadby' => $this->input->post('leadby'),
            'tgl_update' => $this->input->post('tgl_update'),
        ];
        $this->db->insert('project', $data);
        redirect('admin/project');   
    }

    public function deleteproject()
    {
        $id = $this->input->post('id');
        $where = array('project.id' => $id);

        $data['edt1'] = $this->db->select('*')
        ->from('project')->where($where)->get()->row_array();


        // $data['edt1'] = $this->db->get('rpoject');
        $this->load->view('DeleteDataProject', $data);
    }

    public function changeproject()
    {
        $id = $this->input->post('id');
        $data['edt'] = $this->db->get_where('project', array('id' => $id))->row_array();

        $data['direktorat'] = $this->table_model->joinrdirek();
        $data['rproject'] = $this->table_model->getRproject();
        $this->load->view('editproject', $data);
    }

    public function updateproject()
    {
        $id = $this->input->post('id');
        $data = [
            'direktorat' => $this->input->post('direktorat'),
            'bagian' => $this->input->post('bagian'),
            'pic_name' => $this->input->post('pic_name'),
            'no_surat' => $this->input->post('no_surat'),
            'tanggal' => $this->input->post('tanggal'),
            'project_name' => $this->input->post('project_name'),
            'tanggal_awal' => $this->input->post('tanggal_awal'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
            'catatan' => $this->input->post('catatan'),
            'rproject' => $this->input->post('rproject'),
            'leadby' => $this->input->post('leadby'),
            'tgl_update' => $this->input->post('tgl_update'),
        ];
        $this->db->where('id', $id);
        $this->db->update('project', $data);
        redirect('admin/project');   
    }
}
