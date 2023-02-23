<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_Admin extends CI_Model 
{
    public function total_food(){
        return $this->db->get('food')->num_rows();
    }
    public function total_beverages(){
        return $this->db->get('beverages')->num_rows();
    }
}