<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_goal extends CI_Model
{

    public function add($data)
    {
        $this->db->insert('goal', $data);
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('goal');

        return $this->db->get()->result();
    }


    public function get_subgoal($id_goal)
    {
        $this->db->select('*');
        $this->db->from('subgoal');
        $this->db->where('id_goal', $id_goal);
        $this->db->order_by('id_goal', 'desc');

        return $this->db->get()->result();
    }

    public function finish($data)
    {
        $this->db->where('id_goal', $data['id_goal']);
        $this->db->update('goal', $data);
    }
}

/* End of file Goal.php */
