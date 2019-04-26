<?
if(!defined('BASEPATH'))exit('No direct script access allowed');
	class Products2 extends Kodakil_Controller
	{
		function __construct(){
			parent::__construct();
			$this->checkLogin();
			$this->load->model('Admin/Products_model2');
		}

		public function index(){
			if ($this->input->post()) {
				$sort = $this->input->post('sort');
				$this->Products_model2->productUpdate($sort);
				redirect(admin_url('Products2'));
			}
			$data 				= new StdClass;
			$data->mainMenu 	= 'Products2';
			$data->subMenu 		= 'ProductsList2';
			$data->productInfo 	= $this->Products_model2->productInfo();

			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/products2');
			$this->load->view('Admin/footer');
		}

		public function add(){
			$data 			= new StdClass;
			$data->mainMenu = 'Products2';
			$data->subMenu 	= 'ProductsAdd2';
			$data->menus	= $this->Products_model2->getMenus();

			if($this->input->post()){
				$this->form_validation->set_rules('product_name', 'İçerik Başlığı', 'required');
				$this->form_validation->set_rules('product_info', 'İçerik Bilgisi', 'required|min_length[30]');
				if ($this->form_validation->run() == FALSE){
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/products_add2');
					$this->load->view('Admin/footer');
                }else{
					$postData = $this->getAllPosts();
					$postData->slug = url_seo($postData->product_name);
					$postData->product_image 	= $this->session->userdata('productImage');
					$postData->pdf 				= $this->session->userdata('productPdf');
					$this->session->unset_userdata('productImage');
					$this->session->unset_userdata('productPdf');

					if ($_FILES != array()) {
						$postFile = reverseArray($_FILES['file']);
					}else{
						$postFile = array();
					}
					
					if($this->Products_model2->addProduct($postData,$postFile)){
						$this->session->set_flashdata('onay','1');
					}else{
						$this->session->set_flashdata('hata','1');
					}
					$this->session->unset_userdata('productImage');
					redirect(admin_url('Products2/add'));
                }
			}else{
				$this->load->view('Admin/header',$data);
				$this->load->view('Admin/products_add2');
				$this->load->view('Admin/footer');
			}
			
		}

		public function ImageUpload(){	
			$sonuc = $this->Products_model2->ProductImageUpload();
			if ($sonuc != false){
				$this->session->set_userdata('productImage', $sonuc);
			}
		}

		public function ImageUpload2(){	
			$sonuc = $this->Products_model2->ProductImageUpload();
			if ($sonuc != false){
				$this->session->set_userdata('productPdf', $sonuc);
			}
		}

		public function editStatus($Id,$st){
			if($this->Products_model2->editStatus($Id,$st)){
				redirect(admin_url('Products2'));
			}else{
				redirect(admin_url('Products2'));
			}
		}

		public function deleteProduct($Id){
			if($this->Products_model2->deleteProduct($Id)){
				redirect(admin_url('Products2'));
			}else{
				redirect(admin_url('Products2'));
			}
		}

		public function deleteProductImage($id,$imageId)
		{
			$this->Products_model2->deleteImage($imageId);
			redirect(admin_url('Products2/editProduct/'.$id));
		}

		public function editProduct($Id){
			$data 			= new StdClass;
			$data->mainMenu = 'Products2';
			$data->subMenu 	= 'ProductsList2';
			$data->pInfo 	= $this->Products_model2->product($Id);
			$data->menus	= $this->Products_model2->getMenus();
			$data->images 	= $this->Products_model2->getImages($Id);
			$data->id  		= $Id;
			if($data->pInfo==false){
				redirect(admin_url('Products2'));
			}

			if($this->input->post()){
				$this->form_validation->set_rules('product_name', 'İçerik Başlığı', 'required');
				$this->form_validation->set_rules('product_info', 'İçerik Bilgisi', 'required|min_length[30]');
				if ($this->form_validation->run() == FALSE){
					$this->load->view('Admin/header',$data);
					$this->load->view('Admin/products_edit2');
					$this->load->view('Admin/footer');
                }else{
					$postData = $this->getAllPosts();
					$postData->slug = url_seo($postData->product_name);
					if ($this->session->userdata('productImage')) {
						$postData->product_image = $this->session->userdata('productImage');
						$this->session->unset_userdata('productImage');
					}

					if ($this->session->userdata('productPdf')) {
						$postData->pdf 				= $this->session->userdata('productPdf');
						$this->session->unset_userdata('productPdf');
					}



					if ($_FILES != array()) {
						$postFile = reverseArray($_FILES['file']);
					}else{
						$postFile = array();
					}

					if($this->Products_model2->eProduct($postData,$Id,$postFile)){
						$this->session->set_flashdata('onay','1');
					}else{
						$this->session->set_flashdata('hata','1');
					}
					redirect(admin_url('Products2/editProduct/'.$data->pInfo->Id));
				}
			}else{
			$this->load->view('Admin/header',$data);
			$this->load->view('Admin/products_edit2');
			$this->load->view('Admin/footer');
			}
		}

		public function NewsProductAdd(){
			$header_data 			= new StdClass;
			$data 					= new StdClass;
			$header_data->mainMenu 	= 'Products2';
			$header_data->subMenu 	= 'NewsProductAdd2';
			$data->products 		= $this->Products_model2->newProductInfo();
			if($this->input->post()){
				$product_id = $this->input->post('product_id',true);
				if($this->Products_model2->ProductIsThere($product_id)){
					$this->session->set_flashdata('urun_var','1');
					redirect(admin_url('Products2/NewsProductAdd'));
				}else{
					if($this->Products_model2->addNewProduct($product_id)){
						$this->session->set_flashdata('onay','1');
						redirect(admin_url('Products2/NewsProductAdd'));
					}else{
						$this->session->set_flashdata('hata','1');
						redirect(admin_url('Products2/NewsProductAdd'));	
					}
				}
			}
			$data->getNewsProduct = $this->Products_model2->getNewsProduct();
			$this->load->view('Admin/header',$header_data);
			$this->load->view('Admin/new_product2',$data);
			$this->load->view('Admin/footer');
		}

		public function deleteNewProduct($Id){
			if($this->Products_model2->deleteNewProduct($Id)){
				redirect(admin_url('Products2/NewsProductAdd'));
			}else{
				redirect(admin_url('Products2/NewsProductAdd'));
			}
		}
	}
?>