<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_aboutus extends CI_Model 
{
    public function t_aboutus()
    {
            return $this->db->get('aboutus');
    }    
    function insert($data)
	{
			$this->db->insert('aboutus', $data);
	}                    
    function ubah($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('aboutus', $data);
        return TRUE;
    }    
    function hapus_data($id)
    {
        $this->db->where('id_aboutus', $id );
        $this->db->delete('aboutus');
    }                
}
                        
/* End of file M_aboutus_model.php */
    
                        