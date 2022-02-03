<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Subgoal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_subgoal');
        $this->load->model('m_plan');
    }

    public function index($id_goal)
    {
        $data = array(
            'tittle' => 'SubGoal',
            'id_goal' => $id_goal,
            'subgoal' => $this->m_subgoal->get_subgoal($id_goal),
            'isi' => 'admin/subgoal'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function add()
    {

        $id_goal = $this->input->post('id_goal');
        $data = array(
            'id_goal' => $id_goal,
            'nama_subgoal' => $this->input->post('nama_subgoal'),
            'status_subgoal' => 'Proses',
        );

        $this->m_subgoal->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah !!! ');
        redirect('goal/subgoal/' . $id_goal);
    }



    public function finish($id_subgoal)
    {
        $data = array(
            'id_subgoal' => $id_subgoal,
            'status_subgoal' => $this->input->post('status_subgoal')
        );
        redirect('goal');

        $this->m_subgoal->finish($data);
    }

    public function plan($id_subgoal)
    {
        $data = array(
            'tittle' => 'Plan',
            'id_subgoal' => $id_subgoal,
            'plan' => $this->m_plan->get_plan($id_subgoal),
            'isi' => 'admin/plan'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Subgoal.php */
