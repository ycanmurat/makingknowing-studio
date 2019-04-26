<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Products_model extends Kodakil_Model
	{		
		function __construct(){
			parent::__construct();
		}
		public function languageList(){
			$this->db->select('Id,lang_name,status,deleted');
			$this->db->from('languages');
			$this->db->where(array('status'=>1,'deleted'=>0));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->result();
			}else{
				return false;
			}
		}

		public function getMenus()
		{
			$this->db->where(array('deleted' => 0));
			$q = $this->db->get('menu');
			if ($q->num_rows()>0) {
				return $q->result();
			}else{
				return array();
			}
		}

		public function ProductImageUpload(){
			if ((substr($_FILES['file']["name"],-2) != 'js') AND (substr($_FILES['file']["name"],-3) != 'php')){

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

		public function singleImageUpload($data){
			if ((substr($data["name"],-2) != 'js') AND (substr($data["name"],-3) != 'php')){

				$target_dir 	= "assets/uploads/";
				$rand 			= rand(10,999999999999);
				$rand 			= md5(md5($rand).md5(strtotime('now')));
				$target_file 	= $target_dir.$rand.url_seo($data["name"]);
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
				if (move_uploaded_file($data["tmp_name"], $target_file)){
					return $target_file;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		public function deleteImage($id)
		{
			$this->db->where(array('id' => $id));
			$this->db->delete('product_img');
		}

		public function getImages($id)
		{
			$this->db->where(array('product_id' => $id));
			$q = $this->db->get('product_img');
			if ($q->num_rows()>0) {
				return $q->result();
			}else{
				return array();
			}
		}

		public function addProduct($data,$file){

			//prex($file);
			$images = array();

			$this->db->insert('products',$data);
			$id = $this->db->insert_id();

			
			if (($file[0]['error'])!=4) {
				foreach ($file as $key => $val) {
					$images[] = array('url'=>$this->singleImageUpload($val),'product_id'=>$id);
				}
				$this->db->insert_batch('product_img',$images);
			}
			return true;
		}

		public function category_list(){
			$this->db->select('c.Id,c.status,c.deleted,cl.category_id,cl.lang_id,cl.name');
			$this->db->from('category c');
			$this->db->join('category_lang cl','c.Id = cl.category_id');
			$this->db->where(array('c.status'=>1,'c.deleted'=>0,'cl.lang_id'=>1));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()){
				return $returnQuery->result();
			}else{
				return false;
			}
		}

		public function productUpdate($data)
		{
			$array = array();
			if ($data != array()) {
				foreach ($data as $key => $val) {
					$array[] = array('id'=>$key,'sort'=>$val);
				}
				if ($this->db->update_batch('products', $array, 'id')) {
					return true;
				}else{
					return false;
				}
			}
		}

		public function productInfo(){
			
			$this->db->select('m.Id,m.menu menu_name,p.Id,p.product_name,p.product_image,p.menu_id,p.status,p.deleted,p.sort');
			$this->db->from('products p');
			$this->db->join('menu m','p.menu_id = m.Id');
			$this->db->where(array('m.deleted'=>0,'p.deleted'=>0));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->result();
			}else{
				return false;
			}
			
		}
		public function editStatus($Id,$st){
			return $this->db->set('status',$st)->where('Id',$Id)->update('products');
		}
		public function deleteProduct($Id){
			return $this->db->set('deleted',1)->where('Id',$Id)->update('products');
		}
		public function product($Id){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->where(array('status'=>1,'deleted'=>0,'Id'=>$Id));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->row();
			}else{
				return false;
			}
		}
		public function eProduct($productInfo,$Id,$file){

			if (($file[0]['error'])!=4) {
				foreach ($file as $key => $val) {
					$images[] = array('url'=>$this->singleImageUpload($val),'product_id'=>$Id);
				}
				$this->db->insert_batch('product_img',$images);
			}

			$this->db->set($productInfo)->where('Id',$Id)->update('products');
			return true;
		}
		public function newProductInfo(){
			$this->db->select('Id,product_name,lang_id,status,deleted');
			$this->db->from('products');
			$this->db->where(array('lang_id'=>1,'status'=>1,'deleted'=>0));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->result();
			}else{
				return false;
			}
		}
		public function ProductIsThere($product_id){
			$this->db->select('*');
			$this->db->from('new_products');
			$this->db->where(array('product_id'=>$product_id));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return true;
			}else{
				return false;
			}
		}
		public function addNewProduct($product_id){
			$p = array('product_id'=>$product_id);
			return $this->db->insert('new_products',$p);
		}
		public function getNewsProduct(){
			$this->db->select('np.Id,np.product_id,p.product_name,p.status,p.deleted,p.lang_id');
			$this->db->from('new_products np');
			$this->db->join('products p','np.product_id = p.Id');
			$this->db->where(array('p.lang_id'=>1,'p.status'=>1,'p.deleted'=>0));
			$returnQuery = $this->db->get();
			if($returnQuery->num_rows()>0){
				return $returnQuery->result();
			}else{
				return false;
			}
		}
		public function deleteNewProduct($Id){
			return $this->db->delete('new_products', array('Id' => $Id));
		}

	}
?>