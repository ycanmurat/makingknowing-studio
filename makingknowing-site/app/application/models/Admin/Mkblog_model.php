<?php 
/**
 * 
 */
class Mkblog_model extends Kodakil_Model
{
	
	function __construct(){
		parent::__construct();
	}
	public function addMenu($data){
		$this->db->set($data);
		return $this->db->insert('Mkblog');
	}

	public function getMenu(){
		$this->db->select('*');
		$this->db->from('Mkblog');
		$this->db->where(array('deleted'=>0));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		}else{
			return false;
		}
	}

	public function menuStatusUpdate($Id,$newInfo){
		return $this->db->set('status',$newInfo)->where(array('Id'=>$Id))->update('Mkblog');
	}

	public function deleteMenu($Id){
		return $this->db->set('deleted','1')->where(array('Id'=>$Id))->update('Mkblog');
	}

	public function menuSort($sort){
		foreach ($sort as $key => $val) {
			$this->db->where(array('Id' => $key));
			$this->db->set(array('sort' => $val));
			$this->db->update('Mkblog');
			}
		return true;
	}

	public function update($data,$id)
	{
		$this->db->set($data);
		if ($data->menu) {
			$data->slug = url_seo($data->menu);
		}
		
		$this->db->where(array('id' => $id));
		$this->db->update('Mkblog');
		return true;
	}

	public function getMenuNotIn($id)
	{
		$this->db->where_not_in('id', array($id));
		$this->db->where(array('deleted'=>0));
		$q = $this->db->get('Mkblog');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return false;
		}
		$this->db->where_not_in('crm.user_id', $ignore);
	}

	public function getMenuById($id)
	{
		$this->db->where(array('id'=>$id,'deleted' => 0));
		$q = $this->db->get('Mkblog');
		if ($q->num_rows()>0) {
			return $q->row();
		}else{
			return false;
		}
	}
}
?>