<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Contact_model extends Kodakil_Model
	{
		function __construct(){
			parent::__construct();
		}
		public function getContact(){
			$this->db->select('*');
			$this->db->from('contact');
			$this->db->where(array('deleted'=>0));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->result();
			}else{
				return false;
			}
		}
		public function delete($Id){
			return $this->db->set('deleted',1)->where(array('Id'=>$Id))->update('contact');
		}
		public function deleteDate($Id){
			return $this->db->set('deleted',1)->where(array('Id'=>$Id))->update('date');
		}

		public function deleteOffer($Id){
			return $this->db->set('deleted',1)->where(array('Id'=>$Id))->update('date_offer');
		}
		public function bulletin(){
			$this->db->select('*');
			$this->db->from('bulletin');
			$this->db->where(array('deleted'=>0));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->result();
			}else{
				return false;
			}
		}
		public function deleteBulletin($Id){
			return $this->db->set('deleted',1)->where(array('Id'=>$Id))->update('bulletin');
		}

		public function getDate(){
			$this->db->select('*');
			$this->db->from('date');
			$this->db->where(array('deleted'=>0));
			$return = $this->db->get();
			if ($return->num_rows()>0) {
				return $return->result();
			} else {
				return false;
			}
		}

		public function getDateOffer(){
			$this->db->select('*');
			$this->db->from('date_offer');
			$this->db->where(array('deleted'=>0));
			$return = $this->db->get();
			if ($return->num_rows()>0) {
				return $return->result();
			} else {
				return false;
			}
		}
	}
?>