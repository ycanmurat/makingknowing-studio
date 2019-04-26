<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Campaign_model extends Kodakil_Model{

	function __construct(){
		parent::__construct();
	}

	public function getTrend(){
		$this->db->select('Id,product_name,status,deleted,trend_sort,trend_status');
		$this->db->from('products');
		$this->db->where(array('status'=>1,'deleted'=>0));
		$this->db->order_by('Id','DESC');
		$queryResult = $this->db->get();
		if ($queryResult->num_rows()>0) {
			return $queryResult->result();
		}else{
			return false;
		}
	}

	public function editTrendStatus($Id,$newStatus){
		return $this->db->set(array('trend_status'=>$newStatus))->where(array('Id'=>$Id))->update('products');
	}

	public function sortUpdate($statusArray){
		return $this->db->update_batch('products', $statusArray, 'Id');
	}

}
?>