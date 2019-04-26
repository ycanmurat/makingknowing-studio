<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Information_model extends Kodakil_Model
{
	function __construct(){
		parent::__construct();
	}
	
	public function getInformations (){
		$this->db->select('*');
		$this->db->from('information');
		$this->db->where(array('status'=>1,'deleted'=>0));
		$this->db->order_by('sort','ASC');
		$returnGetInformations = $this->db->get();
		if ($returnGetInformations->num_rows()>0) {
			return $returnGetInformations->result();
		} else {
			return false;
		}
	}
}
?>