<?php

class ModelVIP extends CI_Model
{

    public function save_vip_info($data)
    {
        return $this->db->insert('vip', $data);
    }

    public function get_vip_info()
    {
        $this->db->select('*');
        $this->db->from('vip');
        $info = $this->db->get();
        return $info->result();
    }

    public function edit_vip_info($id)
    {
        $this->db->select('*');
        $this->db->from('vip');
        $this->db->where('id_vip', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function delete_vip_info($id)
    {
        $this->db->where('id_vip', $id);
        return $this->db->delete('vip');
    }
    public function update_vip_info($id, $data)
    {
        $this->db->where('id_vip', $id);
        return $this->db->update('vip', $data);
    }
}