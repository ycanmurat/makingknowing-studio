<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Products extends Kodakil_Controller
	{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Products_model');
		}
		public function index(){
			if ($this->input->post()) {
				$sort = $this->input->post('sort');
				$this->Products_model->productUpdate($sort);
				redirect(admin_url('Products'));
			}
			$data 				= new StdClass;
			$data->mainMenu 	= 'Products';
			$data->subMenu 		= 'ProductsList';
			$data->productInfo 	= $this->Products_model->productInfo();

			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/products');
			$this->load->view('Admin/footer');
		}
		public function add(){
			$data 			= new StdClass;
			$data->mainMenu = 'Products';
			$data->subMenu 	= 'ProductsAdd';
			$data->menus	= $this->Products_model->getMenus();

			if($this->input->post()){
				$this->form_validation->set_rules('product_name', 'İçerik Başlığı', 'required');
				$this->form_validation->set_rules('product_info', 'İçerik Bilgisi', 'required|min_length[30]');
				if ($this->form_validation->run() == FALSE){
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/products_add');
					$this->load->view('Admin/footer');
                }else{
					$postData = $this->getAllPosts();
					$postData->slug = url_seo($postData->product_name);
					$postData->product_image = $this->session->userdata('productImage');

					if ($_FILES != array()) {
						$postFile = reverseArray($_FILES['file']);
					}else{
						$postFile = array();
					}
					
					if($this->Products_model->addProduct($postData,$postFile)){
						$this->session->set_flashdata('onay','1');
					}else{
						$this->session->set_flashdata('hata','1');
					}
					$this->session->unset_userdata('productImage');
					redirect(admin_url('Products/add'));
                }
			}else{
				$this->load->view('Admin/header',$data);
				$this->load->view('Admin/products_add');
				$this->load->view('Admin/footer');
			}
			
		}
		public function ImageUpload(){	
			$sonuc = $this->Products_model->ProductImageUpload();
			if ($sonuc != false){
				$this->session->set_userdata('productImage', $sonuc);
			}
		}

		public function ImageUpload2(){	
			$sonuc = $this->Products_model->ProductImageUpload();
			if ($sonuc != false){
				$this->session->set_userdata('productImage2', $sonuc);
			}
		}

		public function ImageUpload3(){	
			$sonuc = $this->Products_model->ProductImageUpload();
			if ($sonuc != false){
				$this->session->set_userdata('productImage3', $sonuc);
			}
		}
		public function editStatus($Id,$st){
			if($this->Products_model->editStatus($Id,$st)){
				redirect(admin_url('Products'));
			}else{
				redirect(admin_url('Products'));
			}
		}
		public function deleteProduct($Id){
			if($this->Products_model->deleteProduct($Id)){
				redirect(admin_url('Products'));
			}else{
				redirect(admin_url('Products'));
			}
		}

		public function deleteProductImage($id,$imageId)
		{
			$this->Products_model->deleteImage($imageId);
			redirect(admin_url('Products/editProduct/'.$id));
		}

		public function editProduct($Id){
			$data 			= new StdClass;
			$data->mainMenu = 'Products';
			$data->subMenu 	= 'ProductsList';
			$data->pInfo 	= $this->Products_model->product($Id);
			$data->menus	= $this->Products_model->getMenus();
			$data->images 	= $this->Products_model->getImages($Id);
			$data->id  		= $Id;
			if($data->pInfo==false){
				redirect(admin_url('Products'));
			}

			if($this->input->post()){
				$this->form_validation->set_rules('product_name', 'İçerik Başlığı', 'required');
				$this->form_validation->set_rules('product_info', 'İçerik Bilgisi', 'required|min_length[30]');
				if ($this->form_validation->run() == FALSE){
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/products_edit');
					$this->load->view('Admin/footer');
                }else{
					$postData = $this->getAllPosts();
					$postData->slug = url_seo($postData->product_name);
					if ($this->session->userdata('productImage')) {
						$postData->product_image = $this->session->userdata('productImage');
						$this->session->unset_userdata('productImage');
					}

					if ($_FILES != array()) {
						$postFile = reverseArray($_FILES['file']);
					}else{
						$postFile = array();
					}

					if($this->Products_model->eProduct($postData,$Id,$postFile)){
						$this->session->set_flashdata('onay','1');
					}else{
						$this->session->set_flashdata('hata','1');
					}
					redirect(admin_url('Products/editProduct/'.$data->pInfo->Id));
				}
			}else{
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/products_edit');
			$this->load->view('Admin/footer');
			}
		}
		public function NewsProductAdd(){
			$header_data 			= new StdClass;
			$data 					= new StdClass;
			$header_data->mainMenu 	= 'Products';
			$header_data->subMenu 	= 'NewsProductAdd';
			$data->products 		= $this->Products_model->newProductInfo();
			if($this->input->post()){
				$product_id = $this->input->post('product_id',true);
				if($this->Products_model->ProductIsThere($product_id)){
					$this->session->set_flashdata('urun_var','1');
					redirect(admin_url('Products/NewsProductAdd'));
				}else{
					if($this->Products_model->addNewProduct($product_id)){
						$this->session->set_flashdata('onay','1');
						redirect(admin_url('Products/NewsProductAdd'));
					}else{
						$this->session->set_flashdata('hata','1');
						redirect(admin_url('Products/NewsProductAdd'));	
					}
				}
			}
			$data->getNewsProduct = $this->Products_model->getNewsProduct();
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/new_product',$data);
			$this->load->view('Admin/footer');
		}
		public function deleteNewProduct($Id){
			if($this->Products_model->deleteNewProduct($Id)){
				redirect(admin_url('Products/NewsProductAdd'));
			}else{
				redirect(admin_url('Products/NewsProductAdd'));
			}
		}
	}
?>