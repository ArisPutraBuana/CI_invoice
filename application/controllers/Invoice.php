<?php
class Invoice extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_invoice');
	}

	function index(){
		$x['invoice']=$this->m_invoice->get_no_invoice();
		$this->load->view('v_invoice',$x);
	}
	function simpan_invoice(){
		$no_invoice=$this->input->post('no_invoice');
		$this->m_invoice->simpan_invoice($no_invoice);
		redirect('invoice');
	}

}