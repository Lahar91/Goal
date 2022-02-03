<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Plan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_plan');
    }


    public function index($id_subgoal)
    {
        $data = array(
            'tittle' => 'plan',
            'id_subgoal' => $id_subgoal,
            'plan' => $this->m_plan->get_plan($id_subgoal),
            'isi' => 'admin/plan'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function add()
    {
        $id_subgoal = $this->input->post('id_subgoal');
        $data = array(
            'id_subgoal' => $id_subgoal,
            'nama_plan' => $this->input->post('nama_plan'),
            'status_plan' => 'Proses',
        );

        $this->m_plan->add($data);
        redirect('subgoal/plan/' . $id_subgoal);
    }

    public function view($id_plan)
    {
        $data = array(
            'id_goal' => $id_plan,
            'plan' => $this->m_plan->solo_plan($id_plan),
            'isi' => 'admin/view_plan'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function edit()
    {
        $data = array(
            'id_plan' => $this->input->post('id_plan'),
            'id_subgoal' => $this->input->post('id_subgoal'),
            'nama_plan' => $this->input->post('nama_plan'),
            'status_plan' => $this->input->post('status_plan'),
            'catatan_plan' => $this->input->post('catatan_plan')
        );

        $this->m_plan->edit($data);
        redirect('subgoal/plan/' . $this->input->post('id_subgoal'));
    }
}

/* End of file Plan.php */
