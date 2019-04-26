<?php 
class Blog_model extends Kodakil_model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getList()
	{
		$this->db->select('*');
		$this->db->from('information');
		$this->db->where(array('deleted'=>0,'status'=>1));
		$this->db->order_by('sort','ASC');
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		} else {
			return array();
		}
	}

	public function getSecurityAndResult($slug){
		$this->db->select('*');
		$this->db->from('information');
		$this->db->where(array('information_title_slug'=>$slug));
		$getQuery = $this->db->get();
		if ($getQuery->num_rows()>0) {
			return $getQuery->row();
		}else{
			return false;
		}

	}
}
?>