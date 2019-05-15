<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_CRUD extends CI_Model {
	public function getNum($table,$where = null)
	{
		return $this->db->get_where($table,$where)->num_rows();
	}
	public function get($table,$where)
	{
		return $this->db->get_where($table,$where)->row_array();
	}
	public function getAll($table)
	{
		return $this->db->get($table)->result_array();
	}
	public function insertData($table,$data)
	{
		$this->db->insert($table, $data);
	}
	public function updateData($table,$data,$where)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function deleteData($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	

}

/* End of file Model_CRUD.php */
/* Location: ./application/models/Model_CRUD.php */