<?php
/**
 * 
 */
class Sayfa_model extends Kodakil_Model
{
	
	function __construct(){
		parent::__construct();
	}

	public function getContent($title_slug){
		$this->db->select('n.*,m.*');
		$this->db->from('news n');
		$this->db->join('menu m','m.Id = n.menu_id');
		$this->db->where(array('n.title_slug' => $title_slug));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->row();
		}else{
			return false;
		}
	}
}
?>