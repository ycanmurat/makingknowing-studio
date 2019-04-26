<?php 
/**
 * 
 */
class Works_model extends Kodakil_Model
{
	
	function __construct(){
		parent::__construct();
	}
	public function addMenu($data){
		$this->db->set($data);
		return $this->db->insert('works');
	}

	public function getMenu(){
		$this->db->select('*');
		$this->db->from('works');
		$this->db->where(array('deleted'=>0));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		}else{
			return false;
		}
	}

	public function menuStatusUpdate($Id,$newInfo){
		return $this->db->set('status',$newInfo)->where(array('Id'=>$Id))->update('works');
	}

	public function detailMenuStatusUpdate($Id,$newInfo){
		return $this->db->set('status',$newInfo)->where(array('Id'=>$Id))->update('works_detail');
	}

	public function deleteMenu($id){
		return $this->db->set('deleted','1')->where(array('Id'=>$id))->update('works');
	}

	public function detailDeleteMenu($id)
	{
		$this->db->set('deleted','1')->where(array('Id'=>$id))->update('works_detail');
	}

	public function menuSort($sort){
		foreach ($sort as $key => $val) {
			$this->db->where(array('Id' => $key));
			$this->db->set(array('sort' => $val));
			$this->db->update('works');
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
		$this->db->update('works');
		return true;
	}

	public function detailIpdate($data,$id)
	{
		$this->db->set($data);
		if ($data->menu) {
			$data->slug = url_seo($data->menu);
		}
		
		$this->db->where(array('id' => $id));
		$this->db->update('works_detail');
		return true;
	}

	public function getMenuNotIn($id)
	{
		$this->db->where_not_in('id', array($id));
		$this->db->where(array('deleted'=>0));
		$q = $this->db->get('works');
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
		$q = $this->db->get('works');
		if ($q->num_rows()>0) {
			return $q->row();
		}else{
			return false;
		}
	}

	public function getMenuDetailById($id)
	{
		$this->db->where(array('id'=>$id,'deleted' => 0));
		$q = $this->db->get('works_detail');
		if ($q->num_rows()>0) {
			return $q->row();
		}else{
			return false;
		}
	}

	public function getDetails($id)
	{
		$this->db->where(array('main_menu'=>$id,'deleted' => 0));
		$q = $this->db->get('works_detail');
		if ($q->num_rows()>0) {
			return $q->result();
		}else{
			return array();
		}
	}

	public function detailAddMenu($data)
	{
		$this->db->set($data);
		return $this->db->insert('works_detail');
	}

	public function detailMenuSort($sort)
	{
		foreach ($sort as $key => $val) {
			$this->db->where(array('Id' => $key));
			$this->db->set(array('sort' => $val));
			$this->db->update('works_detail');
		}
		return true;
	}
}
?>