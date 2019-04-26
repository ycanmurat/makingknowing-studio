<?php 
/**
 * 
 */
class Menu_model2 extends Kodakil_Model
{
	
	function __construct(){
		parent::__construct();
	}
	public function addMenu($menu,$sort,$main){

		if ($this->session->userdata('productImage')) {
			$image = $this->session->userdata('productImage');
			$this->db->set(array('menu_image'=>$image));
			$this->session->unset_userdata('productImage');
		}
		
		$array = array('menu' => $menu, 'sort' => $sort,'main_menu'=>$main,'slug'=>url_seo($menu));
		$this->db->set($array);
		return $this->db->insert('menu2');
	}
	public function getMenu(){
		$this->db->select('mm.*,(SELECT menu FROM menu2 m WHERE m.id = mm.main_menu) ust_menu');
		$this->db->from('menu2 mm');
		$this->db->where(array('deleted'=>0));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		}else{
			return false;
		}
	}


	public function getMainMenu(){
		$this->db->select('mm.*,(SELECT menu FROM menu2 m WHERE m.id = mm.main_menu) ust_menu');
		$this->db->from('menu2 mm');
		$this->db->where(array('deleted'=>0,'main_menu' => 0));
		$returnQuery = $this->db->get();
		if ($returnQuery->num_rows()>0) {
			return $returnQuery->result();
		}else{
			return false;
		}
	}

	//
	public function menuStatusUpdate($Id,$newInfo){
		return $this->db->set('status',$newInfo)->where(array('Id'=>$Id))->update('menu2');
	}
	public function deleteMenu($Id){
		return $this->db->set('deleted','1')->where(array('Id'=>$Id))->update('menu2');
	}
	public function menuSort($sort){
		foreach ($sort as $key => $val) {
			$this->db->where(array('Id' => $key));
			$this->db->set(array('sort' => $val));
			$this->db->update('menu2');
			}
		return true;
	}

	public function update($data,$id)
	{
		$this->db->set($data);
		if ($data->menu) {
			$data->slug = url_seo($data->menu);
		}

		if ($this->session->userdata('productImage')) {
			$image = $this->session->userdata('productImage');
			$this->db->set(array('menu_image'=>$image));
			$this->session->unset_userdata('productImage');
		}
		
		$this->db->where(array('id' => $id));
		$this->db->update('menu2');
		return true;
	}

	public function getMenuNotIn($id)
	{
		$this->db->where_not_in('id', array($id));
		$this->db->where(array('deleted'=>0,'main_menu' => 0));
		$q = $this->db->get('menu2');
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
		$q = $this->db->get('menu2');
		if ($q->num_rows()>0) {
			return $q->row();
		}else{
			return false;
		}
	}
}
?>