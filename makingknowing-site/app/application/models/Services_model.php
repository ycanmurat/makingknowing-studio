<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Services_model extends Kodakil_Model
{
	function __construct(){
		parent::__construct();
	}

	public function getCategory(){
		$this->db->select('*');
		$this->db->from('slider_category');
		$this->db->where(array('status'=>1,'deleted'=>0));
		$returnGetCategory = $this->db->get();
		if ($returnGetCategory->num_rows()>0) {
			return $returnGetCategory->result();
		} else {
			return false;
		}
	}

	public function getServicesTitle($slug){
		$this->db->select('category_slug');
		$this->db->from('slider_category');
		$this->db->where(array('category_slug'=>$slug));
		$getServicesTitleQuery = $this->db->get();
		if ($getServicesTitleQuery->num_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	public function servicesContent($slug,$content_slug){
		$this->db->select('Id,title,menu_slug');
		$this->db->from('menu');
		$this->db->where(array('title'=>$slug,'menu_slug'=>$content_slug));
		$servicesContentQuery = $this->db->get();
		if ($servicesContentQuery->num_rows()>0) {
			return $servicesContentQuery->row();
		}else{
			return false;
		}
	}

	public function getServicesList($Id){
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where(array('menu_id'=>$Id,'status'=>1,'deleted'=>0));
		$getServicesListQuery = $this->db->get();
		if ($getServicesListQuery->num_rows()>0) {
			return $getServicesListQuery->result();
		}else{
			return false;
		}
	}
	public function getList($sayfa,$Id)
	{
		$data 				= new StdClass;
		$pageBy 			= 9;
		$this->db->where(array('deleted'=>0,'menu_id'=>$Id,'status'=>1));
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
		$this->db->where(array('deleted'=>0,'menu_id'=>$Id,'status'=>1));
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
	public function getServicesContent($content_slug){
		$this->db->select('title_slug');
		$this->db->from('news');
		$this->db->where(array('title_slug'=>$content_slug));
		$getServicesContentQuery = $this->db->get();
		if ($getServicesContentQuery->num_rows()>0) {
			return true;
		}else{
			return false;
		}
	}
	public function getContent($content_slug,$slug){
		$this->db->select('*');
		$this->db->from('slider_category');
		$this->db->where(array('category_slug'=>$slug));
		$return = $this->db->get();
		if ($return->num_rows()>0) {
			$this->db->select('*');
			$this->db->from('category_content');
			$this->db->where(array('category_slug'=>$content_slug));
			$getContent = $this->db->get();
			if ($getContent->num_rows()>0) {
				return $getContent->row();
			}else{
				return false;
			}
		} else {
			return false;
		}
	}

	public function getServices($slug){
		$this->db->select('sc.id s_id,sc.category_slug s_category_slug,sc.status s_status,sc.deleted s_deleted,cc.*');
		$this->db->from('slider_category sc');
		$this->db->join('category_content cc','sc.id = cc.cat_id');
		$this->db->where(array('sc.status'=>1,'sc.deleted'=>0,'cc.status'=>1,'cc.deleted'=>0,'sc.category_slug'=>$slug));
		$returngetContent = $this->db->get();
		if ($returngetContent->num_rows()>0) {
			return $returngetContent->result();
		} else {
			return false;
		}
	}

	public function getCategoryMenu(){
		$this->db->select('*');
		$this->db->from('slider_category');
		$this->db->where(array('status'=>1,'deleted'=>0));
		$this->db->order_by('id','DESC');
		$this->db->limit(7);
		$returngetCategoryMenu = $this->db->get();
		if ($returngetCategoryMenu->num_rows()>0) {
			return $returngetCategoryMenu->result();
		} else {
			return false;
		}
	}


}
?>