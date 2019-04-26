<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Corporate_model extends Kodakil_Model
	{	
		function __construct(){
			parent::__construct();
		}

		public function getCorporate(){
			$this->db->select('*');
			$this->db->from('corporate');
			$this->db->where(array('Id'=>1));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->row();
			}else{
				return false;
			}
		}

		public function updateCorporate($postInfo){
			return $this->db->set($postInfo)->where(array('Id'=>'1'))->update('corporate');
		}

		public function about(){
			$this->db->select('*');
			$this->db->from('statik_info');
			$this->db->where(array('Id'=>1));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->row();
			}else{
				return false;
			}
		}

		public function services(){
			$this->db->select('*');
			$this->db->from('statik_info');
			$this->db->where(array('Id'=>2));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->row();
			}else{
				return false;
			}
		}

		public function updateAbout($data){
			return $this->db->set($data)->where(array('Id'=>1))->update('statik_info');
		}

		public function updateServices($data){
			return $this->db->set($data)->where(array('Id'=>2))->update('statik_info');
		}

		public function ImageUpload(){
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

	}
?>