<?php 
/**
 * 
 */
class Product_Model extends Kodakil_model
{
	function __construct()
	{
		parent::__construct();
	}

	public function getListBySlug($slug = '',$slug2 = '')
	{
		if ($slug == '') {
			return false;
		}else{
			if ($slug2 == '') {
				$this->db->select('id');
				$this->db->order_by('sort','ASC');
				$this->db->limit(1);
				$this->db->where(array('deleted' => 0, 'status' => 1,'slug' => $slug));
				$q = $this->db->get('menu2');
				if ($q->num_rows()>0) {
					$id = $q->row()->id;
					$this->db->select('slug');
					$this->db->order_by('sort','ASC');
					$this->db->limit(1);
					$this->db->where(array('deleted' => 0, 'status' => 1,'main_menu' => $id));
					$q = $this->db->get('menu2');
					if ($q->num_rows()>0) {
						redirect(site_url('urunler/'.$slug.'/'.$q->row()->slug));
					}
				}
			}else{
				$this->db->select('id');
				$this->db->where(array('deleted' => 0, 'status' => 1,'slug' => $slug2));
				$q = $this->db->get('menu2');
				if ($q->num_rows()>0) {
					$id = $q->row()->id;
					$this->db->select('id,product_name,product_image,slug,price,old_price');
					$this->db->where(array('deleted' => 0, 'status' => 1,'menu_id' => $id));
					$q = $this->db->get('products2');
					if ($q->num_rows()>0) {
						return $q->result();
					}else{
						return 3;
					}
				}else{
					return false;
				}
			}
			return true;
		}
	}

	public function getCategoryList()
	{
		$this->db->select('id,menu,slug,main_menu');
		$this->db->where(array('deleted' => 0, 'status' => 1));
		$this->db->order_by('sort','ASC');
		$q = $this->db->get('menu2');
		if ($q->num_rows()>0) {
			$menus = $q->result();
			$menu = array();
			foreach ($menus as $key => $val) {
				if ($val->main_menu == 0) {
					$val->sub = array();
					$menu[] = $val;
				}
			}

			foreach ($menu as $key => $val) {
				foreach ($menus as $key2 => $val2) {
					if ($val->id == $val2->main_menu) {
						$menu[$key]->sub[] = $val2;
					}
				}
			}

			return $menu;

		}else{
			return false;
		}
	}


	// Ürün urlsine göre ürün getirir
	public function getProductByProductSlug($slug = '')
	{
		if ($slug == '') {
			return false;
		}

		$this->db->where(array('slug'=>$slug, 'deleted'=> 0, 'status'=> 1));
		$q = $this->db->get('products2');
		//prex($this->db->last_query());
		if ($q->num_rows()>0) {
			$product = $q->row();
			$this->db->where(array('product_id' => $product->Id));
			$q = $this->db->get('product_img2');
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