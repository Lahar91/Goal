<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_subgoal extends CI_Model
{

    public function add($data)
    {
        $this->db->insert('subgoal', $data);
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
        $this->db->where('id_subgoal', $data['id_subgoal']);
        $this->db->update('subgoal', $data);
    }

    public function criteria($data)
    {
        $this->db->where('id_subgoal', $data['id_subgoal']);
        $this->db->update('subgoal', $data);;
    }
}

/* End of file Goal.php */
