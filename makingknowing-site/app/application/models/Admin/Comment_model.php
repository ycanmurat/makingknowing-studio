<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Comment_model extends Kodakil_Model{

	function __construct(){
		parent::__construct();
	}

	public function ImageUpload()
	{
		if ($_FILES['file']["type"] == 'application/octet-stream' OR 
					$_FILES['file']["type"] == 'application/postscript' OR 
						$_FILES['file']["type"] == 'image/png' OR 
							$_FILES['file']["type"] == 'image/webp' OR 
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

	public function setAdd($data)
	{
		return $this->db->insert('comment',$data);
	}

	public function getAllComment()
	{
		$q = $this->db->get('comment');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return $q = array();
		}
	}

	public function editStatus($id,$status)
	{
		$this->db->where('id',$id);
		$this->db->set('status',$status);
		$this->db->update('comment');
		return 1;
	}

	public function editMainPage($id,$status)
	{
		$this->db->where('id',$id);
		$this->db->set('main_page',$status);
		$this->db->update('comment');
		return 1;
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('comment');
		return 1;
	}

	public function setAddUpdate($data){
		$this->db->where(array('statik'=>1));
		$this->db->set($data);
		$this->db->update('comment');
		return 1;
	}	

	public function getCommentById($Id){
		$this->db->from('comment');
		$this->db->where(array('Id'=>$Id));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->row();
		} else {
			return array();
		}
	}

	public function update($postData,$Id)
	{
		return $this->db->set($postData)->where(array('Id'=>$Id))->update('comment');
	}
}
?>