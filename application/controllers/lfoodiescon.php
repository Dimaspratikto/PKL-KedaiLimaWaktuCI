<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lfoodiescon extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_vfood');        
    }
	public function index()
	{
		$data['data_food'] =$this->M_vfood->get_all_data()->result_array();
		// $data = array(
		// 	'food' =>$this->M_vfood->get_all_data(),
		// ); 
        $this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/l_foodies/view_lfoodies', $data);
		$this->load->view('layout/footer');
	}
	public function tambah_ke_keranjang($id)
	{
		$food = $this ->M_vfood->find($id);
		$data = array(
			'id'	=> $food->id_food,
			'qty'	=> 1,
			'price'	=> $food->harga_food,
			'name'	=> $food->nama_food

		); 
		$this->cart->insert($data);
		redirect('lfoodiescon');
	}
	public function detail_keranjang()
	{
		// $data['data_food'] =$this->M_vfood->get_all_data()->result_array();
		// $data = array(
		// 	'food' =>$this->M_vfood->get_all_data(),
		// ); 
        $this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/keranjang');
		$this->load->view('layout/footer');
	}
	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('lfoodiescon');
	}
	public function lanjut_pesan()
	{
		$this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/pesan');
		$this->load->view('layout/footer');
	}
	public function proses_pesan()
	{
		
		$is_prosesed = $this->M_invoice->index();
		if($is_prosesed){
		$this->cart->destroy();
		$this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/proses_pesan');
		$this->load->view('layout/footer');
		}else{
			echo "Maaf, Pesanan Anda Kosong";
		}
		
	}
	public function detail($id_food)
	{
		$data['food'] = $this->M_vfood->detail_menu($id_food);
		$this->load->view('layout/header');
		//$this->load->view('layout/sidebar');
		$this->load->view('layout/detail_menu',$data);
		$this->load->view('layout/footer');
	}
}