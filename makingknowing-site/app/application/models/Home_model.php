<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Home_model extends Kodakil_Model
{	
	function __construct(){
		parent::__construct();
	}
	
	public function getInsurance(){
		$this->db->select('*');
		$this->db->from('referances');
		$this->db->where(array('status'=>1,'deleted'=>0,'cat_id'=>1));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		}else{
			return array();
		}
	}

	public function sliders(){
		$this->db->select('*');
		$this->db->from('sliders');
		$this->db->where(array('status'=>1));
		$returnSliders = $this->db->get();
		if ($returnSliders->num_rows()>0) {
			return $returnSliders->result();
		}else{
			return array();
		}
	}

	public function getCategory(){
		$this->db->select('*');
		$this->db->from('slider_category');
		$this->db->where(array('status'=>1,'deleted'=>0,'category_menu'=>1));
		$returnGetCategory = $this->db->get();
		if ($returnGetCategory->num_rows()>0) {
			return $returnGetCategory->result();
		} else {
			return false;
		}
	}

	public function AddDate($array){
		return $this->db->insert('date',$array);
	}

	public function eBulletin($data){
		return $this->db->insert('bulletin',$data);
	}

	public function getReferances(){
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->where(array('status'=>1));
		$this->db->limit(3);
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		}else{
			return array();
		}
	}

	public function getTrend(){
		$this->db->select('product_name,product_image,status,deleted,slug,trend_sort,trend_status');
		$this->db->from('products');
		$this->db->where(array('status'=>1,'deleted'=>0,'trend_status'=>1));
		$this->db->order_by('trend_sort','ASC');
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		}else{
			return false;
		}
	}

	public function getStaticAbout(){
		$this->db->select('*');
		$this->db->from('statik_info');
		$this->db->where(array('Id'=>1));
		$return = $this->db->get();
		if ($return->num_rows()>0) {
			return $return->row();
		}else{
			return false;
		}
	}

	public function getStaticServices(){
		$this->db->select('*');
		$this->db->from('statik_info');
		$this->db->where(array('Id'=>2));
		$return = $this->db->get();
		if ($return->num_rows()>0) {
			return $return->row();
		}else{
			return false;
		}
	}

	public function getBlog()
	{
		$this->db->select('*');
		$this->db->from('information');
		$this->db->where(array('deleted'=>0,'status'=>1));
		$this->db->order_by('sort','ASC');
		$this->db->limit(10);
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		} else {
			return array();
		}
	}

	public function getBrand()
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where(array('deleted'=>0,'status'=>1));
		$this->db->order_by('Id','DESC');
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		} else {
			return array();
		}
	}
	
}
?>