<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Referances_model extends Kodakil_Model
{	
	function __construct()
	{
		parent::__construct();
	}

	public function getReferances()
	{
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->where(array('status'=>1));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		}else{
			return false;
		}
	}
}
?>