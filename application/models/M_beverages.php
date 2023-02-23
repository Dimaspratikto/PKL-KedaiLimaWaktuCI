<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_beverages extends CI_Model 
{
    public function t_beverages()
    {
            return $this->db->get('beverages');
    }    
    function insert($data)
	{
			$this->db->insert('beverages', $data);
	}                    
    function ubah($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('beverages', $data);
        return TRUE;
    }    
    function hapus_data($id)
    {
        $this->db->where('id_beverages', $id );
        $this->db->delete('beverages');
    }                
}
                        
/* End of file M_food_model.php */
    
                        