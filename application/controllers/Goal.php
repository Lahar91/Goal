<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Goal extends CI_Controller
{

    public function index()
    {
        $data = array(
            'tittle' => 'Goal',
            'isi' => 'admin/Goal'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Goal.php */
