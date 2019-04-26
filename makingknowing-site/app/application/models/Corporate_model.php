<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Corporate_model extends Kodakil_Model
{
	function __construct(){
		parent::__construct();
	}
	
	public function get(){
		$this->db->select('*');
		$this->db->from('corporate');
		$this->db->where(array('Id'=>'1'));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->row();
		}else{
			return false;
		}
	}

	public function getInsurance (){
		$this->db->select('*');
		$this->db->from('referances');
		$this->db->where(array('deleted'=>0,'status'=>1,'cat_id'=>1));
		$this->db->order_by('Id','DESC');
		$returnGetInsurance = $this->db->get();
		if ($returnGetInsurance->num_rows()>0) {
			return $returnGetInsurance->result();
		} else {
			return false;
		}
	}

	public function getFleet (){
		$this->db->select('*');
		$this->db->from('referances');
		$this->db->where(array('deleted'=>0,'status'=>1,'cat_id'=>2));
		$this->db->order_by('Id','DESC');
		$returnGetFleet = $this->db->get();
		if ($returnGetFleet->num_rows()>0) {
			return $returnGetFleet->result();
		} else {
			return false;
		}
	}

	public function getSSS (){
		$this->db->select('*');
		$this->db->from('faq');
		$this->db->where(array('deleted'=>0,'status'=>1));
		$this->db->order_by('sort','ASC');
		$returnGetSSS = $this->db->get();
		if ($returnGetSSS->num_rows()>0) {
			return $returnGetSSS->result();
		} else {
			return false;
		}
	}

	public function getBlogs()
	{
		$this->db->order_by('sort','ASC');
		$this->db->where(array('status' => 1, 'deleted' => 0));
		$q = $this->db->get('Mkblog');

		if ($q->num_rows()>0) {
			return $q->result();
		} else {
			return array();
		}
	}

	public function getChannels()
	{
		$this->db->order_by('sort','ASC');
		$this->db->where(array('status' => 1, 'deleted' => 0));
		$q = $this->db->get('channel');

		if ($q->num_rows()>0) {
			return $q->result();
		} else {
			return array();
		}
	}

	public function getPodcasts()
	{
		$this->db->order_by('sort','ASC');
		$this->db->where(array('status' => 1, 'deleted' => 0));
		$q = $this->db->get('podcast');

		if ($q->num_rows()>0) {
			return $q->result();
		} else {
			return array();
		}
	}

	public function getWorks()
	{
		$this->db->order_by('sort','ASC');
		$this->db->where(array('status' => 1, 'deleted' => 0));
		$q = $this->db->get('works');

		if ($q->num_rows()>0) {
			return $q->result();
		} else {
			return array();
		}
	}

	public function getSubWorks($id)
	{
		$this->db->order_by('sort','ASC');
		$this->db->where(array('status' => 1, 'deleted' => 0,' main_menu' => $id));
		$q = $this->db->get('main_works');
		// prex($this->db->last_query());
		if ($q->num_rows()>0) {
			return $q->result();
		} else {
			return array();
		}
	}

	public function getWorkDetail($id)
	{
		$rt = new StdClass;
		$this->db->order_by('sort','ASC');
		$this->db->where(array('status' => 1, 'deleted' => 0));
		$q = $this->db->get('works');

			// prex($this->db->last_query());
		
		if ($q->num_rows()>0) {
			$rt = $q->row();

			$this->db->order_by('sort','ASC');
			$this->db->where(array('status' => 1, 'deleted' => 0,'main_menu' => $id));
			$q = $this->db->get('works_detail');


			if ($q->num_rows()>0) {
				$rt->sub = $q->result();
			}else{
				$rt->sub = array();
			}
			return $rt;
		} else {
			return false;
		}
	}

	public function getStatics($url)
	{
		$this->db->where(array('statics_status' => 1, 'statics_link' => $url));
		$q = $this->db->get('statics');
		if ($q->num_rows()>0) {
			return $q->row();
		} else {
			return false;
		}
	}
}
?>