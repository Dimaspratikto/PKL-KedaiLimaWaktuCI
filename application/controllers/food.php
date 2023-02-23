<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class food extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    
        // if(!empty($this->session->userdata('llogin'))){
        //     redirect('llogin');
        // }
        
        $this->load->model('M_food');
        $this->load->helper(array('form', 'url'));
        
    }
    public function getmakanan(){
        $data= $this->M_food->t_food();
        return $data->result_array();
    }
	public function index()
	{
 
        $data['data_food'] =  $this->M_food->t_food()->result_array();
        // var_dump($data);
        // die;
        $this->load->view ('admin/header');
        $this->load->view('admin/sidebar'); 
		$this->load->view('admin/food/view_food', $data);
		$this->load->view('admin/footer');
   
	}
    public function insert()
    {   
                $config['upload_path']  =   './asset/foto';
                $config['allowed_types']=   'jpg|jpeg|png|gif';
                $config['max_size']     = 3000;
                $config['max_width']    = 3000; 
                $config['max_height']   = 3000; 
                $this->load->library('upload',$config);
                if ( !$this->upload->do_upload('userfile'))
                {
                    echo"Upload Gagal";
                }else
                {
                    $foto_food=$this->upload->data();
                    $foto_food=$foto_food['file_name'];
                    $nama_food = $this->input->post('nama_food',TRUE);
                    $tipe_food = $this->input->post('tipe_food',TRUE);
                    $keterangan = $this->input->post('keterangan',TRUE);
                    $harga_food= $this->input->post('harga_food',TRUE);
                    $data = array (
                        
                        'nama_food'       =>    $nama_food,
                        'tipe_food'       =>    $tipe_food,
                        'keterangan'      =>    $keterangan,
                        'harga_food'      =>    $harga_food,
                        'foto_food'       =>    $foto_food
                );
                $this->M_food->insert($data);
                redirect('food');
                }
    }
    public function edit($id=null)
    {   
        $id=$this->input->post('id_food');
        $config['upload_path']  =   './asset/foto';
        $config['allowed_types']=   'jpg|jpeg|png|gif';
        $config['max_size']     = 3000;
        $config['max_width']    = 3000; 
        $config['max_height']   = 3000; 
        $this->load->library('upload',$config);
        if ( !$this->upload->do_upload('userfile'))
        {
            $nama_food = $this->input->post('nama_food',TRUE);
            $tipe_food = $this->input->post('tipe_food',TRUE);
            $keterangan = $this->input->post('keterangan',TRUE);
            $harga_food= $this->input->post('harga_food',TRUE);
            $data = array (
                
                'nama_food'       =>    $nama_food,
                'tipe_food'       =>    $tipe_food,
                'keterangan'      =>    $keterangan,
                'harga_food'      =>    $harga_food,
    
            );
            $this->db->where('id_food',$id);
            $this->db->update('food',$data);
            redirect('food');
          
        }else
        {
            $foto_food=$this->upload->data();
            $foto_food=$foto_food['file_name'];
            $nama_food = $this->input->post('nama_food',TRUE);
            $tipe_food = $this->input->post('tipe_food',TRUE);
            $keterangan = $this->input->post('keterangan',TRUE);
            $harga_food= $this->input->post('harga_food',TRUE);
            $data = array (
                
                'nama_food'       =>    $nama_food,
                'tipe_food'       =>    $tipe_food,
                'keterangan'      =>    $keterangan,
                'harga_food'      =>    $harga_food,
                'foto_food'       =>    $foto_food
             );
            $this->db->where('id_food',$id);
            $this->db->update('food',$data);
            redirect('food');
        }  
    }
    public function hapus_data($id)
    {
        
        $this->M_food->hapus_data($id);
        redirect('food');
    }
}
