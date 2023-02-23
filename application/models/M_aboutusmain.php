<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_aboutusmain extends CI_Model 
{
    public function t_aboutusmain()
    {
            return $this->db->get('aboutusmain');
    }    
    function insert($data)
	{
			$this->db->insert('aboutusmain', $data);
	}                    
    function ubah($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('aboutusmain', $data);
        return TRUE;
    }    
    function hapus_data($id)
    {
        $this->db->where('id_aboutusmain', $id );
        $this->db->delete('aboutusmain');
    }                
}
                        
/* End of file M_aboutus_model.php */
    
                        