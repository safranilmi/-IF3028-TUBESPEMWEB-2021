<?php 

class detail_m extends CI_Model
{
	
	public function get()
	{
		$query = $this->db->query("SELECT * FROM lapor WHERE id_lapor = $id ");
		return $query;
	}
}

 ?> 