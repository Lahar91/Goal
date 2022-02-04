<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Goal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_goal');
        $this->load->model('m_subgoal');
    }


    public function index()
    {
        $data = array(
            'tittle' => 'Goal',
            'isi' => 'admin/goal',
            'goal' => $this->m_goal->get_all_data()

        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }



    public function add()
    {
        $data = array(
            'nama_goal' => $this->input->post('nama_goal'),
            'status_goal' => 'Proses',
        );

        $this->m_goal->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah !!! ');
        redirect('goal');
    }

    public function status()
    {
        $data = array(
            'status_goal' => $this->input->post('status_goal')
        );
        $this->m_goal->status($data);
        redirect('goal');
    }


    public function subgoal($id_goal)
    {
        $crit =  $this->db->get_where('goal', ['id_goal' => $id_goal])->row_array();
        $sucess = $crit['success_goal'];
        $data = array(
            'tittle' => 'SubGoal',
            'id_goal' => $id_goal,
            'crit' => $sucess,
            'subgoal' => $this->m_subgoal->get_subgoal($id_goal),
            'isi' => 'admin/subgoal'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function finish($id_goal)
    {
        $data = array(
            'id_goal' => $id_goal,
            'status_goal' => $this->input->post('status_goal')
        );
        $this->m_goal->finish($data);
        redirect('goal');
    }

    public function criteria($id_goal)
    {
        $data = array(
            'id_goal' => $id_goal,
            'success_goal' => $this->input->post('success_criteria')
        );
        $this->m_goal->criteria($data);
        redirect('goal/subgoal/' . $id_goal);
    }
}

/* End of file Goal.php */
