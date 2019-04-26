<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class slider_category_model extends Kodakil_Model {

	function __construct() {
		parent::__construct();
	}

	public function updateCategory($categoryInformation,$id) {
		return $this->db->set($categoryInformation)->where(array('id' => $id))->update('slider_category');
	}

	public function getCategoryInformation($id) {
		$this->db->select('*');
		$this->db->from('slider_category');
		$this->db->where(array('id' => $id, 'deleted' => 0));
		$getCategoryInformationQuery = $this->db->get();
		if ($getCategoryInformationQuery->num_rows() > 0) {
			return $getCategoryInformationQuery->row();
		} else {
			return false;
		}
	}

	public function categoryInformation() {
		$this->db->select('*');
		$this->db->from('slider_category');
		$this->db->where(array('deleted' => 0));
		$categoryInformationQuery = $this->db->get();
		if ($categoryInformationQuery->num_rows() > 0) {
			return $categoryInformationQuery->result();
		} else {
			return false;
		}
	}

	public function addCategory($CategoryInformation) {
		return $this->db->insert('slider_category',$CategoryInformation);
	}
	
	public function categoryStatusUpdate($id,$newInfo) {
		return $this->db->where(array('id' => $id))->set(array('status' => $newInfo))->update('slider_category');
	}

	public function deleteCategory($id) {
		return $this->db->where(array('id' => $id))->set(array('deleted' => '1'))->update('slider_category');
	}

	public function ImageUpload() {
		if ($_FILES['file']["type"] == 'application/octet-stream' OR 
				$_FILES['file']["type"] == 'application/postscript' OR 
					$_FILES['file']["type"] == 'image/png' OR 
						$_FILES['file']["type"] == 'image/jpeg' OR 
							$_FILES['file']["type"] == 'image/gif' OR 
								$_FILES['file']["type"] =='image/svg+xml' OR 
									$_FILES['file']["type"] == 'application/pdf') {
		$target_dir = "assets/uploads/";
		$rand = rand(10,999999999999);
		$rand = md5(md5($rand).md5(strtotime('now')));
		$target_file = $target_dir.$rand.url_seo($_FILES['file']["name"]);
		$newname = "";
		$namearr = explode('-', $target_file);
		$count = count($namearr)-1;
		foreach ($namearr as $key => $val) {
			if($key == $count) {
				$newname .= ".".$val;
			} elseif ($key == 0) {
				$newname .= $val;
			} else {
				$newname .= "-".$val;
			}
		}
		$target_file = $newname;
		if (move_uploaded_file($_FILES['file']["tmp_name"], $target_file)) {
			return $target_file;
		} else {
			return false;
			}
		} else {
			return false;
		}
	}

	public function categoryHomeUpdate($id,$newMenuInfo){
		if ($newMenuInfo==1) {
			$this->db->select('category_menu');
			$this->db->from('slider_category');
			$this->db->where(array('category_menu'=>1,'deleted'=>0,'status'=>1));
			$returnQuery = $this->db->get();
			if ($returnQuery->num_rows()<6) {
				return $this->db->where(array('id' => $id))->set(array('category_menu' => $newMenuInfo))->update('slider_category');
			} else {
				return false;
			}
		} else {
			return $this->db->where(array('id' => $id))->set(array('category_menu' => $newMenuInfo))->update('slider_category');
		}
	}

	public function thirdImageUpload(){
			if ($_FILES['file']["type"] == 'application/octet-stream' OR 
					$_FILES['file']["type"] == 'application/postscript' OR 
						$_FILES['file']["type"] == 'image/png' OR 
							$_FILES['file']["type"] == 'image/jpeg' OR 
								$_FILES['file']["type"] == 'image/gif' OR 
									$_FILES['file']["type"] =='image/svg+xml' OR 
										$_FILES['file']["type"] == 'application/pdf'){

			$target_dir 	= "assets/uploads/";
			$rand 			= rand(10,999999999999);
			$rand 			= md5(md5($rand).md5(strtotime('now')));
			$target_file 	= $target_dir.$rand.url_seo($_FILES['file']["name"]);
			$newname 		= "";
			$namearr 		= explode('-', $target_file);
			$count 			= count($namearr)-1;
			foreach ($namearr as $key => $val){
				if($key == $count){
					$newname .= ".".$val;
				}elseif ($key == 0){
					$newname .= $val;
				}else{
					$newname .= "-".$val;
				}
			}
			$target_file 	= $newname;
			if (move_uploaded_file($_FILES['file']["tmp_name"], $target_file)){
				return $target_file;
				}else{
					return false;
				}
			}else{
				return false;
			}
	}

	public function getCategories(){
		$this->db->select('id,category_name,status,deleted');
		$this->db->from('slider_category');
		$this->db->where(array('status'=>1,'deleted'=>0));
		$returnGetCategories = $this->db->get();
		if ($returnGetCategories->num_rows()>0) {
			return $returnGetCategories->result();
		} else {
			return false;
		}
	}

	public function addContent($PostData){
		return $this->db->insert('category_content',$PostData);
	}

	public function getContent(){
		$this->db->select('sc.id s_id,sc.category_name s_category_name,sc.deleted s_deleted,sc.category_slug s_category_slug,cc.*');
		$this->db->from('slider_category sc');
		$this->db->join('category_content cc', 'cc.cat_id = sc.id');
		$this->db->where(array('cc.deleted'=>0,'sc.deleted'=>0));
		$returnGetContent = $this->db->get();
		if ($returnGetContent->num_rows()>0) {
			return $returnGetContent->result();
		} else {
			return false;
		}
	}

	public function deleteContent($id) {
		return $this->db->where(array('id' => $id))->set(array('deleted' => '1'))->update('category_content');
	}

	public function contentStatusUpdate($id,$newInfo) {
		return $this->db->where(array('id' => $id))->set(array('status' => $newInfo))->update('category_content');
	}

	public function getContentRow($id){
		$this->db->select('*');
		$this->db->from('category_content');
		$this->db->where(array('id'=>$id));
		$returnGetContentRow = $this->db->get();
		if ($returnGetContentRow->num_rows()>0) {
			return $returnGetContentRow->row();
		} else {
			return false;
		}
	}

	public function UpdateContent($PostData,$id){
		return $this->db->where(array('id'=>$id))->set($PostData)->update('category_content');
	}

}
?>