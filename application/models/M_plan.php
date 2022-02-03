<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_plan extends CI_Model
{
    public function add($data)
    {
        $this->db->insert('plan', $data);
    }

    public function get_plan($id_subgoal)
    {
        $this->db->select('*');
        $this->db->from('plan');
        $this->db->where('id_subgoal', $id_subgoal);

        return $this->db->get()->result();
    }

    public function solo_plan($id_plan)
    {
        $this->db->select('*');
        $this->db->from('plan');
        $this->db->where('id_plan', $id_plan);
        return $this->db->get()->row();
    }
    public function edit($data)
    {
        $this->db->where('id_plan', $data['id_plan']);
        $this->db->update('plan', $data);
    }
}

/* End of file M_plan.php */
