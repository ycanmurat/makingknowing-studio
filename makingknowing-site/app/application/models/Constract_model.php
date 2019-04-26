<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Constract_model extends Kodakil_Model
{
	function __construct(){
		parent::__construct();
	}

	public function menu()
	{
		$this->db->select('id,sort,menu');
		$this->db->where(array('status'=> 1,'deleted' => 0));
		$this->db->order_by('sort','ASC');
		$q = $this->db->get('menu');
		if ($q->num_rows()>0) {
			$menus = $q->result();
			foreach ($menus as $key => $val) {
				$this->db->select('id,product_name,product_image,slug');
				$this->db->where(array('status'=> 1,'deleted' => 0,'menu_id' => $val->id));
				$this->db->order_by('sort','ASC');
				$q = $this->db->get('products');
				if ($q->num_rows()>0) {

					$menus[$key]->products = $q->result();
				}else{
					$menus[$key]->products = array();
				}
			}
			return $menus;
		}else{
			return array();
		}
	}

	public function productMenu()
	{
		$this->db->select('id,sort,menu,slug,menu_image');
		$this->db->where(array('status'=> 1,'deleted' => 0,'main_menu' => 0));
		$this->db->order_by('sort','ASC');
		$q = $this->db->get('menu2');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return false;
		}
	}
	
	public function getLangStatics()
	{
		$this->db->where(array('id' => 2));
		$q = $this->db->get('languages');
		return json_decode($q->row()->lang_json);
	}

	public function getServices()
	{
		$this->db->where(array('status' => 1,'deleted' => 0));
		$this->db->limit(7);
		$q = $this->db->get('slider_category');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}

	public function getCampaign()
	{
		$this->db->where(array('status' => 1,'deleted' => 0));
		$this->db->limit(7);
		$q = $this->db->get('campaign_menu');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}
}
?>