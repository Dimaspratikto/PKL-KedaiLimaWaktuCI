
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_vaboutus extends CI_Model 
{
    public function get_all_data()
    {
        return $this->db->get('aboutus');
      
    } 
}   