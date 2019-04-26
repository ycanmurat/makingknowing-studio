<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class Ik_model extends Kodakil_Model
{
	function __construct(){
		parent::__construct();
	}

	public function getPositions(){
		$this->db->select('*');
		$this->db->from('positions');
		$return = $this->db->get();
		if ($return->num_rows()>0) {
			return $return->result();
		} else {
			return false;
		}
	}

	public function setJobApplication($data)
	{
		$data->added_ip = $this->input->ip_address();
		$this->db->set($data);
		$this->db->insert('job_app');
		
		$id = $this->db->insert_id();
		if ($id > 0) {
			return true;
		}else{
			return false;
		}
	}
}
?>
