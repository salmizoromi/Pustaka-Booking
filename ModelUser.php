<?php
defined('BASEPATH') or exit('No direct scrip access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->inset('user', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function cekUserAccess($where = null)
    (
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    )

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10,0);
        return $this->db->get();
    }
}