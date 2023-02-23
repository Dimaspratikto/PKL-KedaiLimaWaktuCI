<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_food extends CI_Model 
{
    public function t_food()
    {
            return $this->db->get('food');
    }    
    function insert($data)
	{
			$this->db->insert('food', $data);
	}                    
    function ubah($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('food', $data);
        return TRUE;
    }    
    function hapus_data($id)
    {
        $this->db->where('id_food', $id );
        $this->db->delete('food');
    }                
}
                        
/* End of file M_food_model.php */
    
                        