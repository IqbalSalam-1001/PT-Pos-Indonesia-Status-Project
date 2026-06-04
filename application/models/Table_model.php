<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Table_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTabel()
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $query = $this->db->get();
        return $query->result();
    }

    public function getHproject()
    {
        return $this->db->get('hproject')->result_array();
    }

    public function getRstatus()
    {
        return $this->db->get('rstatus')->result_array();
    }

    public function getrproject()
    {
        $this->db->select('*');
        $this->db->from('rproject');
        $query = $this->db->get();
        return $query->result();
    }

    public function getdirektorat()
    {
        return $this->db->get('rdirektorat')->result_array();
    }

    public function getproject()
    {
        return $this->db->get('project')->result_array();
    }

    public function getView_Progress()
    {
        return $this->db->get('view_progress')->result_array();
    }

    public function getView_hproject()
    {
        return $this->db->get('view_hproject')->result_array();
    }

    public function join()
    {
        $this->db->select('*');
        $this->db->from('rstatus');
        $this->db->join('rproject', 'rproject.status=rstatus.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function joinrdirek()
    {
        $this->db->select('*');
        $this->db->from('rdirektorat');
        $query = $this->db->get();
        return $query->result();
    }

    public function joinview_progress()
    {
        $this->db->select('*');
        $this->db->from('view_progress');
        $query = $this->db->get();
        return $query->result();
    }

    public function joinview_hproject()
    {
        $this->db->select('hproject.*, project.id as idproj, project.project_name, rproject.id as idrproj, rproject.deskripsi');
        $this->db->from('hproject');
        $this->db->join('project', 'project.id = hproject.idproject');
        $this->db->join('rproject', 'rproject.id = hproject.rproject');
        $this->db->order_by('hproject.id');
        $query = $this->db->get()->result();

        return $query;
    }

    public function totalrdirek()
    {
        return $this->db->from("rdirektorat")->count_all_results();
    }

    public function totalrproject()
    {
        return $this->db->from("rproject")->count_all_results();
    }

    public function totalrstatus()
    {
        return $this->db->from("rstatus")->count_all_results();
    }

    public function totalrmember()
    {
        return $this->db->from("pengguna")->count_all_results();
    }
}
