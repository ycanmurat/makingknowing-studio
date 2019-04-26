<?php 
/**
 * 
 */
class Content_Model extends Kodakil_model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getContentBySlug($slug = '')
	{
		if ($slug == '') {
			return false;
		}

		$this->db->select('products.*,(SELECT menu FROM menu WHERE menu.id = products.menu_id) menu_name');
		$this->db->where(array('slug'=>$slug));
		$q = $this->db->get('products');
		if ($q->num_rows()>0) {
			$product = $q->row();
			$this->db->where(array('product_id'=>$product->Id));
			$q = $this->db->get('product_img');
			if ($q->num_rows()>0) {
				$product->images = $q->result();
			}else{
				$product->images = array();
			}
			return $product;
		}else{
			return false;
		}
	}
}

?>