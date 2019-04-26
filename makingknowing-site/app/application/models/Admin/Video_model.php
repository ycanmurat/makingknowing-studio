<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Video_model extends Kodakil_Model
	{
		function __construct(){
			parent::__construct();
		}

		public function addVideo($data){
			if($this->db->insert('service_content',$data)){
				return true;
			}else{
				return false;
			}
		}

		public function imageInfo(){
			$this->db->select('st.id title_id,st.title,sc.*');
			$this->db->from('service_titles st');
			$this->db->join('service_content sc','st.id = sc.title_id');
			$this->db->where(array('sc.deleted'=>0));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->result();
			}else{
				return false;
			}
		}

		public function VideoEditStatus($id,$st){
			return $this->db->set('status',$st)->where('id',$id)->update('service_content');
		}

		public function deleteVideo($id){
			return $this->db->set('deleted',1)->where('id',$id)->update('service_content');
		}

		public function getCategory()
		{
			$this->db->select('*');
			$this->db->from('service_titles');
			$this->db->where(array('status'=>1,'deleted'=>0));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->result();
			}else{
				return array();
			}
		}
	}
?>