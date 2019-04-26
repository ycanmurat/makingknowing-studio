<?php 
/**
 * 
 */
class City extends Kodakil_model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getCity()
	{
		$q = $this->db->get('city');
		if ($q->num_rows()>0) {
			$city = $q->result();
			return $city;
		}else{
			return array();
		}
	}

	public function getCityName($city)
	{
		$this->db->where(array('url' => $city));
		$q = $this->db->get('city');
		if ($q->num_rows()>0) {
			$city = $q->row();
			return $city;
		}else{
			return false;
		}
	}
}
?>