<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
class JobApp_model extends Kodakil_Model{

	function __construct(){
		parent::__construct();
	}

	public function getJobApp()
	{
		$this->db->select('job_app.*,positions.name position_name');
		$this->db->join('positions','positions.Id = job_app.position_id');
		$this->db->order_by('job_app.id','DESC');
		$q = $this->db->get('job_app');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('job_app');
		return true;
	}

	public function PositionDelete($id)
	{
		$this->db->where('id',$id);
		$this->db->set('deleted',1);
		$this->db->update('positions');
		return true;
	}

	public function getPositions()
	{
		$this->db->where('deleted',0);
		$q = $this->db->get('positions');

		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}

	public function setPositions($name)
	{
		$this->db->set(array('name' => $name));
		$this->db->insert('positions');
		return true;
	}
}
?>