<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	protected $primary_model = 'Mahasiswa/mahasiswa_model';
	protected $model;

	public function __construct()
	{
		parent::__construct();
		$this->load->model($this->primary_model);
		$this->load->helper('html');
		$this->load->library('session');
	}

	public function index()
	{
		$data = $this->mahasiswa_model->showAll();

		$this->load->view('mahasiswa/index', ['data' => $data]);
	}

	public function search()
	{
		$identity = $this->input->get('identity', TRUE);

		$data = $this->mahasiswa_model->search($identity);

		var_dump($data);
	}

	public function detail($nim)
	{
		$data = $this->mahasiswa_model->showMahasiswaByNim($nim);

		$this->load->view('mahasiswa/detail', ['data' => $data]);
	}

	public function new()
	{
		$this->load->model('Prodi/prodi');

		$prodi = $this->prodi->show();

		$this->load->view('mahasiswa/create', ['prodi' => $prodi]);
	}

	public function insert()
	{
		$data = $this->input->post();

		$this->mahasiswa_model->insert($data);

		$this->session->set_flashdata('message', 'create sukses');
		
		redirect('/mahasiswa');
	}

	public function edit($nim)
	{
		$data = $this->mahasiswa_model->showMahasiswaByNim($nim);

		$this->load->view('mahasiswa/edit', ['data' => $data]);
	}

	public function update($nim)
	{
		$data = $this->input->post();

		$update = $this->mahasiswa_model->update($data, $nim);

		if (!$update) {
			$this->session->set_flashdata('message', 'update error');
			redirect('mahasiswa/edit/'.$nim);
		}

		$this->session->set_flashdata('message', 'update sukses');

		redirect('mahasiswa');
	}

	public function delete()
	{
		$nim = $this->uri->segment(3);

		$this->mahasiswa_model->delete($nim);

		$this->session->set_flashdata('message', 'delete sukses');

		redirect('mahasiswa');		
	}
}