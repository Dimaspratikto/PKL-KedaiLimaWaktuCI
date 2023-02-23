<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_vfood extends CI_Model 
{
    public function get_all_data()
    {
        return $this->db->get('food');
      
    } 
    public function find($id)
    {
        $result = $this->db->where('id_food', $id)
                           ->limit(1)
                           ->get('food');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return array();
        }
    }
    public function detail_menu($id_food)
    {
        $result = $this->db->where('id_food',$id_food)->get('food');
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
    }
}   