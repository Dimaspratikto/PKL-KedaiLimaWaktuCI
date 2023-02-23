<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_vbeverages extends CI_Model 
{
    public function get_all_data()
    {
        return $this->db->get('beverages');
      
    } 
}   