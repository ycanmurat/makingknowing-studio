<?php 
class About_model extends Kodakil_model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getWhatWeDo()
	{
		$this->db->where(array('deleted' => 0));
		$q = $this->db->get('menu');
		if ($q->num_rows() > 0) {
			return $q->result(); 
		}else{
			return array();
		}
	}

	public function getWhatWeDoWithId($id)
	{
		$this->db->where(array('deleted' => 0, 'id' => $id));
		$q = $this->db->get('menu');
		if ($q->num_rows() > 0) {
			return $q->row(); 
		}else{
			return false;
		}
	}

	public function getArchivment()
	{
		$this->db->where('main_menu',1);
		$q = $this->db->get('archivment');
		if ($q->num_rows() > 0) {
			return $q->result();
		}else{
			return array();
		}
	}
}
?>