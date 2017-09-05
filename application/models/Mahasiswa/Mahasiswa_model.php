<?php 

class Mahasiswa_model extends CI_Model
{
	protected $name = 'tb_mahasiswa';

	public function showAll()
	{
		$this->db->select('tb_mahasiswa.*, tb_prodi.name as prodi_name');
		$this->db->from($this->name);
		$this->db->join('prodi_mahasiswa', 'prodi_mahasiswa.mahasiswa_id = tb_mahasiswa.id');
		$this->db->join('tb_prodi', 'tb_prodi.id = prodi_mahasiswa.prodi_id');

		$query = $this->db->get()->result('array');

		return $query;
	}

	public function search($identity)
	{
		$this->db->select('tb_mahasiswa.*, tb_prodi.name as prodi_name');
		$this->db->from($this->name);
		$this->db->join('prodi_mahasiswa', 'prodi_mahasiswa.mahasiswa_id = tb_mahasiswa.id');
		$this->db->join('tb_prodi', 'tb_prodi.id = prodi_mahasiswa.prodi_id');
		$this->db->like('tb_mahasiswa.name',$identity);
		$this->db->or_like('tb_mahasiswa.nim',$identity);

		$query = $this->db->get()->result('array');

		return $query;
	}

	public function insert(array $data)
	{
		$insertMhs = [
			'nim'	=> $data['nim'],
			'name'	=> $data['name']
		];

		$this->db->insert('tb_mahasiswa', $insertMhs);
		$lastIdMhs = $this->db->insert_id();

		$insertPMhs = [
			'mahasiswa_id' 	=> $lastIdMhs,
			'prodi_id'		=> $data['prodi_id'],
		];
		$this->db->insert('prodi_mahasiswa', $insertPMhs);
	}

	public function showMahasiswaByNim($nim)
	{
		$this->db->select('tb_mahasiswa.*, tb_prodi.name as prodi_name, tb_fakultas.name as fakultas_name');
		$this->db->from($this->name);
		$this->db->join('prodi_mahasiswa', 'prodi_mahasiswa.mahasiswa_id = tb_mahasiswa.id');
		$this->db->join('tb_prodi', 'tb_prodi.id = prodi_mahasiswa.prodi_id');
		$this->db->join('tb_fakultas', 'tb_prodi.fakultas_id = tb_fakultas.id');
		$this->db->where('tb_mahasiswa.nim',$nim);

		$query = $this->db->get()->result('array');

		return $query;
	}

	public function update(array $data,$nim)
	{
		$insertMhs = [
			'nim'	=> $data['nim'],
			'name'	=> $data['name']
		];

		$this->db->where('nim', $nim);
		$this->db->update($this->name, $insertMhs);

		return true;
	}

	public function delete($nim)
	{
		$this->db->delete($this->name, ['nim' => $nim]);
	}
}