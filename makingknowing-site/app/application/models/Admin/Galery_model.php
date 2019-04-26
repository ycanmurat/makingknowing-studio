<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Galery_model extends Kodakil_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function GaleryImageUpload()
		{
			if ($_FILES['file']["type"] == 'application/octet-stream' OR 
					$_FILES['file']["type"] == 'application/postscript' OR 
						$_FILES['file']["type"] == 'image/png' OR 
							$_FILES['file']["type"] == 'image/jpeg' OR 
								$_FILES['file']["type"] == 'image/webp' OR 
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

		public function addTitle($title)
		{
			return $this->db->insert('service_titles',array('title'=>$title));
		}

		public function getTitles()
		{
			$this->db->from('service_titles');
			$this->db->where(array('deleted'=>0));
			$return = $this->db->get();
			if ($return->num_rows()>0) {
				return $return->result();
			} else {
				return array();
			}
		}

		public function GaleryEditStatus($id,$st)
		{
			return $this->db->set(array('status'=>$st))->where(array('id'=>$id))->update('service_titles');
		}

		public function deleteGalery($id)
		{
			return $this->db->set(array('deleted'=>1))->where(array('id'=>$id))->update('service_titles');
		}

		public function addImage($data)
		{
			return $this->db->insert('service_images',$data);
		}
		
		public function addPdf($data)
		{
			return $this->db->insert('pdf',$data);
		}

		public function getImages()
		{
			$this->db->from('service_images');
			$this->db->where(array('deleted'=>0));
			$return = $this->db->get();
			if ($return->num_rows()>0) {
				return $return->result();
			} else {
				return array();
			}
		}

		public function getPdfs()
		{
			$this->db->from('pdf');
			$this->db->where(array('deleted'=>0));
			$return = $this->db->get();
			if ($return->num_rows()>0) {
				return $return->result();
			} else {
				return array();
			}
		}

		public function referacesStatusUpdate($id,$newInfo)
		{
			return $this->db->set(array('status'=>$newInfo))->where(array('id'=>$id))->update('service_images');
		}

		public function pdfstatusChange($id,$newInfo)
		{
			return $this->db->set(array('status'=>$newInfo))->where(array('id'=>$id))->update('pdf');
		}

		public function deletepdf($id)
		{
			return $this->db->set(array('deleted'=>1))->where(array('id'=>$id))->update('pdf');
		}

		public function deleteReferances($id)
		{
			return $this->db->set(array('deleted'=>1))->where(array('id'=>$id))->update('service_images');
		}
	}
?>