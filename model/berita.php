<?php

/**
*
*
/


include_once'Model.php';
class Berita extends Model
{
	public function ambilBerita()
	{
	$query = $this->db->prepare("SELECT * from berita");
	$query -> execute();
	$data = Squery->fetchAll();

	return $data;

	}
}
?>