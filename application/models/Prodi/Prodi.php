<?php 

class Prodi extends CI_Model
{
	protected $name = 'tb_prodi';

	public function show()
	{
		return $this->db->get($this->name)->result('array');
	}
}