<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_slide extends CI_Model 
{
    public function t_slide()
    {
            return $this->db->get('slide');
    }    
    function insert($data)
	{
			$this->db->insert('slide', $data);
	}                    
    function ubah($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('slide', $data);
        return TRUE;
    }    
    function hapus_data($id)
    {
        $this->db->where('id_slide', $id );
        $this->db->delete('slide');
    }                
}
                        
/* End of file M_slide_model.php */
    
                        