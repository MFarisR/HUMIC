<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Home extends CI_Model{
    
    public function getIndikator()
    {
        $data = $this->db->get('indikator');
        return $data->result_array();
    }

    public function getBukti()
    {
        $data = $this->db->get('buktidata');
        return $data->result_array();
    }
 
    public function saveIndikator($data){
        $this->db->insert('indikator', $data);
    }

    public function saveBukti($data){
        $this->db->insert('buktidata', $data);
    }
 
    public function updateIndikator($id, $data)
    {
        $this->db->where("no", $id);
        $this->db->update('indikator', $data);
    }

    public function updateBukti($id, $data)
    {
        $this->db->where("no", $id);
        $this->db->update('buktidata', $data);
    }
 
    public function deleteIndikator($id)
    {
        $this->db->where("no", $id);
        $this->db->delete('indikator');
    } 

    public function deleteBukti($id)
    {
        $this->db->where("no", $id);
        $this->db->delete('buktidata');
    } 
}