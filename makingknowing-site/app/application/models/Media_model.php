<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Media_model extends Kodakil_Model
{	
	function __construct(){
		parent::__construct();
	}

	/*
	public function getList($sayfa){
		$data 				= new StdClass;
		$pageBy 			= 3;
		$this->db->where(array('lang_id'=>Lang_id));
		$totalCount 		= $this->db->count_all_results('news');
		$pageCount 			= $totalCount/$pageBy;
		if ($sayfa == 0 || $sayfa == 1) {
			$this->db->limit($pageBy,0);
		}else{
			$sayfa 			= $sayfa-1;
			$sayfa 			= $sayfa*$pageBy;
			$this->db->limit($pageBy,$sayfa);
		}
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where(array('lang_id'=>Lang_id));
		$this->db->order_by('Id','DESC');
		$q 					= $this->db->get();
		$data->list 		= $q->result();
		$data->pageCount 	= $pageCount;
		$data->totalCount 	= $totalCount;
		if ($q->num_rows()>0) {
			return $data;
		}
		else{
			return false;
		}
	}
	public function getNews($news_slug){
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where(array('news_slug'=>$news_slug));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()==1) {
			return $returnQuery->row();
		}else{
			return false;
		}
	}
	*/

	public function getFoto()
	{
		$this->db->where('status',1);
		$this->db->order_by('id','asc');
		$q = $this->db->get('galery_image');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}

	public function getVideo()
	{
		$this->db->where('status',1);
		$this->db->order_by('id','asc');
		$q = $this->db->get('galery_video');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}
}
?>