<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_event extends CI_Model 
{
    public function t_event()
    {
            return $this->db->get('event');
    }    
    function insert($data)
	{
			$this->db->insert('event', $data);
	}                    
    function ubah($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('event', $data);
        return TRUE;
    }    
    function hapus_data($id)
    {
        $this->db->where('id_event', $id );
        $this->db->delete('event');
    }                
}
                        
/* End of file M_event_model.php */
    
                        